<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register()
    {
        $userTypes = UserType::all();
        return view('admin.register',compact('userTypes'));
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'designation' => 'required',
            'employeeType' => 'required',   
            'dateofjoining' => 'required'
        ]);
        $userTypes = UserType::all();
        $user = new User;
        $user->name = $request->name;
        $user->user_type_id = $request->user_type_id;
        $user->email = $request->email;
        $user->user_key = rand(0,10000000000);
        $user->designation = $request->designation;
        $user->date_of_joining = $request->dateofjoining;
        $user->status = 1;
        $user->current_salary = $request->salary;
        $user->current_shift = $request->shift;
        $user->employee_type = $request->employeeType; 
        $user->password = Hash::make($request->password);
        Session::put('userKey', $user->user_key);
        $user->save();

        return view('dashboard')->with('success', 'User Created Successfully');
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $auth = Auth::user();
            Session::put("User", $auth->user_key);
            return redirect('/session');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
