<?php

namespace App\Http\Controllers;

use App\Models\Institude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function institude_store() {

        $validator = Validator::make(request()->all() ,
            [
                'title' => 'required|max:100',
                'content' => 'required',
                'quick_intro' => 'required|max:200',
                'image' => 'image'
            ],
            [
                'title.required' => 'وارد کردن عنوان آموزشگاه الزامیست! ',
                'content.required' => 'محتوای آموزشگاه نمیتواند خالی بماند!',
                'quick_intro.required' => 'وارد کردن چکیده توضیحات آموزشگاه الزامیست!',
                'title.max' => 'عنوان آموزشگاه نمی تواند بیشتر از ۱۰۰ کاراکتر باشد!',
                'quick_intro.max' => 'چکیده توضیحات آموزشگاه نمی تواند بیشتر از ۲۰۰ کاراکتر باشد!',
                'image.image' => 'عکس آپلود شده قابل قبول نیست!',
            ]
        )->validate();


        $institude = new Institude();
        $institude->title = \request()->title;
        $institude->content = \request()->content;
        $institude->quick_intro = \request()->quick_intro;
        if(\request()->image) {
            $file_name = \request()->file('image')->getClientOriginalName();
            \request()->file('image')->move('img' , $file_name);
            $institude->image = $file_name;
        }
        $institude->views = 0;
        $institude->save();
        $msg = "آموزشگاه با موفقیت ثبت شد!";
        return redirect('/admin')->with(compact('msg'));

    }

    public function image_upload() {
        $fileName= request()->file('file')->getClientOriginalName();
        request()->file('file')->move('img', $fileName);
        $path = Request::root() . '/img/' . $fileName;
        return response()->json(['location'=> $path]);

        /*$imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location' => "/storage/$imgpath"]);*/
    }

    public function login_view(){
        if(auth()->check()){
            return redirect("/admin");
        }else{
            return view("admin.login");
        }
    }

    public function login(Request $request){
        if(auth()->check()){
            return redirect("/admin");
        }
        $request->validate([
            "email" => "required|email|string",
            "password" => "required|string"
        ]);
        if($request->remember === "yup"){
            auth()->attempt(["email" => $request->email , "password" => $request->password] , true);
        }else{
            auth()->attempt(["email" => $request->email , "password" => $request->password] , false);
        }
        if(auth()->check()){
            
            session()->regenerate();
            return redirect("/admin");
        }else{
            session()->regenerate();
            $msg = "ایمیل یا پسورد نا معتبر است";
            
            return redirect('/login')->with(compact('msg'));
        }
    }

    public function logout(){
        if(auth()->check()){
            auth()->logout();
            session()->regenerate();
            return redirect("/");
        }else{
            return redirect("/login");
        }
    }
}
