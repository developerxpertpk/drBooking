<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class MedicalCenterRegisterController extends Controller
{
  public function __construct(){
    //$this->middleware('guest:admin');
  }
  public function showMedicalRegistrationForm(){
    return View('auth.medical-center-register');
  }
  public function showPatientRegistrationForm(){
    return View('auth.patient-register');
  }
  public function login(Request $request){


  }
  public function register(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',

    ]);


       $adminnew = new User;
       echo $adminnew->all();
      
//       $adminnew->role_id = $request['role'];
       $adminnew->name = $request['name'];
       $adminnew->username = $request['username'];
       $adminnew->email = $request['email'];
       $adminnew->password = bcrypt($request['password']);



                     $adminnew->save() ;
    return redirect()->route('login')
                   ->with('success','New Admin Regester successfully');


}

}
