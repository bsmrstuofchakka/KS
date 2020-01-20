@include('layout.beforeSearchMaster')

@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')


<section class="features_area section_gap_change">

    <span class="contact100-form-title-1">
					Personal Details Information
				</span>

    <div class="containerChange">


            <div class="wrap-contact100">




                {!! Form::open(array('url' => url('personalInfoDetailsSave'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}


                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Name:</span>
                        <input class="input100" type="text" name="name" value="@if(!empty($personalDetails)) {{$personalDetails->name}} @endif" placeholder="Enter name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Department Id:</span>
                        <input class="input100" type="text" name="did" value="@if(!empty($personalDetails)) {{$personalDetails->did}} @endif" placeholder="Enter Department Id">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Department Name:</span>
                        <input class="input100" type="text" name="dname" value="@if(!empty($personalDetails)) {{$personalDetails->dname}} @endif" placeholder="Enter Department Name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Institution Name:</span>
                        <input class="input100" type="text" name="iname" value="@if(!empty($personalDetails)) {{$personalDetails->iname}} @endif" placeholder="Enter Institution Name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Session:</span>
                        <input class="input100" type="text" name="ses" value="@if(!empty($personalDetails)) {{$personalDetails->ses}} @endif" placeholder="Enter Session">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Phone Number:</span>
                        <input class="input100" type="text"  name="phone" value="@if(!empty($personalDetails)) {{$personalDetails->phone}} @endif"  placeholder="Enter Phone Number">
                        <span class="focus-input100"></span>
                    </div>



                <!-- $contents = pathinfo(storage_path().'/zOEh8zefUuHmOhlLY80UNNneTO5tJmv1ECfrwOpF.png');
                // img width="100px" src="asset('admin/uploads/'.$flower-image)}}

                //  dd( $contents['extension']);
                -->
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Photo:</span>
                        <input class="input100" type="file" name="photo"  placeholder="Enter photos">

                        @if(!empty($personalDetails->photo))
                            <img width="80" src="{{asset('/uploads/personalPhotos/'.$personalDetails->photo)}}"  alt="">
                        @endif

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
    </section>



    </div>


    @include('layout.afterMain')