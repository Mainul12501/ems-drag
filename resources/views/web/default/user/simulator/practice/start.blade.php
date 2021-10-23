@extends(getTemplate().'.view.layout.layout')
@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
    - Practice Exam - {{ $que_qty }} questions
@endsection

@section('style')
    <link rel="stylesheet" href="/assets/default/clock-counter/flipTimer.css"/>
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
                                <h2 class="quiz-name">Practice Exam</h2>
                                <span class="course-name d-block">{{ $que_qty }} Questions</span>
                            </div>
                        </div>
                        <div class="quiz-time">
                            @if (!empty($localData['sim_time']))
                                <div class="flipTimer">
                                    @if ($localData['sim_time'] > 60)
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
                    <div class="row">
                        <div class="col-md-12" id="dtBasicExample">
{{--                            <form id="quizForm" action="/user/quizzes/{{ $quiz->id }}/store_results-mega" method="post" class="quiz-form">--}}
                            <form id="quizForm" action="" method="post" class="quiz-form">
                                {{ csrf_field() }}
                                <input type="hidden" id="ansId" value="">
                                @foreach ($randomQuestions->shuffle() as $question)
                                    <fieldset>
{{--                                        <input type="hidden" name="question[{{ $question->id }}]" value="{{ $question->id }}">--}}
                                        <input type="hidden" name="question[{{ $question->question_id }}]" value="{{ $question->question_id }}">
                                        <div class="form-card">
                                            <h3 class="question-title">{{ $loop->iteration }} - {{ $question->title }}</h3>
                                            @if(!empty($question->image))
                                                <div class="image-container">
                                                    <img src="{{ $question->image }}" class="fit-image" alt="">
                                                </div>

                                            @endif
                                            @if ($question->type == 'multiple' and count($question->questionsAnswers))
                                                <div class="answer-items">
                                                    @foreach ($question->questionsAnswers as $answer)
                                                        @if (!empty($answer->title))

                                                            <div class="form-radio">
{{--                                                                <input id="asw{{ $answer->id }}" type="checkbox" name="question[{{ $question->id }}][answer]" value="{{ $answer->id }}">--}}
                                                                <input id="asw{{ $answer->id }}" type="checkbox" name="question[{{ $question->question_id }}][answer]" onclick="checkAns(this.value)" class="ans" question-id="{{ $question->question_id }}" value="{{ $answer->id }}">
                                                                <label class="answer-label" for="asw{{ $answer->id }}">
                                                                    <span class="answer-title">{{$loop->iteration .' . '. $answer->title }}</span>
                                                                </label>
                                                            </div>
                                                        @elseif(!empty($answer->image))
                                                            <div class="form-radio">
{{--                                                                <input id="asw{{ $answer->id }}" type="radio" name="question[{{ $question->id }}][answer]" value="{{ $answer->id }}">--}}
                                                                <input id="asw{{ $answer->id }}" type="radio" name="question[{{ $question->question_id }}][answer]" class="ans" question-id="{{ $question->question_id }}" value="{{ $answer->id }}">
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
{{--                                                <textarea name="question[{{ $question->id }}][answer]" rows="6" class="form-control"></textarea>--}}
                                                <textarea name="question[{{ $question->question_id }}][answer]" rows="6" class="form-control"></textarea>
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
                                        </ul>
                                        <style>
                                            .checkAns{
                                                /*display: none;*/
                                                position: absolute;
                                                right: 0;
                                            }
                                            .swal-wide{
                                                width:850px !important;
                                            }
                                            .description {
                                                font-size: 16px;
                                                margin-top: 8px;
                                            }
                                        </style>
                                        <div id="printAns" style="float: left">

                                            <button type="button" class="btn btn-orange explanation text-capitalize" onclick="showDescription({{ $question->id }})" style="display: none">explanation</button>
                                            <p class="text-justify description" id="desToggle{{ $question->id }}" style="display: none;">
                                                <span class="desPrint"></span>
                                            </p>
                                        </div>
                                        <div class="card-actions d-flex align-items-right float-right " >
                                            <button type="button" class="btn btn-primary checkAns" onclick="checkQueAns({{ $question->question_id }})" style="display: none">Check Ans</button>
                                        </div>
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
            @if(isset($localData['sim_time']))
            var currentTime = new Date();
            currentTime.setMinutes(currentTime.getMinutes() + {{ $localData['sim_time'] }});


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
                $('.checkAns').css('display', 'none');
                $('#description').css('display','none');
                $('.explanation').css('display','none');
            });

            $(".previous").on('click',function () {

                current_fs = $(this).parent().parent();
                previous_fs = $(this).parent().parent().prev();

                previous_fs.show();
                $('.checkAns').css('display', 'none');
                $('#description').css('display','none');
                $('.explanation').css('display','none');
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
            let baseurl = {!! json_encode(url('/')) !!}+'/';
            $('body').on('click', '.action-button.finish', function (e) {
                e.preventDefault();
                $('#finishModal').modal('show');
            });

            $('body').on('click', '#SubmitResult', function (e) {
                e.preventDefault();
                // $('#quizForm').submit();
                window.location.href = baseurl+'user/simulator';
            });
        });
    </script>
{{--    sweet alert 2--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.css" integrity="sha512-rogivVAav89vN+wNObUwbrX9xIA8SxJBWMFu7jsHNlvo+fGevr0vACvMN+9Cog3LAQVFPlQPWEOYn8iGjBA71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.js" integrity="sha512-2sjxi4MoP9Gn7QE0NhJdxOFVMK/qYsZO6JnO6pngGvck8p5UPwFX2LV5AsAMOQYgvbzMmki6sIqJ90YO3STAnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
{{--    toaster js--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let baseurl = {!! json_encode(url('/')) !!}+'/';
        $('.ans').on('click', function (){
            $('.checkAns').css('display', 'block');
        });

        function checkQueAns(questionId)
        {
            event.preventDefault();
            // $questionId = $('.ans').attr('question-id');
            $.ajax({
                url: baseurl+'user/get-ans/'+questionId,
                method: 'GET',
                dataType: 'JSON',
                success: function (data){
                    console.log(data);
                    var variable = data.question.description;
                    $('.explanation').css('display','block');
                    // $('.desPrint').empty().append(isset(data.question.description) ? data.question.description : 'No Explanation Available.');
                    // $('#description').empty().html((typeof(variable) != "undefined" && variable !== null) ? data.description : 'No Explanation Available.');
                    if (typeof(variable) != "undefined" && variable !== null)
                    {
                        $('.desPrint').empty().html(data.question.description);
                    } else {
                        $('.desPrint').empty().html('No Explanation Available.');
                    }

                    // toaster js
                    // toastr.success(data.title, 'Answer is :', {timeOut: 5000});
                    // sweet alert 2
                    var ansId   = $('#ansId').val();
                    if (data.answer.id == ansId)
                    {
                        Swal.fire({
                            title: "This Question's answer is correct.",
                            icon: 'warning',
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: "This Question's answer is wrong.",
                            text: 'Try again!',
                        })
                    }

                },
                error: function (){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })
                }
            });
        }
        // $('.checkAns').on('click', function (){
        //
        // });
        function showDescription(question_id)
        {
            $('#desToggle'+question_id).toggle(500);

        }

        function checkAns(ans)
        {
            $('#ansId').val(ans);
        }

        function isset(iVal){
            return (iVal!=="" && iVal!=null && iVal!==undefined && typeof(iVal) != "undefined") ? 1 : 0;
        }

    </script>
@endsection
