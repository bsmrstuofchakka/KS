@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">
        {!! Form::open(array('url' => url('users/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}

        <input type="text" name="searchU"   value="@if(!empty($searchU)) {{$searchU->$searchU}} @endif" placeholder="Search keyword..."/>
        <input type="submit" name="submit" value="Search"/>
        {!! Form::close() !!}
    </div>
</div>


@include('layout.afterSearchMasterUserAdmin')





<div class="features_area section_gap_change">

                    <span class="contact100-form-title-1">
                       User List
                    </span>

        <div class="containerChange">



                <div class="col-12Change">
                    <a class="primary-btn text-uppercase"  href="{{url('userDetails')}}">Click User Details List</a>
                </div>

                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>User Type</th>
                        <th>ACTION</th>
                    </tr>


                    @if(isset($users[0]))
                    @foreach($users as $user)

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            @if($user->userType==1)
                                <td>Admin</td>
                            @else
                                <td>User</td>
                            @endif

                            <td>
                                <a href="{{url('users/edit').'?id='.$user->id}}">Edit /</a>
                                <a href="{{url('users/delete').'?id='.$user->id}}">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                        @endif

                </table>

            </div>
    </div>



    </div>


@include('layout.afterMain')

