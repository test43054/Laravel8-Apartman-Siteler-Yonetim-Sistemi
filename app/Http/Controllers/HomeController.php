<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
use App\Models\Menu;
<<<<<<< Updated upstream
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
=======
use App\Models\Message;
use App\Models\Setting;
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
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
=======
    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
=======
    public function index()
    {
        $setting = Setting::first();
        $slider = Content::where('price',0)->select('id','title','image','slug')->limit(4)->get();
=======
=======
>>>>>>> Stashed changes
    public function index()
    {
        $setting = Setting::first();
        $slider = Content::
              where('tur','olum')
            ->orWhere('tur' , "duyuru")
            ->select('id','title','image','slug')
            ->limit(4)
            ->get();
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

        #print_r($slider);
        #exit();

<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
        /*
        $users = DB::table('users')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();
        */

<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        $data= [
            'setting' => $setting,
             'slider' => $slider,
              'page' => 'home',
        ];
        return view('home.index',$data);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    }

    public static function categorylist()
    {
        return Menu::where('parent_id', '=', 0)->with('children')->get();
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
    public static function getsetting()
    {
        return Setting::first();
    }


    //sayfalar başlangıç
    public function aboutus()
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
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
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
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
    public function faq()
    {
        //return view('home.about');
    }
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    //sayfalar bitiş
>>>>>>> Stashed changes
=======

    //sayfalar bitiş

=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    //sayfalar bitiş



    public function content($id,$slug)
    {
      $data=Content::find($id);
      print_r($data);
      exit();
    }

<<<<<<< Updated upstream


<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
    public function categorycontents($id,$slug)
    {
        $datalist=Content::where('menu_id',$id)->get();
        $data=Menu::find($id);
        #print_r($data);
        #exit();
        return view('home.menu_contents', ['datalist' => $datalist,'data' => $data]);
    }



>>>>>>> Stashed changes
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->messages = $request->input('messages');
        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız iletilmiştir Teşekkür ederiz:)');
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

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
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
