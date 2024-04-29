<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;





class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function index2()
    {
        return view("home2");
    }

    public function about()
    {
        return view("about");
    }
    public function booking()
    {
        return view("booking");
    }

    public function service()
    {
        return view("service");
    }
    public function package()
    {
        return view("package");
    }
    public function contact()
    {
        return view("contact");
    }
    public function blog()
    {
        return view("blog");
    }

    public function register():View
    {
        return view("register");
    }
    public function gallery():View
    {
        return view("gallery");
    }
    public function tour():View
    {
        return view("tour");
    }
    public function guides():View
    {
        return view("guides");
    }
    public function destination():View
    {
        return view("destination");
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/^[a-z0-9_.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',
            'password'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'language'=>'required'
        ]);
        $name=$request->input('name');
        $email=$request->input('email');
        $password=md5($request->input('password'));
        $phone=$request->input('phone');
        $gender=$request->input('gender');
        $language=implode(', ', $request->input('language'));
        if($request->file('file'))
        $file=$request->file('file');
        $filename=time()."_".$file->getClientOriginalName();
        $uploadlocation='./upload';
        $file->move($uploadlocation,$filename);
        $data1=DB::table('registration_table')->where('email','=',$email)->get();
        if(empty($data1[0])){
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'phone'=>$phone,
            'gender'=>$gender,
            'language'=>$language,
            'image'=>$uploadlocation.'/'.$filename,
            'user'=>'client',
            'auth'=>0
        ];
        DB::table('registration_table')->insert($data);
        return redirect('/login')->with('message', 'Inserted Data Successfully')->with('message-class', 'success');
        }
        return redirect('/register')->with('message','Email already exists.You cant use same email for multiple accounts.');
    }

    public function qsubmit(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    
    $date = now();

    $name = $request->input('name');
    $email = $request->input('email');
    $subject = $request->input('subject');
    $message = $request->input('message');

    $registrationData = DB::table('registration_table')->where('email', '=', $email)->first();
    if ($registrationData) {
        $regId = $registrationData->user_id;
        
        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'reg_id' => $regId,
            'date' => $date, 
            'qauth' => 0
        ];

        DB::table('query_table')->insert($data);

        return redirect('/contact')->with('message', 'Your query has been sent successfully.');
    }

    return redirect('/contact')->with('message', 'First register and then you can ask questions.')->with('type', 'alert-danger');
}


    public function bsubmit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/^[a-z0-9_.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',
            'date'=>'required',
            'destination'=>'required',
            'person'=>'required',
            'kid'=>'required',
            'message'=>'required'
        ]);
        $name=$request->input('name');
        $email=$request->input('email');
        $date=$request->input('date');
        $destination = $request->input('destination');
        $person = $request->input('person');
        $kid = $request->input('kid');
        $message = $request->input('message');
       
        $data1=DB::table('booking_table')->where('email','=',$email)->get();
        if(empty($data1[0])){
        $data=[
            'name'=>$name,
            'email'=>$email,
            'date'=>$date,
            'destination'=>$destination,
            'person'=>$person,
            'kid'=>$kid,
            'message'=>$message
        ];
        DB::table('booking_table')->insert($data);
        return redirect('/home')->with('message','Booking Details are Submitted');
        }
        return redirect('/booking')->with('message','Email already exists.You can not use same email for multiple accounts.');
    }


    public function qdisplay(): View
{
    
    $data = DB::table("query_table")->orderBy('user_id','DESC')->get();
    
    
    return view('qdisplay')->with(['allinfo1' => $data]);
}

public function bdisplay(): View
{
    
    $data = DB::table("booking_table")->orderBy('user_id','DESC')->get();
    
    
    return view('bdisplay')->with(['allinfo2' => $data]);
}
    

    public function displayall():View
    {
        $user='client';
        $data=DB::table("registration_table")->where('user','=',$user)->orderBy('user_id','DESC')->get();
        return view('displayall')->with(['allinfo'=>$data]);
    }
  
    public function block($blk)
    {
        $userid=$blk;
        DB::table('registration_table')->where('user_id','=',$userid)->update(['auth'=>1]);
        return redirect('/displayall')->with('message','User has been blocked');
    }
    public function unblock($ublk)
    {
        $userid=$ublk;
        DB::table('registration_table')->where('user_id','=',$userid)->update(['auth'=>0]);
        return redirect('/displayall')->with('message','User has been unblocked');
    }
    public function delete($del)
    {
        $userid=$del;
        DB::table('registration_table')->where('user_id','=',$userid)->delete();
        return redirect('/displayall')->with('message','User has been deleted');
    }
    public function qdelete($del1)
    {
        $userid=$del1;
        DB::table('query_table')->where('user_id','=',$userid)->delete();
        return redirect('/qdisplay')->with('message','User has been deleted');
    }

    public function bdelete($del2)
    {
        $userid=$del2;
        DB::table('booking_table')->where('user_id','=',$userid)->delete();
        return redirect('/bdisplay')->with('message','User has been deleted');
    }
    public function login():View
    {
        return view('login');
    }

    
    public function save(Request $request)
    {
        $email=$request->input('email');
        $password=md5($request->input('password'));
        $data=DB::table('registration_table')->where('email','=',$email)->get();
        if(empty($data[0]))
        {
            return redirect('/login')->with('message','Data not found');
        }
        else
        {
        if($data[0]->auth!=0)
        {
            return redirect('/login')->with('message','You are blocked by admin');
        }
        else
        {
            $password_db=$data[0]->password;
            if($password_db==$password)
            {
                if($data[0]->user=='client')
                {
                    session(['clientinfo' => $data]);
                    return view('home')->with(['clientinfo'=>$data]);
                }
                else
                {
                    return redirect('/adminloginp1');
                }
            }
            else
            {
                return redirect('/login')->with('message','Password doesnot match');
            }
        }
        }
    }

   

    public function show($id)
    {
        $registration_data = DB::table('registration_table')->where('user_id', $id)->first();
        $booking_data = DB::table('booking_table')->where('reg_id', $registration_data->user_id)->get();
        $query_data = DB::table('query_table')->where('reg_id', $registration_data->user_id)->get();
        
        
        foreach ($query_data as $query) {
            $adminreply_data[$query->user_id] = DB::table('adminreply_table')->where('query_id', $query->user_id)->get();
        }
        
        
    
        return view('displayclient', [
            'registration_data' => $registration_data,
            'booking_data' => $booking_data,
            'query_data'=> $query_data,
            'adminreply_data' => $adminreply_data ?? null, 
        ]);
    }
    
    
    
   
      
   
    
    public function edit($ep):View
    {
        $userid=$ep;
        $user=DB::table('registration_table')->where('user_id','=',$userid)->get();
        return view('edit')->with(['userinfo'=>$user[0]]);
        
    }

    
    

    public function update(Request $request)
    {
        
        $userid = $request->input('uid');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $language = implode(', ', $request->input('language'));
    
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . "_" . $file->getClientOriginalName();
            $uploadLocation = "./upload"; 
            $file->move($uploadLocation, $filename);
    
            
            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'gender' => $gender,
                'language' => $language,
                'image' => $uploadLocation . '/' . $filename
            ];
        } else {
            
            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'gender' => $gender,
                'language' => $language
            ];
        }
    
        
        DB::table('registration_table')->where('user_id', $userid)->update($data);
    
        
        return redirect(url('/show/' . $userid));
    }



    public function changepassword($cp):View
    {
        $userid=$cp;
        $data=DB::table('registration_table')->where('user_id','=',$userid)->get();
        return view('changepassword')->with(['passwordinfo'=>$data[0]]);
    }


    public function newpassword(Request $request)
{
    $cp = $request->input('uid');
    $oldp = md5($request->input('oldp'));
    $newp = md5($request->input('newp'));
    $confp = md5($request->input('confp'));
    
    $user = DB::table('registration_table')->where('user_id', '=', $cp)->first(); 
    $password_db = $user->password;

    if ($password_db !== $oldp) {
        Session::flash('error', 'Old password does not match');
        return redirect('/changepassword'.$cp);
    }

    if ($oldp === $newp) {
        Session::flash('error', 'Old password and new password are the same');
        return redirect('/changepassword'.$cp);
    }

    if ($newp !== $confp) {
        Session::flash('error', 'New password and confirm password do not match');
        return redirect('/changepassword'.$cp);
    }

    
    $data = ['password' => $newp];
    DB::table('registration_table')->where('user_id', '=', $cp)->update($data);
    
    Session::flash('message', 'Password changed successfully');
    return redirect('/login');
}


    public function adminloginp1()
    {
        return view("adminloginp1");
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/home')->with('message','Logout Successfully');
    }
    
    
    public function bsubmit2(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/^[a-z0-9_.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',
            'date'=>'required',
            'destination'=>'required',
            'person'=>'required',
            'kid'=>'required',
            'message'=>'required'
        ]);
    
        $name = $request->input('name');
        $email = $request->input('email');
        $date = $request->input('date');
        $destination = $request->input('destination');
        $person = $request->input('person');
        $kid = $request->input('kid');
        $message = $request->input('message');
       
        
        $registrationData = DB::table('registration_table')->where('email', '=', $email)->first();
    
        if($registrationData){
            
            $regId = $registrationData->user_id;
    
            $data = [
                'name' => $name,
                'email' => $email,
                'date' => $date,
                'destination' => $destination,
                'person' => $person,
                'kid' => $kid,
                'message' => $message,
                'reg_id' => $regId, 
                'bauth'=>0
            ];
            DB::table('booking_table')->insert($data);
            return redirect('/booking')->with('message', 'Booking Details are Submitted');
        }
        return redirect('/booking')->with('message', 'First Register and then continue booking Please.')->with('type', 'alert-danger');
    }
    
    public function approve($aprv)
    {
        $userid=$aprv;
        DB::table('booking_table')->where('user_id','=',$userid)->update(['bauth'=>1]);
        return redirect('/bdisplay')->with('message','User has been approved');
    }
    public function deny($dny)
    {
        $userid=$dny;
        DB::table('booking_table')->where('user_id','=',$userid)->update(['bauth'=>2]);
        return redirect('/bdisplay')->with('message','User has been denied');
    }




    public function qreply(Request $request, $rply)
    {
         $admin_message = $request->input('admin_message');

        $queryData = DB::table('query_table')->where('user_id', '=', $rply)->first();

    if($queryData) {
        DB::table('query_table')->where('user_id', '=', $rply)->update(['qauth' => 1]);

        DB::table('adminreply_table')->insert([
            'query_id' => $queryData->user_id,
            'message' => $admin_message, 
            'replied_at' => now(),
        ]);

        return redirect('/qdisplay')->with('message', 'User has been replied');
    } else {
        return redirect('/qdisplay')->with('error', 'No query found for the given user ID');
    }
    }

    public function max_booking()
    {
        $maxBooking = DB::table('booking_table')
        ->select('booking_table.reg_id', DB::raw('COUNT(*) as booking_count'))
        ->join('registration_table', 'booking_table.reg_id', '=', 'registration_table.user_id')
        ->groupBy('booking_table.reg_id')
        ->orderByDesc('booking_count')
        ->first();

    if ($maxBooking) {
        
        $maxBookingRegId = $maxBooking->reg_id;

        
        $userData = DB::table('registration_table')
            ->where('user_id', $maxBookingRegId)
            ->first();

        
        return view('showMaxBooking', ['userData' => $userData]);
    } 
    }

    public function max_query()
    {
        $maxQuery = DB::table('query_table')
        ->select('query_table.reg_id', DB::raw('COUNT(*) as query_count'))
        ->join('registration_table', 'query_table.reg_id', '=', 'registration_table.user_id')
        ->groupBy('query_table.reg_id')
        ->orderByDesc('query_count')
        ->first();

    if ($maxQuery) {
        
        $maxQueryRegId = $maxQuery->reg_id;

        
        $userData = DB::table('registration_table')
            ->where('user_id', $maxQueryRegId)
            ->first();

        
        return view('showMaxQuery', ['userData' => $userData]);
    } 
    }

    

}
