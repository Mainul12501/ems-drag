@extends($user['vendor'] == 1 ? getTemplate() . '.user.layout.videolayout' : getTemplate() . '.user.layout_user.videolayout')
@section('tab3','active')
@section('tab')
    <div class="h-20"></div>
    <div class="off-filters-li">
        <div class="result-info">
            <div class="result-info-item">
                <strong>{{ $quiz->name }}</strong>
                <span>{{ $quiz->content->title }}</span>
               
            </div>

            <div class="result-info-item">
                {{-- <strong>{{ trans('main.total_results') }}</strong> --}}
                <strong>Total Students</strong>
                <span>{{ count($QuizResults) }}</span>
            </div>

            {{-- <div class="result-info-item">
                <strong>{{ trans('main.waiting_results') }}</strong>
                <span>{{ $waitingResults }}</span>
            </div> --}}

            <div class="result-info-item">
                <strong>{{ trans('main.passed') }}</strong>
                <span>{{ $passedResults }}</span>
            </div>

            {{-- <div class="result-info-item">
                <strong>{{ trans('main.average') }}</strong>
                <span>{{ $averageResults }}</span>
            </div> --}}
        </div>
        @if(count($QuizResults) == 0)
            <div class="text-center">
                <img src="/assets/default/images/empty/Videos.png">
                <div class="h-20"></div>
                <span class="empty-first-line">{{ trans('main.no_quiz_result') }}</span>
                <div class="h-20"></div>
            </div>
        @else
            <div class="table-responsive">
                <table class="table ucp-table" id="content-table">
                    <thead class="thead-s">
                    <th class="text-center">Ranking</th>
                    <th class="text-center">{{ trans('main.student') }}</th>
                    <th class="text-center">{{ trans('main.grade') }}</th>
                    <th class="text-center">{{ trans('main.status') }}</th>
                    <th class="text-center">{{ trans('main.time_and_date') }}</th>
                    {{-- <th class="text-center" width="100">{{ trans('main.controls') }}</th> --}}
                    </thead>
                    <tbody>
                    @foreach($QuizResults as $result)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                            <td>{{ $result->student->name }}</td>
                            <td>
                                @if ($result->status == 'waiting')
                                    <span class="waits">-</span>
                                @else
                                    {{ $result->user_grade }}
                                @endif
                            </td>
                            <td>
                                @if ($result->status == 'pass')
                                    <span class="badge badge-success">{{ trans('main.passed') }}</span>
                                @elseif ($result->status == 'fail')
                                    <span class="badge badge-danger">{{ trans('main.failed') }}</span>
                                @else
                                    <span class="badge badge-warning">{{ trans('main.waiting') }}</span>
                                @endif
                            </td>
                            
                            {{-- <td>{{ date('Y-m-d | H:i', $result->created_at) }}</td> --}}
                            <td>{{ date('d-m-Y | H:i', $result->created_at) }}</td>
                            {{-- <td>
                                @if ($quiz->hasDescriptive)
                                    <button data-id="{{ $result->id }}" class="gray-s btn-transparent review-need" data-toggle="tooltip" title="{{ trans('main.review_needs') }}"><span class="crticon mdi mdi-eye"></span></button>
                                @endif
                            </td> --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>


    <div class="accordion-off col-xs-12">
        <ul id="accordion" class="accordion off-filters-li">
            <li class="open">
                 <div class="link">
                    <h2>Show All Questions & Answers</h2>
                    <i class="mdi mdi-chevron-down"></i>
                </div> 
                <ul class="submenu submenud">
                    <div class="h-10"></div>
@foreach ($quiz1->questions as $question)
                                    <fieldset>
                                        <input type="hidden" name="question[{{ $question->id }}]" value="{{ $question->id }}">
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

                                                            @if($answer['correct']==1)
                                                            <div class="result-info-item">
                                                                 <span class="badge badge-success" style="font-size:15px" id="asw{{ $answer->id }}" name="question[{{ $question->id }}][answer]"> </span>
                                                                <label class="answer-label" for="asw{{ $answer->id }}">
                                                                    <span class="badge badge-success" style="font-size:22px">{{$loop->iteration .' . '. $answer->title }}</span><span style='font-size:22px;' &#9989;> &#9989;</span>
                                                                </label>
                                                            </div>
                                                            @elseif($answer['correct']==0)
                                                       
                                                            <div class="result-info-item">
                                                                 <span class="course" id="asw{{ $answer->id }}" name="question[{{ $question->id }}][answer]"  style="font-size:20px"> </span>
                                                                <label class="answer-label" for="asw{{ $answer->id }}">
                                                                    <span class="answer-title" style="font-size:22px">{{$loop->iteration .' . '. $answer->title }}</span>
                                                                </label>
                                                            </div>
                                                        @elseif(!empty($answer->image))
                                                            <div class="result-info-item">
                                                                <span class="course" id="asw{{ $answer->id }}" name="question[{{ $question->id }}][answer]"  style="font-size:20px"> </span>
                                                                <label for="asw{{ $answer->id }}">
                                                                    <div class="image-container">
                                                                        <img src="{{ $answer->image }}" class="fit-image" alt="">
                                                                    </div>
                                                                </label>
                                                            </div>
                                                           @endif 
                                                        @endif
                                                        @endforeach
                                                        @endif
            
@endforeach

</li>
</ul>
</div>
</div>

    <div id="resultReview" class="modal fade" role="dialog">
        <div class="modal-dialog zinun">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3>{{ trans('main.review_needs') }}</h3>
                </div>
                <div class="modal-body modst">
                    <form action="/user/quizzes/results/reviewed" method="post" id="resultReviewForm">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="result_id" class="js_result_id" value="">
                        <div class="items"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="reviewSubmit" class="btn btn-custom">{{ trans('main.save') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        "use strict";
        $('body').on('click', '.review-need', function (e) {
            e.preventDefault();
            var $loading = '<div class="text-center"><img src="/assets/default/images/loading.gif"/></div>';
            var result_id = $(this).attr('data-id');
            var modal = $('#resultReview');
            $('.js_result_id').val(result_id);

            modal.modal('show');
            modal.find('.modal-footer').addClass('hidden');
            modal.find('.modal-body #resultReviewForm .items').html($loading);

            var data = {
                _token: '{{ csrf_token() }}',
                result_id: result_id
            };

            $.post('/user/quizzes/results/get_descriptive', data, function (result) {
                if (result && result.data.length) {
                    var html = '';
                    for (var i = 0; i < result.data.length; i++) {
                        var item = result.data[i];
                        var value = '';
                        if (item.result_status !== 'waiting') {
                            value = item.result_grade;
                        }

                        html += '<div class="result-review">\n' +
                            '<h3>' + item.question + '</h3>\n';
                            if(item.answer !== '') {
                                html += '<div class="student-answer">\n' +
                                    item.answer +
                                    '</div>\n' +
                                    '<input type="text" name="review[' + item.question_id + '][grade]"  placeholder="import grade (Question grade: ' + item.question_grade + ')" value="' + value + '" class="grade-input form-control"/>\n' ;
                            } else {
                                html += '<div class="">(no answer)</div>\n' +
                                    '<input type="hidden" name="review[' + item.question_id + '][grade]" value="0" class="grade-input form-control"/>\n' ;
                            }

                        html += '</div>';
                    }

                    modal.find('.modal-body #resultReviewForm .items').html(html);
                    modal.find('.modal-footer').removeClass('hidden');
                } else {
                    modal.find('.modal-body #resultReviewForm .items').html('The user left the quiz and no result was saved');
                } 
            }).fail((err) => {
                modal.modal('show');
                modal.find('.modal-body #resultReviewForm .items').html('No item');
            })
        })

        $('body').on('click', '#reviewSubmit', function (e) {
            e.preventDefault();
            var form = $('#resultReviewForm');
            var submit = true;
            if (submit) {
                form.submit();
            }
        });
    </script>
@endsection


