<?php

namespace App\Http\Controllers;

use App\Models\Menu;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Setting;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public static function categorylist()
    {
        return Menu::where('parent_id', '=' , 0)->with('children')->get();
    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public static function getsetting()
    {
        return Setting::first();
    }


    //sayfalar başlangıç
    public function aboutus()
    {
<<<<<<< Updated upstream
        return view('home.about');
    }
    public function contact()
    {
        return view('home.about');
    }
    public function references()
    {
        return view('home.about');
    }
    public function faq()
    {
        return view('home.about');
    }
    //sayfalar bitiş
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function faq()
    {
        //return view('home.about');
    }
    //sayfalar bitiş
>>>>>>> Stashed changes

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
