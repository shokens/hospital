<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\Outbreak;
use App\User;
use App\Reply;
use App\Appointment;
use Illuminate\Support\Facades\Auth;
class DoctorController extends Controller
{


    
    public function index()
    {   
        $docuser = Doctor::count();
        $outbreak = OutBreak::count();
        $patient = User::count();
        $appoint = Appointment::count();
       $responce = array(
           'docuser' => $docuser,
            'outbreak' => $outbreak,
            'patient' => $patient,
            'appoint' => $appoint
       );
      
        return view('dashboard.doctor.home',compact('responce'));
    }
    //
    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:doctors,email',
            'password' =>'required|min:5|max:30'
        ],[
            'email.exists' => 'this email is not exists on doctor table '
        ]);

        $cred = $request->only('email','password');
        if(Auth::guard('doctor')->attempt($cred)){
            return redirect()->route('doctor.home');
        }else{
            return redirect()->route('doctor.login')->with('fail','incorrect Credentials');
        }
    }

    function create_user(Request $request){
        $request->validate([
            'name' => "required", 
            'email' => "required|email|unique:doctors,email",
            'password' => "required|min:5|max:30",
            'cpassword' => "required|min:5|max:30|same:password",
          
            'gender' => "required", 
            'phone' => "required", 
        ]);

        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        
        $user->gender = $request->gender;
        $user->number = random_int(10000, 99999);
        $user->phone = $request->phone;
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success','The Patient Record is now Registered Successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, Fail to register');
        }
    }

    function outbreak_record(){
        $outbreak = Outbreak::paginate(5);
        
        return view('dashboard.doctor.outbreak_record',compact('outbreak'));
    }

    function doctor_reply($id){ 
        $outbreak = Appointment::find($id);
        // dd($editout);
         return view('dashboard.doctor.reply',compact('outbreak'));
    }

    function appointment_record(){
        $outbreak = Appointment::paginate(5);
        
        return view('dashboard.doctor.appointment_record',compact('outbreak'));
    }
    function delete_out($id) {
        $outbreak = Outbreak::find($id);
        $outbreak->delete();
        return redirect('dashboard.doctor.outbreak_record')->with('status',"Outbreak Account Has Been Successfully Deleted");
        }


        function replied_message(Request $request,$id){
            $request->validate([
                'name' => "required",
                'email' => "required",
                 'message'=>"required" ,
                'phone' => "required"
            ]);
      
            
            
        $user = new Reply();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->message = $request->message;
        $user->phone = $request->phone;
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success','The Patient Appointment has been Replied Successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, Fail to register');
        }

    
        }
    
    function logout(){
        Auth::guard('doctor')->logout();
        return redirect('/');
    }
}


