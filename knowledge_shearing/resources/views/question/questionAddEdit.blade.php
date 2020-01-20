@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')



<div class="features_area section_gap_change">

				<span class="contact100-form-title-1">
                    Question Details
				</span>

        <div class="containerChange">



            <div class="wrap-contact100">

                {!! Form::open(array('url' => url('questions/save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}


                @if(!empty($questions))
                    <input type="hidden" name="id" value="{{$questions->id}}">
                @endif

                <div class="wrap-input100 validate-input">
                        <span class="label-input100">Title:</span>
                        <input class="input100" type="text"  name="qtitle"  value="@if(!empty($questions)) {{$questions->qtitle}} @endif"   placeholder="Enter Title" >
                        <span class="focus-input100"></span>
                    </div>






                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Category Name:</span>
                    <select class="input100" type="text" name="qcategoryname" >
                        @if(!empty($questions))
                            @foreach($categories as $category)
                                <option @if($category->categoryname==$questions->qcategoryname) selected @endif value="{{$category->categoryname}}">{{$category->categoryname}}</option>

                            @endforeach

                            @else
                            @foreach($categories as $category)
                            <option value="{{$category->categoryname}}">{{$category->categoryname}}</option>
                            @endforeach
                        @endif

                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Content:</span>
                    <textarea class="input100" type="text"  name="qcontent"     placeholder="Enter Question">
                        @if(!empty($questions)) {{$questions->qcontent}} @endif
                    </textarea>
                </div>


                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Upload File:</span>
                    <input class="input100" type="file"  name="ufile"  value="@if(!empty($questions)) {{$questions->ufile}} @endif"    placeholder="Enter Files ">
                    <span class="focus-input100"></span>
                </div>



                <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn1">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                        </button>
                    </div>

                    {!! Form::close() !!}



            </div>


        </div>



    </div>






@include('layout.afterMain')


