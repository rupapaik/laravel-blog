<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class FrontController extends Controller
{

  //all blog show in home page
      public function front()  {
      $petani = DB::table('blogc')->paginate(3);
       return view('admin.frontview.frontview', ['data_list' => $petani]);
    }
    public function fabout(){
       return view('admin.frontview.fabout');
    }

    public function fcontact(){
       return view('admin.frontview.fcontact');
    }

//all blog show from database in front page
    public function index()  {
    $petani = DB::table('blogc')->paginate(3);
     return view('admin.frontview.index', ['data_list' => $petani]);
  }
    public function about(){
       return view('admin.frontview.about');
    }
    public function blog(){
       return view('admin.frontview.blog');
    }
    public function contact(){
       return view('admin.frontview.contact');
    }

    public function dashboard(){
        return view('admin.home.homeContent');
    }


}
