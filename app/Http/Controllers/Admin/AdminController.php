<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Doctor;
use App\Outbreak;
use App\User;
use App\Appointment;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //


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
      
        return view('dashboard.admin.home',compact('responce'));
    }
    function create_doctor(Request $request){
        $request->validate([
            'name' => "required", 
            'email' => "required|email|unique:doctors,email",
            'password' => "required|min:5|max:30",
            'cpassword' => "required|min:5|max:30|same:password",
            'role' => "required", 
            'gender' => "required", 
            'phone' => "required", 
        ]);

        
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = \Hash::make($request->password);
        $doctor->role = $request->role;
        $doctor->gender = $request->gender;
        $doctor->phone = $request->phone;
        $save = $doctor->save();

        if($save){
            return redirect()->back()->with('success','The Doctor Record is now Registered Successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, Fail to register');
        }



    }
    function admin_check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' =>'required|min:5|max:30'
        ],[
            'email.exists' => 'this email is not exists on admin records '
        ]);
        
       
        $cred = $request->only('email','password');
        if(Auth::guard('admin')->attempt($cred)){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail','incorrect Credentials');
        }
    }

     function doctor_record(){
        $data = Doctor::paginate(5);
        
        return view('dashboard.admin.doctor_record',compact('data'));
    }

  
    public function edit_doctor($id){
        $data = Doctor::find($id);
        // dd($editout);
         return view('dashboard.admin.edit_doctor',compact('data'));
    }
    function update_doctor(Request $request,$id){
        $request->validate([
            'name' => "required", 
            'email' => "required",
            'password' => "required",
           
            'role' => "required", 
            'gender' => "required", 
            'phone' => "required", 
        ]);

        
        
        $doctor =  Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = \Hash::make($request->password);
        $doctor->role = $request->role;
        $doctor->gender = $request->gender;
        $doctor->phone = $request->phone;
        $save = $doctor->save();

        if($save){
            return redirect()->back()->with('success','The Doctor Record is now Upadated Successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, Fail to register');
        }



    }

    function delete_doc($id) {
        $data = Doctor::find($id);
        $data->delete();
        return redirect('dashboard.admin.doctor_record')->with('status',"Doctor Account Has Been Successfully Deleted");
        }


        function create_outbreak(Request $request){
            $request->validate([
                'outbreak' => "required", 
                'comment' => "required", 
                'location' => "required", 
                'measure' => "required", 
            ]);
    
            
            $outbreak = new Outbreak();
            $outbreak->outbreak = $request->outbreak;
            $outbreak->comment = $request->comment;
            $outbreak->location = $request->location;
            $outbreak->measure = $request->measure;
            
            $save = $outbreak->save();
    
            if($save){
                return redirect()->back()->with('success','The Outbreak Record is now Registered Successfully');
            }else{
                return redirect()->back()->with('fail','Something went wrong, Fail to register');
            }
    
    
    
        }

        function outbreak_record(){
            $outbreak = Outbreak::paginate(5);
            
            return view('dashboard.admin.outbreak_record',compact('outbreak'));
        }
    
 
        
        
        function appointment_record(){
            $outbreak = Appointment::paginate(5);
            
            return view('dashboard.admin.appointment_record',compact('outbreak'));
        }
      function edit_outbreak($id){
            $outbreak = Outbreak::find($id);
            // dd($editout);
             return view('dashboard.admin.edit_outbreak',compact('outbreak'));
        }
        function update_outbreak(Request $request,$id){
            $request->validate([
                'outbreak' => "required", 
                'comment' => "required", 
                'location' => "required", 
                'measure' => "required", 
            ]);
    
            
            $outbreak = Outbreak::find($id);
            $outbreak->outbreak = $request->outbreak;
            $outbreak->comment = $request->comment;
            $outbreak->location = $request->location;
            $outbreak->measure = $request->measure;
            
            $save = $outbreak->save();
    
            if($save){
                return redirect()->back()->with('success','The Outbreak Record is now Upadated Successfully');
            }else{
                return redirect()->back()->with('fail','Something went wrong, Fail to register');
            }
    
    
    
        }
    function delete_out($id) {
        $outbreak = Outbreak::find($id);
        $outbreak->delete();
        return redirect('dashboard.admin.outbreak_record')->with('status',"Outbreak Account Has Been Successfully Deleted");
        }
    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}


