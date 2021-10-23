@extends(getTemplate().'.view.layout.layout')
@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
    - {{ $quiz->name }}
@endsection

@section('style')
    <link rel="stylesheet" href="/assets/default/clock-counter/flipTimer.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .position-center {
            position: absolute;
            left: 40%;
        }
        .position-right {
            position: absolute;
            right: 2%;
        }
        .flag .btn {
            width: 63px;
        }
        .fildset-border {
            border: 2px solid orange!important;
            border-radius: 13px;
        }
    </style>
@endsection
@section('page')
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2 quiz-wizard">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div>
                            <div>
                                <h2 class="quiz-name">{{ $quiz->name }}</h2>
                                <span class="course-name d-block">{{ $quiz->content->title }}</span>
                            </div>
{{--                            <div class="quiz-info">--}}
                                <!-- <span>Question : <small>{{ count($quiz->questions) }}</small></span>
                                <span>Pass Mark : <small>{{ $quiz->pass_mark }}</small></span>
                                <span>Total Mark : <small>{{ (count($quiz->questionsGradeSum) > 0) ? $quiz->questionsGradeSum[0]->grade_sum : 0 }}</small></span> -->
{{--                            </div>--}}

                        </div>


                        <div class="quiz-time">
                            @if (!empty($quiz->time))
                                <div class="flipTimer">
                                    @if ($quiz->time > 60)
                                        <div class="hours">
                                            <span class="time-title">{{ trans('main.hour') }}</span>
                                        </div>
                                    @endif
                                    <div class="minutes"><span class="time-title">{{ trans('main.minute') }}</span></div>
                                    <div class="seconds"><span class="time-title">{{ trans('main.second') }}</span></div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <!-- $quiz->questions->take(100)->shuffle(50)->random(50); -->

{{--                    flag show row--}}
                    <style>
                        .btn-box-shadow {
                            box-shadow: 0px 0px 13px -1px rgba(0,0,0,0.75);
                            -webkit-box-shadow: 0px 0px 13px -1px rgba(0,0,0,0.75);
                            -moz-box-shadow: 0px 0px 13px -1px rgba(0,0,0,0.75);
                        }
                    </style>
                    <div class="row bg-light flag-pagi" style="background-color: white; margin-top: 20px; display: none;">
                        <div class="col-md-12">
                            <div class="card btn-box-shadow">
                                <div class="card-body">
                                    <div class="ml-5" style="margin-left: 20px">
                                        <ul class="nav navbar-nav pagi-ul" style="padding: 15px 0px; float: left">
{{--                                            <li class="flex-column">--}}
{{--                                                <button type="button"  id="" style="margin-right: 5px">hi</button>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12" id="dtBasicExample">
                            <form id="quizForm" action="/user/quizzes/{{ $quiz->id }}/store_results" method="post" class="quiz-form">
                                {{ csrf_field() }}
                                <input type="hidden" name="quiz_result_id" value="{{ $newQuizStart->id }}">
                                {{-- @foreach ($quiz->questions->shuffle()->slice(1) as $question) --}}
                                @foreach ($quiz->questions->shuffle() as $question)

                                    <fieldset id="fieldset{{ $question->id }}">
                                        <input type="hidden" name="question[{{ $question->id }}]" value="{{ $question->id }}">
                                        <input type="hidden" name="question_ids[]" value="{{ $question->id }}">
                                        <div class="form-card" id="fildset{{ $question->id }}">

                                            <div class="float-right flag position-right" >
                                                <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Flag this question" id="thisDiv{{ $question->id }}" onclick="flagThis({{ $question->id }})">
                                                    <i class="far fa-flag"></i>
                                                </button>
                                            </div>

                                            <h3 class="question-title" id="loop{{ $question->id }}" style="margin-top: 55px" data-loop="{{ $loop->iteration }}">{{ $loop->iteration }} - {{ $question->title }}</h3>
                                            @if(!empty($question->image))
                                            <div class="image-container">
                                                 <img src="{{ $question->image }}" class="fit-image" alt="">
                                            </div>

                                            @endif
                                            @if ($question->type == 'multiple' and count($question->questionsAnswers))
                                                <div class="answer-items">
                                                    @foreach ($question->questionsAnswers as $answer)
                                                        @if (!empty($answer->title))

{{--                                                            <div class="form-radio" onclick="saveAnsAjax({{ $question->id }},{{ $answer->id }})">--}}
                                                            <div class="form-radio">
                                                                <input id="asw{{ $answer->id }}" type="checkbox" name="question[{{ $question->id }}][answer]" value="{{ $answer->id }}">
                                                                <label class="answer-label" for="asw{{ $answer->id }}">
                                                                    <span class="answer-title">{{$loop->iteration .' . '. $answer->title }}</span>
                                                                </label>
                                                            </div>
                                                        @elseif(!empty($answer->image))
                                                            <div class="form-radio">
                                                                <input id="asw{{ $answer->id }}" type="radio" name="question[{{ $question->id }}][answer]" value="{{ $answer->id }}">
                                                                <label for="asw{{ $answer->id }}">
                                                                    <div class="image-container">
                                                                        <img src="{{ $answer->image }}" class="fit-image" alt="">
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                    <!-- drag-drop  start-->

                                                    <!-- -->



                                                    <!-- drag-drop end  -->
                                                </div>
                                            @elseif ($question->type == 'descriptive')
                                                <textarea name="question[{{ $question->id }}][answer]" rows="6" class="form-control"></textarea>
                                            @endif
                                        </div>
                                        <div class="card-actions d-flex align-items-center">
                                            @if ($loop->iteration > 1)
                                                <button type="button" class="action-button previous btn btn-custom">Previous Question</button>
                                            @endif
                                            @if ($loop->iteration < $loop->count)
                                                <button type="button" class="action-button next btn btn-custom">Next Question</button>
                                            @endif
                                            <!-- <button type=button  class="action-button next btn btn-info" onClick=window.open("http://protecb.com/user/simulator/new","demo","width=750,height=500,left=10,top=20,toolbar=0,status=0,"); value="Drag Drop">Drag Drop</button> -->
                                            <button type="button" class="action-button finish btn btn-danger">Finish Test</button>
                                        </div>
                                              <!-- start explanation   -->
                                <ul>
                                <!-- @foreach($question->questionsAnswers as $answer) -->
                                    <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-4">
                                        <!-- <h3><span style="color: red">Question : </span> {{$answer->title}} ?</h3> -->
                                        <div class="col-lg-offset-2">
                                            <!-- <div class="form-group">
                                                <p type="text" name="given_answer">Your Choice Was : {{$answer->id}}</p>
                                            </div> -->
                                            <div class="form-group">
                                            <!-- @if($answer->correct==1) -->
                                                <!-- <p type="text" name="true_answer"><span style="color: green">True Answer : {{ $answer->correct == 1 ? 'Yes' : 'No' }}</span></p> -->
                                                <!-- <p type="text" name="true_answer"><span style="font-size:25px ; color: green">Correct Answer : {{ $answer->title }}</span></p> -->
                                                <!-- <button class="reveal">Show Answer </button><div class="toggle_container"><div class="block"><span style="font-size:25px ; color: green">Correct Answer : {{ $answer->title }}</span></div></div>
                                                <button class="reveal1">Show Explanation </button>
                                                <div class="toggle_container">
                                                <div class="block"><video width="520" hight="280" class="video-js" data-setup='{}' muted controls>
                                                <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></video></div></div> -->


                                                <!-- @endif -->
                                            </div>
                                            <style>
                                            .reveal    {
                                                    display: inline-block;
                                                    white-space: nowrap;
                                                    background-color: #EDEDED;
                                                    background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ccc));
                                                    background-image: -webkit-linear-gradient(top, #eee, #ccc);
                                                    background-image: -moz-linear-gradient(top, #eee, #ccc);
                                                    background-image: -ms-linear-gradient(top, #eee, #ccc);
                                                    background-image: -o-linear-gradient(top, #eee, #ccc);
                                                    background-image: url('linear-gradient(top,%20#eee, #ccc');
                                                    border: 1px solid #777;
                                                    margin: 0.25em;
                                                    text-decoration: none;
                                                    color: #333;
                                                    text-shadow: 0 1px 0 rgba(255,255,255,.8);
                                                    -moz-border-radius: .1em;
                                                    -webkit-border-radius: .1em;
                                                    border-radius: .1em;
                                                    -moz-box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
                                                    -webkit-box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
                                                    box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3); font-style:normal; font-variant:normal; font-weight:bold; line-height:2em; font-size:1em; font-family:Arial, Helvetica; padding-left:0.5em; padding-right:0.5em; padding-top:0; padding-bottom:0
                                                }

                                                .show_reveal:hover
                                                {
                                                    background-color: #eee;
                                                    background-image: -webkit-gradient(linear, left top, left bottom, from(#fafafa), to(#ddd));
                                                    background-image: -webkit-linear-gradient(top, #fafafa, #ddd);
                                                    background-image: -moz-linear-gradient(top, #fafafa, #ddd);
                                                    background-image: -ms-linear-gradient(top, #fafafa, #ddd);
                                                    background-image: -o-linear-gradient(top, #fafafa, #ddd);
                                                    background-image: url('linear-gradient(top,%20#fafafa, #ddd');
                                                }

                                                .show_reveal:active
                                                {
                                                    -moz-box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
                                                    -webkit-box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
                                                    box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
                                                    position: relative;
                                                    top: 1px;
                                                }

                                                .show_reveal:focus
                                                {
                                                    outline: 0;
                                                    background: #fafafa;
                                                }
                                            </style>
                                            <script>
                                                $(document).ready(function(){
                                                $(".toggle_container").hide();
                                                $("button.reveal").click(function(){
                                                    $(this).toggleClass("active").next().slideToggle("fast");

                                                    if ($.trim($(this).text()) === 'Show Answer') {
                                                        $(this).text('Hide Answer');
                                                    }
                                                    else {
                                                        $(this).text('Show Answer');
                                                    }

                                                    return false;
                                                });
                                                $("a[href='" + window.location.hash + "']").parent(".reveal").click();
                                                });
                                            </script>

                                            <script>
                                                $(document).ready(function(){
                                                $(".toggle_container").hide();
                                                $("button.reveal1").click(function(){
                                                    $(this).toggleClass("active").next().slideToggle("fast");

                                                    if ($.trim($(this).text()) === 'Show Explanation') {
                                                        $(this).text('Hide Explanation');
                                                    }
                                                    else {
                                                        $(this).text('Show Explanation');
                                                    }

                                                    return false;
                                                });
                                                $("a[href='" + window.location.hash + "']").parent(".reveal1").click();
                                                });
                                            </script>






                                        </div>
                                    </div>
                                    <!--  -->
                                <script>
                                        $(document).ready(function () {
                                        $('#dtBasicExample').DataTable();
                                        $('.dataTables_length').addClass('bs-select');
                                        });
                                </script>
                                    <!--  -->

                                <!-- @endforeach -->
                                <!-- <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><h4>Previous</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>9</h2></a></li>
                                        <li class="page-item "><a class="page-link" href="#"><h4>8</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>7</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>6</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>5</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>4</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>3</h2></a></li>
                                        <li class="page-item active"><a class="page-link" href="#"><h4>2</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>1</h2></a></li>
                                        <li class="page-item"><a class="page-link" href="#"><h4>Next</h2></a></li>
                                    </ul> -->
                                <!-- end explanation  -->
                                    </fieldset>
                                @endforeach

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="finishModal" class="modal fade" role="dialog">
        <div class="modal-dialog zinun">
            <!-- Modal content-->
            <div class="modal-content modal-sm">
                <div class="modal-body modst2">
                    <p>{{ trans('main.finish_quiz_alert') }}</p>
                    <div class="d-flex align-items-center qalrt">
                        <button id="SubmitResult" class=" btn btn-custom">
                            {{ trans('main.yes_sure') }}
                        </button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger">{{ trans('main.cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="application/javascript" src="/assets/default/clock-counter/jquery.flipTimer.js"></script>
    <script>
        "use strict";
        $(document).ready(function () {
                @if(isset($quiz->time))
            var currentTime = new Date();
            currentTime.setMinutes(currentTime.getMinutes() + {{ $quiz->time }});


            $('.flipTimer').flipTimer({
                direction: 'down',
                date: currentTime,
                callback: function () {
                    $('body .action-button.finish').remove();
                    $('#quizForm').submit();
                },
            });
                @endif

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").on('click',function () {

                current_fs = $(this).parent().parent();
                next_fs = $(this).parent().parent().next();

                next_fs.show();

                current_fs.animate({opacity: 0}, {
                    step: function (now) {
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });

            });

            $(".previous").on('click',function () {

                current_fs = $(this).parent().parent();
                previous_fs = $(this).parent().parent().prev();

                previous_fs.show();


                current_fs.animate({opacity: 0}, {
                    step: function (now) {
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $('body').on('click', '.action-button.finish', function (e) {
                e.preventDefault();
                $('#finishModal').modal('show');
            });

            $('body').on('click', '#SubmitResult', function (e) {
                e.preventDefault();
                $('#quizForm').submit();
            });
        });
    </script>
    <script>
        function flagThis(queId)
        {
            var fieldId = $('#fildset'+queId);
            var thisDiv = $('#thisDiv'+queId);
            var classCheck = fieldId.hasClass('fildset-border');
            var loopId  = $('#loop'+queId).attr('data-loop');
            if (classCheck === false)
            {
                fieldId.addClass('fildset-border');
                thisDiv.removeClass('btn-success');
                thisDiv.addClass('btn-danger');
                thisDiv.attr('title','Question Flagged.');
                thisDiv.attr('data-original-title','Question Flagged.');
                $('.flag-pagi').css('display','block');
                $('.pagi-ul').append('<li class="flex-column" id="flagged'+queId+'"><button type="button" onclick="showField('+queId+')" class="btn btn-xs btn-success" style="margin-right: 5px">'+loopId+'</button></li>');
            } else {
                fieldId.removeClass('fildset-border');
                thisDiv.removeClass('btn-danger');
                thisDiv.addClass('btn-success');
                thisDiv.attr('title','Flag this question');
                thisDiv.attr('data-original-title','Flag this question');
                $('.pagi-ul').find('#flagged'+queId).remove();
            }
        }
    </script>
    <script>

        function showField(queId)
        {
            $('fieldset').css({'display':'none','opacity': 0,'position':'relative'});
            $('#fieldset'+queId).css({'display':'block', 'opacity': 1, 'position':'relative'});
            // alert('hello');

        }
    </script>
{{--    <script>--}}
{{--        function saveAnsAjax(quistion_id, answer_id)--}}
{{--        {--}}
{{--            $.ajax({--}}
{{--                url: baseurl+'user/quizzes/set-ans/'+quistion_id+'/'+answer_id,--}}
{{--                dataType: 'JSON',--}}
{{--                method: 'GET',--}}
{{--                success: function (data){--}}

{{--                }--}}
{{--            })--}}
{{--        }--}}
{{--    </script>--}}
@endsection
