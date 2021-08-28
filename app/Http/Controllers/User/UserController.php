<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use App\Outbreak;
use App\Appointment;
use App\Reply;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //

    public function index()
    {   
      
        return view('dashboard.user.home');
    }
    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' =>'required|min:5|max:30'
        ],[
            'email.exists' => 'this email is not exists on user Records '
        ]);
        
       
        $cred = $request->only('email','password');
        if(Auth::guard('web')->attempt($cred)){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','incorrect Credentials');
        }
    }




    function create(Request $request){
        $request->validate([
            'name' => "required", 
            'number' => "required", 
            'email' => "required",
             'message'=>"required" ,
            'phone' => "required",
            'doctor'=>"required"
        ]);
  
        
        $user = new Appointment();
        $user->name = $request->name;
        $user->number = $request->number;
        $user->email = $request->email;
        $user->message = $request->message;
        $user->phone = $request->phone;
        $user->doctor = $request->doctor;
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success','The Patient Appointment is now Booked Successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, Fail to register');
        }

    }

    function sent_appointment(){
        $outbreak = Appointment::paginate(5);
        
        return view('dashboard.user.sent_appointment',compact('outbreak'));
    }

   function appointment(){
    $user = Doctor::all();
   
    return view('dashboard.user.appointment',compact('user'));
   }

    function doctor_reply(){
        $outbreak = Reply::paginate(5);
        
        return view('dashboard.user.doctor_reply',compact('outbreak'));
    } 
    function delete_reply($id) {
        $outbreak = Reply::find($id);
        $outbreak->delete();
        return redirect('dashboard.user.doctor_reply')->with('status',"Replied Appointment has Successfully Been Deleted");
    }
    function delete_appoint($id) {
        $outbreak = Appointment::find($id);
        $outbreak->delete();
        return redirect('dashboard.user.sent_appointment')->with('status',"Patient Appointment has Successfully Been Deleted");
        }
    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
