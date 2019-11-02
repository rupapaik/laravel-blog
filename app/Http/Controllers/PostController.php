<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class PostController extends Controller
{
/*  public function more(){
    $petani = DB::table('blogc')->get();
     return view('admin.frontview.morepost', ['data_list' => $petani]);
  }


  public function more(){
      $petani = DB::table('blogc')->get();
     return view('admin.frontview.morepost', ['data_list' => $petani]);
  }
  */

//show more option in login page.......
        public function more($id=0){
          $blog_detail=DB::table('blogc')->where('id',$id)->first();

          return view('more', ['blog_detail' => $blog_detail]);
        }


        //show more option in home page.......

        public function post($id=0){
          $blog_detail=DB::table('blogc')->where('id',$id)->first();

          return view('admin.frontview.morepost', ['blog_detail' => $blog_detail]);
        }
}
