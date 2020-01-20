@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">

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
                            <th>{{$user->id}}</th>
                            <th>{{$user->username}}</th>
                            <th>{{$user->email}}</th>
                            @if($user->userType==1)
                                <th>Admin</th>
                            @else
                                <th>User</th>
                            @endif

                            <th>
                                <a href="{{url('users/edit').'?id='.$user->id}}">Edit /</a>
                                <a href="{{url('users/delete').'?id='.$user->id}}">Delete</a>
                            </th>
                        </tr>

                    @endforeach
                        @endif

                </table>

            </div>
    </div>



    </div>


@include('layout.afterMain')

