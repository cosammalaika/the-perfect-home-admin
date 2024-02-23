<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Change 'app\Models\User' to 'App\Models\User'
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->user_type;
            if ($user_type == 'user') {
                return view('dashboard');
            } elseif ($user_type == 'admin') {
                return view('admin.dashboard');
            } else {
                return redirect()->back();
            }
        }
    }
}
