<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class BlogController extends Controller
{
  public function index(){
    return view('admin.blogs.createblog');
  }

  //insert blog data into database
  public function save_blog(Request $request)
  {
    $data=array();

    $data['title']=$request->title;
    $data['description']=$request->description;

    $user = auth()->user();

    $data['userid']=$user->id;

    DB::table('blogc')->insert($data);

    return back()->with('success', 'Data inserted Successfully');
  }
  //all blog show from database
  public function view_blog()
  {
    #$user = Auth::user();
    $user = auth()->user();
    $petani = DB::table('blogc')->where('userid',$user->id)->paginate(3);

    return view('admin.blogs.allblog', ['data_list' => $petani]);
  }

  //delete category from data base,one by one
 public function destroy($id){
   $user = auth()->user();
   DB::table('blogc')
   ->where('id',$id)
   ->where('userid',$user->id)
   ->delete();

   return back()->with('success', 'Data deleted Successfully');
 }


      //edit blog Controller are here
    public function edit($id){
        $user = auth()->user();

       $petani=DB::table('blogc')
       ->where('id',$id)
        ->where('userid',$user->id)
       ->first();

       return view('admin.blogs.editblog', ['data_list' => $petani]);
       $manage_category=view(admin.blogs.editblog)->with('data'.$petani);
       return view('admin.blogs.editblog')
       ->with('admin.blogs.editblog'.$manage_category);
      }

      //blog update are here
      public function update(Request $request,$id)
      {
      $data=array();
      $data['title']=$request->title;
      $data['description']=$request->description;
      DB::table('blogc')->where('id',$id)
      ->update($data);
        return Redirect::to('blog/allblog')->with('success', 'Data Update Successfully');

      }

      //all blog show from database in front page
      /*  public function manage()  {
        $petani = DB::table('blogc')->paginate(3);
         return view('welcome', ['data_list' => $petani]);
}
*/
}
