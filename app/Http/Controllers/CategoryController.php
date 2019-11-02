<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class CategoryController extends Controller
{

  //dashboard controller...
  public function index(){
    return view('admin.category.category');
  }
  //create category controller
  public function category(){
    return view('admin.category.category');
  }

//save category data into database
  public function save_category(Request $request)
{
$data=array();
$data['name']=$request->name;
DB::table('createc')->insert($data);
  return back()->with('success', 'Data inserted Successfully');
  }

//all category show from database
  public function view_category()
  {
  $petani = DB::table('createc')->get();

   return view('admin.category.allcategory', ['data_list' => $petani]);
  }

  //delete category from data base,one by one
  public function destroy($id){
  DB::table('createc')->where('id',$id)->delete();
    return back()->with('success', 'Data deleted Successfully');
  }

  //edit category Controller are here
  public function edit($id){
   $petani=DB::table('createc')->where('id',$id)->first();
   return view('admin.category.editcategory', ['data_list' => $petani]);
   $manage_category=view(admin.category.editcategory)->with('data'.$petani);
   return view('admin.category.allcategory')
   ->with('admin.category.editcategory'.$manage_category);
  }
  //contact update are here
  public function update(Request $request,$id)
  {
  $data=array();
  $data['name']=$request->name;
  DB::table('createc')->where('id',$id)
  ->update($data);
    return Redirect::to('category/allcategory')->with('success', 'Data Update Successfully');

  }
}
