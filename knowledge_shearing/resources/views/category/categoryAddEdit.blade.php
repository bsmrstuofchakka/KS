@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')



<div class="features_area section_gap_change">



        <div class="containerChange">

<span class="contact100-form-title-1">
                    Category Details
				</span>

            <div class="wrap-contact100">

                {!! Form::open(array('url' => url('categories/save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}


                @if(!empty($categories))
                    <input type="hidden" name="cid" value="{{$categories->cid}}">
                @endif


                <div class="wrap-input100 validate-input">
                        <span class="label-input100">Category Name:</span>
                        <input class="input100" type="text"  name="categoryname"   value="@if(!empty($categories)) {{$categories->categoryname}} @endif" placeholder="Enter Category Name">
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


