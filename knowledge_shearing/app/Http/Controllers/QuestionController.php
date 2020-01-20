<?php

namespace App\Http\Controllers;
use App\CategoryModel;
use App\QuestionModel;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function addQuestion(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['categories']= DB::table('category_models')
            ->select('categoryname')
            ->get();

      //dd($data);

        return view('question.questionAddEdit',$data1,$data);
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



    public function saveQuestion(Request $request){
        $data = new QuestionModel();
//dd($request->id);
        if(isset($request->id) &&!empty($request->id))
           $data = QuestionModel::find($request->id);
//dd($data);

        if($data->quserId==null)
         $data->quserId=Auth::id();
       // dd(  $data->quserId);

        $data->qtitle=$request->qtitle;
        $data->qcategoryname=$request->qcategoryname;
        $data->qcontent=$request->qcontent;


        if(!empty($request->file('ufile')))
            $data->ufile= Storage::disk('public')->put('Question/', $request->file('ufile'));

//dd($data);
        $data->save();
        return redirect('adminUser');
    }

    public function deleteQuestion(Request $request){
        QuestionModel::find($request->id)->delete();
        return redirect('/adminUser');
    }

    public function editQuestion(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }


        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data1['categories']=CategoryModel::all();

        $data['questions'] = QuestionModel::find($request->id);

//dd($data);
        return view('question.questionAddEdit',$data,$data1);
    }





}
