@include('layout.beforeSearchMaster')

<div class="social clear">
    <div class="searchbtn clear">

    </div>
</div>

@include('layout.afterSearchMasterUserAdmin')


<div class="contentsection contemplete clear">
    <div class="maincontent clear">

        @if(!empty($sharing))

                <div class="samepost clear">
                    <h2><a href="">{{$sharing->qcategoryname}}</a></h2>

                    <img width="100" src="{{asset('/uploads/personalPhotos/'.$sharing->photo)}}"  alt="">

                    <h6><a href="{{url('particularProfile').'?id='.$sharing->uid}}">{{$sharing->username}}   </a>  Asked: {{$sharing->updated_at}}   </h6>

                    <ul id="menu">

                        @if($userTable->userType==1 || Auth::id()==$sharing->userId)
                        <li><p> .......</p>
                            <ul>
                                <li><a href="{{url('questions/edit').'?id='.$sharing->id}}">edit </a></li>
                                <li><a href="{{url('questions/delete').'?id='.$sharing->id}}">delete</a></li>
                            </ul>
                        </li>
                            @endif

                    </ul>

                    <h1>{{$sharing->qtitle}}  </h1>
                    <div>
                        <p>
                            {{$sharing->qcontent}}
                        </p>
                    </div>
                    @if($sharing->ufile!=null)
                    <h5><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($sharing->ufile))}}">---click Image/Pdf</a></h5>
                    @endif

                    <div class="readmore clear">
                        <a href="{{url('answers/addForm').'?id='.$sharing->id}}">Answer</a>
                    </div>
                </div>

        @endif

        <div class="answer">
            @if($ans_count==0)
            <h2>{{$ans_count}} Answer</h2>
            @else
                <h2>{{$ans_count}} Answers</h2>
            @endif
        </div>

            @if(isset($answers[0]))
                @foreach($answers as $answer)
                    <div class="answerpost clear">

                        <img width="100" src="{{asset('/uploads/personalPhotos/'.$answer->photo)}}"  alt="">

                        <h6><a href="{{url('particularProfile').'?id='.$answer->uid}}">{{$answer->username}}   </a>  Asked: {{$answer->updated_at}}   </h6>

                        <ul id="menu">

                            @if($userTable->userType==1 || Auth::id()==$answer->userId)
                                <li><a> .......</a>
                                    <ul>
                                    <li><a href="{{url('answers/edit').'?id='.$answer->id}}">edit </a></li>
                                    <li><a href="{{url('answers/delete').'?id='.$answer->id}}">delete</a></li>

                                </ul>
                            </li>
                            @endif
                        </ul>

                        <h1> </h1>
                        <div>
                            <p>
                                {{$answer->acontent}}
                            </p>
                        </div>
                        @if($answer->afile!=null)
                        <h5><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($answer->afile))}}">---click Image/Pdf</a></h5>
                       @endif
                        <div class="leftmore clear">
                            <a href="{{url('replies/addForm').'?id='.$answer->id}}">Reply</a>
                        </div>
                        <script type="text/javascript" src="{{asset('/js/answer-reply/scrolltop.js')}}"></script>
                        <script type="text/javascript" src="{{asset('/js/answer-reply/jquery.js')}}"></script>

                    </div>

                    @foreach($replies as $reply)
                        @if($reply->aid==$answer->id || $answer->id==null)
                    <div class="replypost clear">
                        <img width="100" src="{{asset('/uploads/personalPhotos/'.$reply->photo)}}"  alt="">
                        <h6><a href="{{url('particularProfile').'?id='.$reply->uid}}">{{$reply->username}}   </a>  Asked: {{$reply->updated_at}}   </h6>
                        <ul id="menu">

                            @if($userTable->userType==1 || Auth::id()==$reply->userId)

                            <li><a> .......</a>
                                <ul>
                                    <li><a href="{{url('replies/edit').'?id='.$reply->id}}">edit </a></li>
                                    <li><a href="{{url('replies/delete').'?id='.$reply->id}}">delete</a></li>

                                </ul>
                            </li>
                            @endif
                        </ul>
                        <h1>  </h1>
                        <p>
                            {{$reply->rcontent}}

                        </p>
                        @if($reply->rfile!=null)
                        <h5><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($reply->rfile))}}">---click Image/Pdf</a></h5>
                        @endif

                    </div>
                        @endif
                @endforeach
                @endforeach

            @else
                @foreach($s_answers as $answer)
                @foreach($s_replies as $s_reply)


                    @if($answer->id==$s_reply->aid)
                        <div class="answerpost clear">

                            <img width="100" src="{{asset('/uploads/personalPhotos/'.$answer->photo)}}"  alt="">

                            <h6><a href="{{url('particularProfile').'?id='.$answer->uid}}">{{$answer->username}}   </a>  Asked: {{$answer->updated_at}}   </h6>

                            <ul id="menu">

                                @if($userTable->userType==1 || Auth::id()==$answer->userId)
                                    <li><a> .......</a>
                                        <ul>
                                            <li><a href="{{url('answers/edit').'?id='.$answer->id}}">edit </a></li>
                                            <li><a href="{{url('answers/delete').'?id='.$answer->id}}">delete</a></li>

                                        </ul>
                                    </li>
                                @endif
                            </ul>

                            <h1> </h1>
                            <div>
                                <p>
                                    {{$answer->acontent}}
                                </p>
                            </div>
                            @if($answer->afile!=null)
                                <h5><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($answer->afile))}}">---click Image/Pdf</a></h5>
                            @endif
                            <div class="leftmore clear">
                                <a href="{{url('replies/addForm').'?id='.$answer->id}}">Reply</a>
                            </div>
                            <script type="text/javascript" src="{{asset('/js/answer-reply/scrolltop.js')}}"></script>
                            <script type="text/javascript" src="{{asset('/js/answer-reply/jquery.js')}}"></script>

                        </div>


                        @foreach($replies as $reply  )

                                @if($s_reply->aid==$reply->aid )
                                <div class="replypost clear">
                                    <img width="100" src="{{asset('/uploads/personalPhotos/'.$reply->photo)}}"  alt="">
                                    <h6><a href="{{url('particularProfile').'?id='.$reply->uid}}">{{$reply->username}}   </a>  Asked: {{$reply->updated_at}}   </h6>
                                    <ul id="menu">

                                        @if($userTable->userType==1 || Auth::id()==$reply->userId)

                                            <li><a> .......</a>
                                                <ul>
                                                    <li><a href="{{url('replies/edit').'?id='.$reply->id}}">edit </a></li>
                                                    <li><a href="{{url('replies/delete').'?id='.$reply->id}}">delete</a></li>

                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
                                    <h1>  </h1>
                                    <p>
                                        {{$reply->rcontent}}

                                    </p>
                                    @if($reply->rfile!=null)
                                        <h5><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($reply->rfile))}}">---click Image/Pdf</a></h5>
                                    @endif

                                </div>
                                        @endif
                                    @endforeach
                        @endif
                            @endforeach

                @endforeach
               @endif






        </div>

    </div>
</div>









@include('layout.afterMain')


