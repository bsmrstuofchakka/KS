<?php

namespace App\Http\Controllers;

use App\AnswerModel;
use App\CategoryModel;
use App\QuestionModel;
use App\ReplyModel;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReplyController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addFormReply(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['answer']= DB::table('profile_models')
            ->join('answer_models','answer_models.auserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.username','profile_models.photo','answer_models.id','answer_models.qid','answer_models.updated_at','answer_models.acontent','answer_models.afile')
            ->where('answer_models.id',$request->id,'=')
            ->first();


        //dd($data);

        return view('reply.replyAddForm',$data1,$data);
    }

    public function editFormReply(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        // $data['share']=QuestionModel::find($request->id);

        $data['sharing']= DB::table('profile_models')
            ->join('question_models','question_models.quserId','profile_models.userId')
            ->join('users','users.id','profile_models.userId')
            ->select('users.username','profile_models.photo','question_models.id','question_models.updated_at','question_models.qtitle','question_models.qcategoryname','question_models.qcontent','question_models.ufile')
            ->where('question_models.id',$request->id,'=')

            ->first();

        //dd($data);

        return view('reply.replyEditForm',$data1,$data);
    }




    public function saveReply(Request $request){
		
		///dd($request->all());
		
        $data = new ReplyModel();
//dd(bcrypt($request->aaid));


        if(isset($request->id) &&!empty($request->id))
            $data = ReplyModel::find($request->id);


        if(isset($request->id)&& !empty($request->id))
            $request->aaid=$data->aid;

       // dd($request->aaid);

        $qid  = DB::table('answer_models')
            ->select('answer_models.qid')
            ->where('answer_models.id',$request->aaid,'=')
            ->first();
//dd($data);

//dd($qid);

        if($data->ruserId==null)
            $data->ruserId=Auth::id();


        if($data->aid==null)
            $data->aid=$request->aaid;

        $data->rcontent=$request->rcontent;


        if(!empty($request->file('rfile')))
            $data->rfile= Storage::disk('public')->put('Reply/', $request->file('rfile'));

        //dd($data);
        $data->save();

       // dd($data);
        return redirect()->route('answers',['id'=>$qid->qid]);

    }

    public function deleteReply(Request $request){
        ReplyModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function editReply(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['replies'] = ReplyModel::find($request->id);
//dd($data);

        return view('reply.replyEditForm',$data,$data1);
    }

    public function searchUser(Request $request)
    {

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request);
        $search = $request->search;
        if (empty($search))
            $data['users']=null;
        // $date = $request->input('date');
        $data=new User();

        if (isset($search) && !empty($search)) {
            $data['users'] = DB::table('users')
                ->where('id', 'like', '%' . $search . '%')
                ->orwhere('username', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('userType', 'like', '%' . $search . '%')
                ->get();
        }


        return view('admin.set.userList', $data);
    }
}
