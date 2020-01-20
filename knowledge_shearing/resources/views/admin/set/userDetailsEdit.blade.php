@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')



<div class="features_area section_gap_change">

				<span class="contact100-form-title-1">
                    User Details List
				</span>

        <div class="containerChange">



            <div class="wrap-contact100">

                {!! Form::open(array('url' => url('userDetails/save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}


                @if(!empty($userDetails))
                    <input type="hidden" name="id" value="{{$userDetails->id}}">
                @endif

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Name:</span>
                    <input class="input100" type="text" name="name" value="@if(!empty($userDetails)) {{$userDetails->name}} @endif" placeholder="Enter name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Department Id:</span>
                    <input class="input100" type="text" name="did" value="@if(!empty($userDetails)) {{$userDetails->did}} @endif" placeholder="Enter Department Id">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Department Name:</span>
                    <input class="input100" type="text" name="dname" value="@if(!empty($userDetails)) {{$userDetails->dname}} @endif" placeholder="Enter Department Name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Institution Name:</span>
                    <input class="input100" type="text" name="iname" value="@if(!empty($userDetails)) {{$userDetails->iname}} @endif" placeholder="Enter Institution Name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Session:</span>
                    <input class="input100" type="text" name="ses" value="@if(!empty($userDetails)) {{$userDetails->ses}} @endif" placeholder="Enter Session">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Phone Number:</span>
                    <input class="input100" type="text"  name="phone" value="@if(!empty($userDetails)) {{$userDetails->phone}} @endif"  placeholder="Enter Phone Number">
                    <span class="focus-input100"></span>
                </div>



                <!-- $contents = pathinfo(storage_path().'/zOEh8zefUuHmOhlLY80UNNneTO5tJmv1ECfrwOpF.png');
                // img width="100px" src="asset('admin/uploads/'.$flower-image)}}

                //  dd( $contents['extension']);
                -->
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Photo:</span>
                    <input class="input100" type="file" name="photo"  placeholder="Enter photo">

                    @if(!empty($userDetails->photo))
                        <img width="80" src="{{asset('/uploads/personalPhotos/'.$userDetails->photo)}}"  alt="">
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






@include('layout.afterMain')


