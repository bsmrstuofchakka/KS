@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">
        {!! Form::open(array('url' => url('categories/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}

        <input type="text" name="searchC"   value="@if(!empty($searchC)) {{$searchC->$searchC}} @endif" placeholder="Search keyword..."/>
        <input type="submit" name="submit" value="Search"/>
        {!! Form::close() !!}
    </div>
</div>


@include('layout.afterSearchMasterUserAdmin')





<div class="features_area section_gap_change">


     <span class="contact100-form-title-1">
                       Category List
                    </span>




        <div class="containerChange">



            <div class="col-12Change">
                @if($userTable->userType==1)
                    <a class="primary-btn text-uppercase"  href="{{url('categories/add')}}">Add Category</a>
                @endif
            </div>


            <!-- partial:index.partial.html -->


                <table class="responstable">

                    <tr>

                        <th>Category Id</th>
                        <th>Category Name</th>
                        @if($userTable->userType==1)
                        <th>Action</th>
                         @endif

                    </tr>
                    @if(isset($categories[0]))
                        @foreach($categories as $category)

                            <tr>
                                <td>
                                    <a href="{{url('/pCategory').'?cid='.$category->cid}}">{{$category->cid}} </a>
                                </td>
                                <td>{{$category->categoryname}}</td>

                                @if($userTable->userType==1)
                                <td>
                                    <a href="{{url('categories/edit').'?cid='.$category->cid}}">Edit /</a>
                                    <a href="{{url('categories/delete').'?cid='.$category->cid}}">Delete</a>
                                </td>
                                 @endif
                            </tr>

                        @endforeach
                    @endif

                </table>
            </div>
            <!-- partial -->


        </div>
    </div>



    </div>


@include('layout.afterMain')

