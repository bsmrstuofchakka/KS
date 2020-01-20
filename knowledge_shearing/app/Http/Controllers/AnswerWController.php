<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AnswerWController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addAnswerWForm(Request $request){

        // dd($request->id);
        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data1['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.username','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            ->where('question_models.id',$request->id,'=')
            ->first();


//dd($data1);

        return view('answer.answerAddForm',$data1);
    }




}
