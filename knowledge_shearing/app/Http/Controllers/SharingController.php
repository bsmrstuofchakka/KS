<?php

namespace App\Http\Controllers;

use App\QuestionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SharingController extends Controller
{
    public function displayWelcome(){

        $data['sharing']= DB::table('question_models')
            ->leftjoin('profile_models','profile_models.userId','question_models.quserId')
            ->join('users','users.id','profile_models.userId')

            ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            // ->where('profile_models.userId','question_models.quserId','=')
             ->orderBy('question_models.id','DESC')
            ->paginate(6);
           // ->get();



//dd($data);

        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id','answer_models.qid','=')
            ->count('answer_models.id');


        return view('welcome',$data,$data1);
    }

    public function displayWelcomeUser(){


          if(empty(Auth::user()->id)) {
              return redirect('/');
          }
              $userId=Auth::user()->id;

        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

       // $data['sharing'] = QuestionModel::all();

        $data['sharing']= DB::table('question_models')
            ->join('profile_models','profile_models.userId','question_models.quserId')
            ->join('users','users.id','question_models.quserId')
            //->join('answer_models','answer_models.qid','question_models.id')
            //->where('answer_models.qid','question_models.id','=')
            ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')

            // ->where('profile_models.userId','question_models.quserId','=')
          ->orderBy('question_models.id','DESC')
            ->paginate(6);


           // ->get();



//dd($data);

        $data['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id','answer_models.qid','=')
            ->count('answer_models.id');


        //dd($data);

        return view('welcomeUserAdmin',$data1,$data);
    }


    public function displayParticularCategory(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->cid);
        // $data['sharing'] = QuestionModel::all();

        $data['sharing']= DB::table('question_models')
            ->leftjoin('profile_models','profile_models.userId','question_models.quserId')
            ->join('users','users.id','question_models.quserId')
            ->join('category_models','category_models.categoryname','question_models.qcategoryname')

            ->select('users.id as uid','users.username','category_models.cid','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            ->where('category_models.cid',$request->cid,'=')
            ->orderBy('question_models.id','DESC')

            ->get();



//dd($data);

        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id','answer_models.qid','=')
            ->count('answer_models.id');


        //dd($data);

        return view('category.particularCategory',$data1,$data);
    }

    public function displayParticularCategoryW(Request $request){


        //dd($request->cid);
        // $data['sharing'] = QuestionModel::all();

        $data['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->join('category_models','category_models.categoryname','question_models.qcategoryname')

            ->select('users.id as uid','users.username','category_models.cid','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            ->where('category_models.cid',$request->cid,'=')
            ->orderBy('question_models.id','DESC')
            ->get();



//dd($data);

        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id','answer_models.qid','=')
            ->count('answer_models.id');


        //dd($data);

        return view('categoryW.particularCategoryW',$data1,$data);
    }


    public function search(Request $request)
    {
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->search);
        $search = $request->search;
        // $date = $request->input('date');
       // $data=new User();

        if (isset($search) && !empty($search)) {
            $data['sharing'] = DB::table('question_models')
                ->leftjoin('profile_models','profile_models.userId','question_models.quserId')
                ->join('users','users.id','question_models.quserId')
                ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
                ->orderBy('question_models.id','DESC')
                ->where('qcategoryname', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('question_models.updated_at', 'like binary', '%' . $search . '%')
                ->orWhere('qtitle', 'like binary', '%' . $search . '%')
                ->orWhere('qcontent', 'like binary', '%' . $search . '%')
                ->get();
        }

        //dd($data);

        return view('welcomeUserAdminSearch', $data,$data1);
    }

    public function searchWelcome(Request $request)
    {



        //dd($request->search);
        $search = $request->searchWelcome;
        // $date = $request->input('date');
        // $data=new User();
        if (empty($search))
            $data['sharing']=null;

        if (isset($search) && !empty($search)) {
            $data['sharing'] = DB::table('question_models')
                ->leftjoin('profile_models','profile_models.userId','question_models.quserId')
                ->join('users','users.id','question_models.quserId')
                ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
                ->orderBy('question_models.id','DESC')
                ->where('qcategoryname', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('question_models.updated_at', 'like binary', '%' . $search . '%')
                ->orWhere('qtitle', 'like binary', '%' . $search . '%')
                ->orWhere('qcontent', 'like binary', '%' . $search . '%')
                ->get();
        }

        //dd($data);

        return view('welcomeSearch', $data);
    }



    //  particular category search , pc means click category then click id and see
    // the total category list with particular id


    public function displayParticularCategorySearch(Request $request)
    {
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->searchP);
        $search = $request->searchP;
        // $date = $request->input('date');
        // $data=new User();



        if (empty($search))
            $data['sharing']=null;


        if (isset($search) && !empty($search)) {
            $data['sharing'] = DB::table('question_models')
                ->join('profile_models','profile_models.userId','question_models.quserId')
                ->join('category_models','category_models.categoryname','question_models.qcategoryname')
                ->join('users','users.id','question_models.quserId')
                ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
                ->orderBy('question_models.id','DESC')
                ->where('category_models.cid',$request->cid,'=')
                ->where('qcategoryname', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('question_models.updated_at', 'like binary', '%' . $search . '%')
                ->orWhere('qtitle', 'like binary', '%' . $search . '%')
                ->orWhere('qcontent', 'like binary', '%' . $search . '%')
                ->get();
        }

        //dd($data);

        return view('category.particularCategorySearch', $data,$data1);
    }

    // only welcome that means not login
    //  particular category search , pc means click category then click id and see
    // the total category list with particular id


    public function displayParticularCategoryWSearch(Request $request)
    {


        //dd($request->searchP);
        $search = $request->searchPW;
        // $date = $request->input('date');
        // $data=new User();



        if (empty($search))
            $data['sharing']=null;


        if (isset($search) && !empty($search)) {
            $data['sharing'] = DB::table('question_models')
                ->leftjoin('profile_models','profile_models.userId','question_models.quserId')
                ->join('category_models','category_models.categoryname','question_models.qcategoryname')
                ->join('users','users.id','profile_models.userId')
                ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
                ->orderBy('question_models.id','DESC')
                ->where('category_models.cid',$request->cid,'=')
                ->where('qcategoryname', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('question_models.updated_at', 'like binary', '%' . $search . '%')
                ->orWhere('qtitle', 'like binary', '%' . $search . '%')
                ->orWhere('qcontent', 'like binary', '%' . $search . '%')
                ->get();
        }

        //dd($data);

        return view('categoryW.particularCategoryWSearch', $data);
    }


}
