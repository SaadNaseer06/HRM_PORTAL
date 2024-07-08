<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\LoginController;

class AdminController extends Controller
{
    public function view()
    {
        return view('admin.index');
    }

    public function get_session()
    {
        $session = Session::get("User");
        dd($session);
    }

    public function header()
    {
        $session = Session::get("User");
        $user = Auth::user()->name;
        return view('layouts.header', compact('session','user'));
    }

    public function footer()
    {
        return view('layouts.footer');
    }
}
