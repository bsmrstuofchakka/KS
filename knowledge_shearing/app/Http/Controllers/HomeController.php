<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
}
