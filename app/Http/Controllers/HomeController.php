<?php

namespace App\Http\Controllers;

use App\Models\Institude;
use Illuminate\Http\Request;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index() {
        if(\request()->input('search') != null) {
            $institudes = Institude::where('title' , 'like' , '%' . \request()->input('search') . '%')->orWhere('content' , 'like' , '%' . \request()->input('search') . '%')->orWhere('quick_intro' , 'like' , '%' . \request()->input('search') . '%')->paginate(2);
        } else {
            $institudes = Institude::paginate(2);
        }
        return view('welcome' , compact('institudes'));
    }

    public function institude($id) {

        if(!is_numeric($id)){
            return redirect("/");

        }elseif($id <= 0){
            return redirect("/");
        }

        if (!Institude::where('id', '=', $id)->exists()) {
            return redirect("/");
        }

        $ip = request()->ip();
        $visitors = Visitor::where("institude_id" , $id)->get()->toArray();
        $has_visited = false;
        if(isset($visitors) && count($visitors) > 0){
            foreach($visitors as $visitor){
                if(password_verify($ip , $visitor["ip_addr"])){
                    $has_visited = true;
                    break;
                }
            }

            if(!$has_visited){
                $visitors_table = new Visitor();
                $visitors_table->institude_id = $id;
                $visitors_table->ip_addr = password_hash($ip , PASSWORD_DEFAULT);
                $visitors_table->save();
            }
            

        }else{
            $visitors_table = new Visitor();
            $visitors_table->institude_id = $id;
            $visitors_table->ip_addr = password_hash($ip , PASSWORD_DEFAULT);
            $visitors_table->save();
        }


        $institude = Institude::find($id);
        
        if($has_visited == false){
            $institude = institude::find($id);
            $institude->views += 1; 
            $institude->save();
        }
        return view('institude' , compact('institude'));
    }
}
