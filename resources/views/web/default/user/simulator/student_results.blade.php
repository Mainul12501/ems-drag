@extends(getTemplate().'.view.layout.layout')
@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection

@section('page')
    <!-- MultiStep Form -->

    <div class="container-fluid" id="grad1">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2 quiz-wizard">
                <div class="card quiz-result">
                    <div class="card-header d-flex align-items-center">
                        <div>
                            <div>
                                <h2 class="quiz-name">{{ $quiz->name }}</h2>
                                <span class="course-name d-block">{{ $quiz->content->title }}</span>

                            </div>
                            <div class="quiz-info">
                                {{-- <span>Question : <small>{{ count($quiz->questions) }}</small></span> --}}
{{--                                <span>Question : <small>{{50 }}</small></span>--}}
                                <span>Question : <small>{{ \Illuminate\Support\Facades\Session::has('sim_qty') ? \Illuminate\Support\Facades\Session::get('sim_qty') : 0 }}</small></span>
                                <!-- <span>Question : <small>{{$quiz->questions->pluck('title') }}</small></span> -->
                                <span>Pass Mark : <small>{{ \Illuminate\Support\Facades\Session::has('sim_pass_mark') ? \Illuminate\Support\Facades\Session::get('sim_pass_mark') : 0 }}</small></span>
                                {{-- <span>Pass Mark : <small>{{(($question_review*80)/100) }}%</small></span>  --}}
                                {{-- <span>Total Mark : <small>{{ (count($quiz->questionsGradeSum) > 0) ? $quiz->questionsGradeSum[0]->grade_sum : 0 }}</small></span> --}}
                                <span>Total Mark : <small>{{ \Illuminate\Support\Facades\Session::has('sim_total_mark') ? \Illuminate\Support\Facades\Session::get('sim_total_mark') : 0 }}</small></span>
{{--                                <a href="/profile/{{ $user['id'] }}" class="btn btn-custom btn-primary">Review</a>--}}
                                <!-- <button type="button" class="btn btn-primary">Review</button> -->
                                <button type="button" class="btn btn-custom btn-success" data-toggle="modal" data-target="#reviewModal">
                                    Review
                                </button>
                            </div>
                        </div>

                        <div class="result-mark {{ $quiz_result->status }}">
                            <strong>{{ $quiz_result->user_grade }}</strong>
                            <span>({{ $quiz_result->status == 'pass' ? trans('main.passed') : ($quiz_result->status == 'fail' ? trans('main.failed') : trans('main.waiting')) }})</span>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="result-card">
                                <img src="/assets/default/images/{{ $quiz_result->status == 'pass' ? 'winners.png' : 'feeling.png'}}" alt="">
                                <h3 class="result-msg">{{ $quiz_result->status == 'pass' ? trans('main.quiz_winners') : ($quiz_result->status == 'fail' ? trans('main.quiz_feeling') : trans('main.quiz_waiting')) }}</h3>
                                <!-- @if ($quiz_result->status == 'fail' and $canTryAgain)
                                    <a href="/user/quizzes/{{ $quiz->id }}/start" class="btn btn-custom btn-danger">{{ trans('main.try_again') }}</a>
                                    @elseif ($quiz_result->status == 'pass' and $quiz->certificate)
                                    <a href="/user/certificates/{{ $quiz_result->id }}/download" class="btn btn-custom btn-danger">{{ trans('main.download_certificate') }}</a>
                                @endif -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="reviewModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Quiz Review</h3>
                    <button type="button" class="close modal-close-btn-position" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body quiz-form">
                    <style>
                        .bg-success {
                            background-color:#28a745!important;
                        }
                        .modal-close-btn-position {
                            position: absolute;
                            right: 2%;
                            top: 20px;
                        }
                        .font-white {
                            color: white!important;
                        }
                        .bg-danger {
                            background-color: red!important;
                        }
                    </style>

                    <div class="form-card" id="fildset114">
                        @php($i=1)
                        @foreach($ques as $que)
                            <h3 class="question-title" style="margin-top: 55px">{{ $i++ }} - {{ $que->title }}</h3>
                            <div class="answer-items">
                                @php($z=1)
                                @foreach($que->questionsAnswers as $ans)
                                    <div class="form-radio">

                                        <label class="answer-label {{ $ans->correct == 1 ? 'bg-success font-white' : '' }} @foreach($providedAnswers as $providedAnswer){{ ($providedAnswer->id == $ans->id) ? ($providedAnswer->correct == 1 ? 'bg-success font-white' : 'bg-danger font-white') : '' }}@endforeach" for="">
                                            <span class="answer-title">{{ $z++ }} . {{ $ans->title }}</span>
                                        </label>

                                    </div>
                            @endforeach
                            <!-- drag-drop  start-->

                                <!-- -->



                                <!-- drag-drop end  -->
                            </div>
                        @endforeach
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                    {{--                                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
