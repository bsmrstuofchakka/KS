@include('layout.beforeSearchMaster')

@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')



<div class="features_area section_gap_change">


<span class="contact100-form-title-1">
					Personal Information
				</span>
    <div class="containerChange">
            <div class="wrap-contact100">


                {!! Form::open(array('url' => url('personalInfoSave'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}


                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Username:</span>
                        <input class="input100" type="text" name="username" value="@if(!empty($personal)) {{$personal->username}} @endif"  placeholder="Enter user name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Email:</span>
                        <input class="input100" type="email" name="email" value="@if(!empty($personal)) {{$personal->email}} @endif" placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Password:</span>
                        <input class="input100" type="password"  name="password"   placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn1">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                        </button>
                        <button class="contact100-form-btn2">

						<span> <a href="{{url('personalInfoDetailsDisplay')}}">
							Continue
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </a>


						</span>
                        </button>
                    </div>

                {!! Form::close() !!}

            </div>


        </div>


		</div>






    @include('layout.afterMain')