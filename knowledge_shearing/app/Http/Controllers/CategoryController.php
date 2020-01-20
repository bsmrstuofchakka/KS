<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function addCategory(){
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        return view('category.categoryAddEdit',$data1);
    }

    public function listCategory(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['categories']=CategoryModel::all();
        return view('category.categoryList',$data1,$data);
    }
    public function listCategoryW(){
        $data['categories']=CategoryModel::all();
        return view('categoryW.categoryWList',$data);
    }


    public function saveCategory(Request $request){
        $data = new CategoryModel();
//dd($request->id);
        if(isset($request->cid) &&!empty($request->cid)){
            $data = DB::table('category_models')
                ->where('category_models.cid',$request->cid,'=')
                ->update(['categoryname' => $request->categoryname]);
        }
        else{
            $data->categoryname=$request->categoryname;
            $data->save();
        }


//dd($data);


        //
        return redirect('categories');
    }

    public function deleteCategory(Request $request){
        DB::table('category_models')
            ->where('category_models.cid',$request->cid,'=')
            ->delete();
        return redirect()->back();
    }

    public function editCategory(Request $request){
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

      // dd($request->cid);
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['categories'] = DB::table('category_models')
            ->where('category_models.cid',$request->cid,'=')
            ->first();
       // dd($data);



        return view('category.categoryAddEdit',$data,$data1);
    }

    public function listCategorySearch(Request $request)
    {
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->searchC);
        $search = $request->searchC;

        if (empty($search))
            $data['categories']=null;

        if (isset($search) && !empty($search)) {
            $data['categories'] = DB::table('category_models')
                ->where('cid', 'like binary', '%' . $search . '%')
                ->orwhere('categoryname', 'like binary', '%' . $search . '%')
                ->get();
        }

//dd($data);
        return view('category.categoryListSearch', $data,$data1);
    }
    public function listCategoryWSearch(Request $request)
    {



        //dd($request->searchCW);
        $search = $request->searchCW;

        if (empty($search))
            $data['categories']=null;

        if (isset($search) && !empty($search)) {
            $data['categories'] = DB::table('category_models')
                ->where('cid', 'like binary', '%' . $search . '%')
                ->orwhere('categoryname', 'like binary', '%' . $search . '%')
                ->get();
        }

//dd($data);
        return view('categoryW.categoryWListSearch', $data);
    }








}
