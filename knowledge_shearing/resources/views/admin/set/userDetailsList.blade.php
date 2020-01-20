@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">
        {!! Form::open(array('url' => url('userDetails/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}

        <input type="text" name="searchUD"   value="@if(!empty($searchUD)) {{$searchUD->$searchUD}} @endif" placeholder="Search keyword..."/>
        <input type="submit" name="submit" value="Search"/>
        {!! Form::close() !!}
    </div>
</div>


@include('layout.afterSearchMasterUserAdmin')





<div class="features_area section_gap_change">

                    <span class="contact100-form-title-1">
                       User Details List
                    </span>

        <div class="containerChange">



                <div class="col-12Change">
                    <a class="primary-btn text-uppercase"  href="{{url('users')}}">User List</a>
                </div>
                <table class="responstable">

                    <tr>
                        <th>User ID</th>
                        <th>NAME</th>
                        <th>Department Id</th>
                        <th>Department Name</th>
                        <th>Institution Name</th>
                        <th>Session</th>
                        <th>Phone Number</th>
                        <th>Photo</th>
                        <th>ACTION</th>
                    </tr>


                    @if(isset($userDetails[0]))
                    @foreach($userDetails as $user)

                        <tr>
                            <td>{{$user->userId}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->did}}</td>
                            <td>{{$user->dname}}</td>
                            <td>{{$user->iname}}</td>
                            <td>{{$user->ses}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @if(!empty($user->photo))
                                    <img width="100" src="{{asset('/uploads/personalPhotos/'.$user->photo)}}"  alt="">
                                @endif

                            </td>

                            <td>
                                <a href="{{url('userDetails/edit').'?id='.$user->id}}">Edit /</a>
                                <a href="{{url('userDetails/delete').'?id='.$user->id}}">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                        @endif

                </table>

            </div>
    </div>



    </div>


@include('layout.afterMain')

