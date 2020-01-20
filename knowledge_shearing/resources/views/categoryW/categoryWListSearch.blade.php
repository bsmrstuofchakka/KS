@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">

    </div>
</div>


@include('layout.afterSearchMaster')





<div class="features_area section_gap_change">





        <div class="containerChange">

                    <span class="contact100-form-title-1">
                       Category List
                    </span>
            </div>


            <!-- partial:index.partial.html -->


                <table class="responstable">

                    <tr>

                        <th>Category Id</th>
                        <th>Category Name</th>

                    </tr>
                    @if(isset($categories[0]))
                        @foreach($categories as $category)

                            <tr>
                                <td>
                                    <a href="{{url('/pCategoryW').'?cid='.$category->cid}}">{{$category->cid}} </a>
                                </td>
                                <td>{{$category->categoryname}}</td>

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

