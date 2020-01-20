<?php

namespace App\Http\Controllers;

use App\AnswerModel;
use App\CategoryModel;
use App\User;

use App\QuestionModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnswerController extends Controller
{
    public function listAnswer(Request $request){
//dd($request->id);

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }


        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
       // $data['share']=QuestionModel::find($request->id);

        $data1['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            ->where('question_models.id',$request->id,'=')
            ->first();




        $data1['answers']= DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->leftjoin('profile_models','profile_models.userId','answer_models.auserId')
            ->join('users','users.id','answer_models.auserId')
            ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','answer_models.id','answer_models.updated_at','answer_models.acontent','answer_models.afile')
            ->orderBy('answer_models.id','ASC')
            ->where('question_models.id',$request->id,'=')
            ->get();

//dd($data1);


        $data['replies']= DB::table('reply_models')
            ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
           ->join('answer_models','answer_models.id','reply_models.aid')
         //  ->join('question_models','question_models.id','answer_models.qid')
            ->join('users','users.id','reply_models.ruserId')
            ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
            ->orderBy('reply_models.id','ASC')
            ->where('answer_models.qid',$request->id,'=')
            ->get();

//dd($data);
        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id',$request->id,'=')
            ->count('answer_models.id');


        //dd($data1);

        return view('answer.answerList',$data1,$data);
    }

    public function listAnswerW(Request $request){
//dd($request->id);

        // $data['share']=QuestionModel::find($request->id);

        $data1['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')

            ->where('question_models.id',$request->id,'=')
            ->first();




        $data1['answers']= DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->leftjoin('profile_models','profile_models.userId','answer_models.auserId')
            ->join('users','users.id','answer_models.auserId')
            ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','answer_models.id','answer_models.updated_at','answer_models.acontent','answer_models.afile')
            ->orderBy('answer_models.id','ASC')
            ->where('question_models.id',$request->id,'=')
            ->get();

//dd($data1);


        $data['replies']= DB::table('reply_models')
            ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
            ->join('answer_models','answer_models.id','reply_models.aid')
            //  ->join('question_models','question_models.id','answer_models.qid')
            ->join('users','users.id','reply_models.ruserId')
            ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
            ->orderBy('reply_models.id','ASC')
            ->where('answer_models.qid',$request->id,'=')
            ->get();

//dd($data);
        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id',$request->id,'=')
            ->count('answer_models.id');


        //dd($data1);

        return view('answerW.answerWList',$data1,$data);
    }



    public function editAnswerForm(Request $request){

       // dd($request->id);

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data1['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            ->where('question_models.id',$request->id,'=')
            ->first();


//dd($data1);

        return view('answer.answerEditForm',$data1);
    }


    public function addAnswerForm(Request $request){

        // dd($request->id);
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

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

    public function saveAnswer(Request $request){
        $data = new AnswerModel();
//dd($request->qid);
        //dd($data);
        if(isset($request->id) &&!empty($request->id))
           $data = AnswerModel::find($request->id);
       // dd($data);
       // if($data==null)
         //   $data = new AnswerModel();

//dd($data);

        if($data->auserId==null)
        $data->auserId=Auth::id();


        if($data->qid==null)
        $data->qid=$request->qqid;

        $data->acontent=$request->acontent;


        if(!empty($request->file('afile')))
            $data->afile= Storage::disk('public')->put('Answer/', $request->file('afile'));

        //dd($data);
        $data->save();

       //dd($data);
        return redirect()->route('answers',['id'=>$data->qid]);
    }

    public function deleteAnswer(Request $request){
        AnswerModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function editAnswer(Request $request){
        //dd($request->id);

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();




        $data['sharing'] = AnswerModel::find($request->id);
//dd($data);

        return view('answer.answerEditForm',$data,$data1);
    }



// after login then search among answer, reply, question


    public function listAnswerSearch(Request $request)
    {
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->id);
        //dd($request->searchAnswer);
        $search = $request->searchAnswer;
        // $date = $request->input('date');
        // $data=new User();



        $data['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')

            ->where('question_models.id',$request->id,'=')
            ->first();

//dd($data);

        if (empty($search))
            $data['answers']=null;

        if (isset($search) && !empty($search)) {
            $data['answers'] = DB::table('answer_models')
                ->join('question_models','question_models.id','answer_models.qid')
                ->leftjoin('profile_models','profile_models.userId','answer_models.auserId')
                ->join('users','users.id','answer_models.auserId')
                ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','answer_models.id','answer_models.updated_at','answer_models.acontent','answer_models.afile')
                ->orderBy('answer_models.id','ASC')
                ->where('question_models.id',$request->id,'=')
                ->where('acontent', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('answer_models.updated_at', 'like binary', '%' . $search . '%')
                ->get();
        }


        //dd($data);

  /*      if (isset($search) && !empty($search)) {
            $data['replies'] = DB::table('reply_models')
                ->join('profile_models','profile_models.userId','reply_models.ruserId')
                ->join('answer_models','answer_models.id','reply_models.aid')
                //  ->join('question_models','question_models.id','answer_models.qid')
                ->join('users','users.id','reply_models.ruserId')
                ->select('users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                ->where('answer_models.qid',$request->id,'=')


                ->orwhere('users.username', 'like', '%' . $search . '%')
                ->orwhere('reply_models.updated_at', 'like', '%' . $search . '%')
                ->orWhere('rcontent', 'like', '%' . $search . '%')
                ->get();
        }
*/

        //dd(count($data['answers']));
       if(count($data['answers'])!=0){
            //dd('kkdk');

            $data['replies']= DB::table('reply_models')
                ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
                ->join('answer_models','answer_models.id','reply_models.aid')
                //  ->join('question_models','question_models.id','answer_models.qid')
                ->join('users','users.id','reply_models.ruserId')
                ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                ->orderBy('reply_models.id','ASC')
                ->where('answer_models.qid',$request->id,'=')
                ->get();
           // dd($data);
        }
        else
        {
            //dd("kkkdkd");

            if (isset($search) && !empty($search)) {
                $data['s_replies'] = DB::table('reply_models')
                    ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
                    ->join('answer_models','answer_models.id','reply_models.aid')
                    //  ->join('question_models','question_models.id','answer_models.qid')
                    ->join('users','users.id','reply_models.ruserId')
                    ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                    ->orderBy('reply_models.id','ASC')
                    ->where('answer_models.qid',$request->id,'=')
                    ->where('rcontent', 'like binary', '%' . $search . '%')
                    ->orwhere('users.username', 'like binary', '%' . $search . '%')
                    ->orwhere('reply_models.updated_at', 'like binary', '%' . $search . '%')
                    ->get();
            }


            //dd(array_get($array,$i)->aid);

            //dd($data['replies']);
            if(count($data['s_replies'])!=0){

                $data['s_answers']= DB::table('answer_models')
                    ->join('question_models','question_models.id','answer_models.qid')
                    ->leftjoin('profile_models','profile_models.userId','answer_models.auserId')
                    ->join('users','users.id','answer_models.auserId')
                    ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','answer_models.id','answer_models.updated_at','answer_models.acontent','answer_models.afile')
                    ->orderBy('answer_models.id','ASC')
                    ->where('question_models.id',$request->id,'=')
                    ->get();

                //dd($data);
                $data['replies']= DB::table('reply_models')
                    ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
                    ->join('answer_models','answer_models.id','reply_models.aid')
                    //  ->join('question_models','question_models.id','answer_models.qid')
                    ->join('users','users.id','reply_models.ruserId')
                    ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                    ->orderBy('reply_models.id','ASC')
                    ->where('answer_models.qid',$request->id,'=')
                    ->get();

            }


        }







//dd($data);
        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id',$request->id,'=')
            ->count('answer_models.id');



        //dd($data);

        return view('answer.answerListSearch', $data,$data1);
    }
    public function listAnswerWSearch(Request $request)
    {



        //dd($request->id);
        //dd($request->searchAnswerW);
        $search = $request->searchAnswerW;
        // $date = $request->input('date');
        // $data=new User();



        $data['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.id as uid','users.username','profile_models.userId','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')

            ->where('question_models.id',$request->id,'=')
            ->first();

//dd($data);



        if (isset($search) && !empty($search)) {
            $data['answers'] = DB::table('answer_models')
                ->join('question_models','question_models.id','answer_models.qid')
                ->leftjoin('profile_models','profile_models.userId','answer_models.auserId')
                ->join('users','users.id','answer_models.auserId')
                ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','answer_models.id','answer_models.updated_at','answer_models.acontent','answer_models.afile')
                ->orderBy('answer_models.id','ASC')
                ->where('question_models.id',$request->id,'=')
                ->where('acontent', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orwhere('answer_models.updated_at', 'like binary', '%' . $search . '%')
                ->get();
        }


        //dd($data);

        /*      if (isset($search) && !empty($search)) {
                  $data['replies'] = DB::table('reply_models')
                      ->join('profile_models','profile_models.userId','reply_models.ruserId')
                      ->join('answer_models','answer_models.id','reply_models.aid')
                      //  ->join('question_models','question_models.id','answer_models.qid')
                      ->join('users','users.id','reply_models.ruserId')
                      ->select('users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                      ->where('answer_models.qid',$request->id,'=')


                      ->orwhere('users.username', 'like', '%' . $search . '%')
                      ->orwhere('reply_models.updated_at', 'like', '%' . $search . '%')
                      ->orWhere('rcontent', 'like', '%' . $search . '%')
                      ->get();
              }
      */

        //dd(count($data['answers']));
        if(count($data['answers'])!=0){
            //dd('kkdk');

            $data['replies']= DB::table('reply_models')
                ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
                ->join('answer_models','answer_models.id','reply_models.aid')
                //  ->join('question_models','question_models.id','answer_models.qid')
                ->join('users','users.id','reply_models.ruserId')
                ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                ->orderBy('reply_models.id','ASC')
                ->where('answer_models.qid',$request->id,'=')
                ->get();
            // dd($data);
        }
        else
        {
            //dd("kkkdkd");

            if (isset($search) && !empty($search)) {
                $data['s_replies'] = DB::table('reply_models')
                    ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
                    ->join('answer_models','answer_models.id','reply_models.aid')
                    //  ->join('question_models','question_models.id','answer_models.qid')
                    ->join('users','users.id','reply_models.ruserId')
                    ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                    ->orderBy('reply_models.id','ASC')
                    ->where('answer_models.qid',$request->id,'=')
                    ->where('rcontent', 'like binary', '%' . $search . '%')
                    ->orwhere('users.username', 'like binary', '%' . $search . '%')
                    ->orwhere('reply_models.updated_at', 'like binary', '%' . $search . '%')
                    ->get();
            }


            //dd(array_get($array,$i)->aid);

            //dd($data['replies']);
            if(count($data['s_replies'])!=0){

                $data['s_answers']= DB::table('answer_models')
                    ->join('question_models','question_models.id','answer_models.qid')
                    ->leftjoin('profile_models','profile_models.userId','answer_models.auserId')
                    ->join('users','users.id','answer_models.auserId')
                    ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','answer_models.id','answer_models.updated_at','answer_models.acontent','answer_models.afile')
                    ->orderBy('answer_models.id','ASC')
                    ->where('question_models.id',$request->id,'=')
                    ->get();

                //dd($data);
                $data['replies']= DB::table('reply_models')
                    ->leftjoin('profile_models','profile_models.userId','reply_models.ruserId')
                    ->join('answer_models','answer_models.id','reply_models.aid')
                    //  ->join('question_models','question_models.id','answer_models.qid')
                    ->join('users','users.id','reply_models.ruserId')
                    ->select('users.id as uid','users.username','profile_models.photo','profile_models.userId','reply_models.aid','reply_models.id','reply_models.updated_at','reply_models.rcontent','reply_models.rfile')
                    ->orderBy('reply_models.id','ASC')
                    ->where('answer_models.qid',$request->id,'=')
                    ->get();

            }


        }







//dd($data);
        $data1['ans_count']=DB::table('answer_models')
            ->join('question_models','question_models.id','answer_models.qid')
            ->where('question_models.id',$request->id,'=')
            ->count('answer_models.id');



        //dd($data);

        return view('answerW.answerWListSearch', $data,$data1);
    }





}
