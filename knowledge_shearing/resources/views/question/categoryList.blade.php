@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')





<div class="features_area section_gap_change">


    <div class="col-12Change">
        <a class="primary-btn text-uppercase"  href="{{url('categories/add')}}">Add Category</a>
    </div>


        <div class="containerChange">

                    <span class="contact100-form-title-1">
                       Category List
                    </span>



            <!-- partial:index.partial.html -->


                <table class="responstable">

                    <tr>

                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    @if(isset($categories[0]))
                        @foreach($categories as $category)

                            <tr>
                                <th>{{$category->id}}</th>
                                <th>{{$category->categoryname}}</th>


                                <th>
                                    <a href="{{url('categories/edit').'?id='.$category->id}}">Edit /</a>
                                    <a href="{{url('categories/delete').'?id='.$category->id}}">Delete</a>
                                </th>
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

