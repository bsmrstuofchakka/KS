@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">

    </div>
</div>


@include('layout.afterSearchMaster')






<div class="contentsection contemplete clear">
    <div class="maincontent clear">

        @if(isset($sharing[0]))
            @foreach($sharing as $share)
                <div class="samepost clear">
                    <h2><a href="">{{$share->qcategoryname}}</a></h2>

                    <img width="100" src="{{asset('/uploads/personalPhotos/'.$share->photo)}}"  alt="">

                    <h6><a href="{{url('particularProfileW').'?id='.$share->uid}}">{{$share->username}}   </a>  Asked: {{$share->updated_at}}   </h6>



                    <h1>{{$share->qtitle}}  </h1>
                    <div>
                        <p>
                            {{$share->qcontent}}
                        </p>
                    </div>
                    @if($share->ufile!=null)
                        <h5><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($share->ufile))}}">---click Image/Pdf</a></h5>
                    @endif
                    <div class="leftmore clear">
                        <a href="{{url('answersW').'?id='.$share->id}}">4K Answers</a>
                    </div>
                    <div class="readmore clear">
                        <a href="{{url('answersW/addForm').'?id='.$share->id}}">Answer</a>
                    </div>
                </div>
            @endforeach
        @endif




    </div>


</div>














@include('layout.afterMain')