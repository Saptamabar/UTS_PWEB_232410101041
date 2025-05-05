<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $user = [
            'username' => $request->username,
        ];
        return view('dashboard',compact('user'));
    }


    public function pengelolaan(Request $request)
    {
        $friends = ['friend1' => ['foto'=>'asset/Testimoni 2.jpg','username' => 'Eka', 'email' => 'eka@example.com'],
                    'friend2' => ['foto'=>'asset/Testimoni 1.jpg','username' => 'Sakip', 'email' => 'sakipmabar@example.com'],
                    'friend3' => ['foto'=>'asset/Testimoni 3.jpg','username' => 'rici', 'email' => 'ricimabar@example.com'],
                    'friend4' => ['foto'=>'asset/Testimoni 4.jpg','username' => 'uzul', 'email' => 'fauzl@example.com'],
                ];
        $user = [
            'username' => $request->username,
        ];
        return view('pengelolaan',compact('friends','user'));
    }

    public function profile(Request $request)
    {
        $user = [
            'username' => $request->username,
        ];

        return view('profile',compact('user'));
    }

    public function logout(Request $request)
    {
        return redirect('/');
    }
}
