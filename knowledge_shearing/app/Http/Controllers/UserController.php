<?php

namespace App\Http\Controllers;
use App\ProfileModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function addUser(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();



        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('admin.set.userEdit',$data1);
    }

    public function listUser(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }


        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['users']=User::all();

        return view('admin.set.userList', $data,$data1);
    }

    /*  public function addUser(){
          return view('admin.set.userAddEdit');
      } */

    public function saveUser(Request $request){
        $data = new User();
//dd($request->id);
        if(isset($request->id) &&!empty($request->id))
            $data = User::find($request->id);
//dd($data);
        $data->username=$request->username;
        $data->email=$request->email;



        if(!empty($request->password))
        $data->password=bcrypt($request->password);
        $data->userType= $request->userType;
        $data->save();
        return redirect('users');
    }

    public function deleteUser(Request $request){
        User::find($request->id)->delete();
        return redirect()->back();
    }

    public function editUser(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['users'] = User::find($request->id);


        return view('admin.set.userEdit',$data,$data1);
    }

    public function listUserSearch(Request $request)
    {
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->searchU);
        $search = $request->searchU;
        // $date = $request->input('date');

        if (empty($search))
            $data['users']=null;

        if (isset($search) && !empty($search)) {
            $data['users'] = DB::table('users')
                ->where('id', 'like binary', '%' . $search . '%')
                ->orwhere('username binary', 'like', '%' . $search . '%')
                ->orWhere('email', 'like binary', '%' . $search . '%')
                ->orWhere('userType', 'like binary', '%' . $search . '%')
                ->get();
        }


        return view('admin.set.userListSearch', $data,$data1);
    }
    public function listUserDetailsSearch(Request $request)
    {
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        //dd($request->searchUD);
        $search = $request->searchUD;
        // $date = $request->input('date');
        if (empty($search))
            $data['userDetails']=null;

        if (isset($search) && !empty($search)) {
            $data['userDetails'] = DB::table('profile_models')
                ->where('userId', 'like binary', '%' . $search . '%')
                ->orwhere('name', 'like binary', '%' . $search . '%')
                ->orwhere('did', 'like binary', '%' . $search . '%')
                ->orwhere('dname', 'like binary', '%' . $search . '%')
                ->orwhere('iname', 'like binary', '%' . $search . '%')
                ->orWhere('ses', 'like binary', '%' . $search . '%')
                ->orWhere('phone', 'like binary', '%' . $search . '%')
                ->get();
        }


        return view('admin.set.userDetailsListSearch', $data,$data1);
    }






    public function addUserDetails(){
        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();



        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        return view('admin.set.userEdit',$data1);
    }

    public function listUserDetails(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['userDetails']=ProfileModel::all();

        return view('admin.set.userDetailsList', $data,$data1);
    }

    /*  public function addUser(){
          return view('admin.set.userAddEdit');
      } */

    public function saveUserDetails(Request $request){
        $data = new ProfileModel();


        //dd($data);
        if(isset($request->id) &&!empty($request->id))
            $data = ProfileModel::find($request->id);
//dd($data);

        $data->name = $request->name;
        $data->did = $request->did;
        $data->dname = $request->dname;
        $data->iname = $request->iname;
        $data->ses = $request->ses;
        $data->phone = $request->phone;
        //  $data->nphoto= $request->nphoto;
        //        $data->photo= Storage::put('/Photos', $request->file('photo'));
        //$data->nphoto=Storage::put('/Nominee Photos', $request->file('nphoto'));



        if(!empty($request->file('photo')))
            $data->photo= $this->uploadimage($request->file('photo'),'uploads/personalPhotos/','','','');


        $data->save();
        return redirect('userDetails');
    }

    public function deleteUserDetails(Request $request){
        ProfileModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function editUserDetails(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }


        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $data['userDetails'] = ProfileModel::find($request->id);


        return view('admin.set.userDetailsEdit',$data,$data1);
    }


    //image upload function

    function uploadimage($img, $path, $user_file_name = null, $width =null , $height = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists(path_image_thumb() . $user_file_name)) {
            unlink(path_image_thumb() . $user_file_name);
        }
// saving image in target path
        $imgName = uniqid() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);


        $img_main = \Intervention\Image\Facades\Image::make($img);
        $img_main->orientate();
        $img_main->save($path.$imgName);


        if ( file_exists($path. $imgName)) {

            /*   $newNme = public_path(path_image_thumb() . $imgName);

               if (!file_exists(path_image_thumb())) {
                  mkdir(path_image_thumb(), 0777, true);
               }
              $img = \Intervention\Image\Facades\Image::make($imgPath);
              $img->fit(200);
               $img->orientate();
               $img->save(path_image_thumb().$imgName);
   */
            return $imgName;
        }
        return false;
    }
}
