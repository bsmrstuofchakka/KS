@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')


<div class="contentsection contemplete clear">
    <div class="maincontent clear">




            <div class="answer">
                <h2>Leave an Reply</h2>
            </div>

        <div class="wrap-contact100">

            {!! Form::open(array('url' =>  url('replies/save').'?aaid='.$answer->id,     'files' => true, 'class'=>'contact100-form validate-form') )  !!}


{{--//encrypt--}}

            <div class="wrap-ansinput100 validate-input">
                <span class="anslabel-input100">Featured Image:</span>
                <input class="ansinput100" type="file"  name="rfile"   placeholder="Enter Files ">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-ansinput100 validate-input">
                <span class="anslabel-input100">Content:</span>
                <textarea class="ansinput100" type="text"  name="rcontent"    placeholder="Enter Reply">
                    </textarea>
            </div>





            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn1">
						<span>
							Reply
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>

            {!! Form::close() !!}



        </div>

    </div>
</div>









@include('layout.afterMain')


