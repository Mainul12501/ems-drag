<style>
    /* This css is for normalizing styles. You can skip this. */
    *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }




    .new {
        padding: 5px;
    }

    .form-group1 {
        display: block;
        margin-bottom: 15px;
    }

    .form-group1 input {
        padding: 0;
        height: initial;
        width: initial;
        margin-bottom: 0;
        display: none;
        cursor: pointer;
    }

    .form-group1 label {
        position: relative;
        cursor: pointer;
    }

    .form-group1 label:before {
        content:'';
        -webkit-appearance: none;
        background-color: transparent;
        border: 2px solid #0079bf;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 5px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        margin-right: 5px;
    }

    .form-group1 input:checked + label:after {
        content: '';
        display: block;
        position: absolute;
        top: 5px;
        left: 5px;
        width: 4px;
        height: 10px;
        border: solid #0079bf;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    .column {
        float: left;
        width: 33.33%;
        padding: 8px;
        height: 300px; /* Should be removed. Only for demonstration */
    }
</style>

<form id="dragAnswer" action="@if (!empty($question_edit)) /user/questions/{{ $question_edit->id }}/update @else /user/quizzes/{{ $quiz->id }}/questions @endif" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="type" value="drag">
    <input type="hidden" name="is_drag_drop" value="1">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group @error('title') has-error @enderror">
                <label class="control-label tab-con">Question</label>
            <!-- <input type="text" name="title" value="{{ !empty($question_edit) ? $question_edit->title : '' }}" placeholder="Please write the Explanation" class="form-control" style="overflow:auto;"> -->
            <!-- <textarea name="title" value="{{ !empty($question_edit) ? $question_edit->title : '' }}" placeholder="Please write the Question" class="form-control"></textarea> -->
                <textarea class="form-control" name="title">{{ $question_edit['title'] ?? '' }}</textarea>
                <div class="help-block">@error('title') {{ $message }} @enderror</div>
            </div>
        </div>
        <!-- image upload  -->
        <div class="col-md-12 pull-left">
            <div class="form-group">
                <label class="control-label">{{ trans('main.images') }}</label>
                <div class="dflx">
                    <button type="button" data-input="question_image" data-preview="holder" class="lfm-btn btn btn-primary">
                        Choose
                    </button>
                    <input name="image" value="{{ !empty($question_edit) ? $question_edit->image : '' }}" id="question_image" class="form-control lfm-input" dir="ltr" type="text"  placeholder="Upload image" class="form-control">
                </div>
            </div>
        </div>
        <!-- select category  -->

        <div class="col-md-12">
            <div class="form-group @error('category') has-error @enderror">

                <div class="form-group1">
                    <div class="row">
                        <div class="column">
                            <div class="new">

                                <span><h4>Domain</h4></span>
                                <!-- <div class="form-group1"> -->

                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        {{--                                                    {{ $key.'='.$category.'-'.$index }}--}}
                                        @if($category === 'people')
                                            <input type="checkbox" id="people" name="category[]" {{ $category == 'people' ? 'checked' : '' }}  value="people">
                                        @else
                                            @if((!in_array('people', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="people" name="category[]" value="people">
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="people" name="category[]" value="people">
                                @endif
                                <label for="people">People</label>
                                <!-- </div> -->
                                <!-- <div class="form-group1"> -->
                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        @if($category == 'process')
                                            <input type="checkbox" id="process" name="category[]" {{ $category == 'process' ? 'checked' : '' }}  value="process">
                                        @else
                                            @if((!in_array('process', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="process" name="category[]" value="process">
                                            @endif

                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="process" name="category[]" value="process">
                                @endif
                                <label for="process">Process</label>
                                <!-- </div> -->
                                <!-- <div class="form-group1"> -->
                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        @if($category == 'enviornment')
                                            <input type="checkbox" id="enviornment" name="category[]" {{ $category == 'enviornment' ? 'checked' : '' }}  value="enviornment">
                                        @else
                                            @if((!in_array('enviornment', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="environment" name="category[]" value="enviornment">
                                            @endif

                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="environment" name="category[]" value="enviornment">
                                @endif

                                <label for="environment">Environment</label>

                                <span><h4>PmTabata</h4></span>
                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        @if($category == 'pmtabata')
                                            <input type="checkbox" id="pmtabata" name="category[]" {{ $category == 'pmtabata' ? 'checked' : '' }}  value="pmtabata">
                                        @else
                                            @if((!in_array('pmtabata', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="pmtabata" name="category[]" value="pmtabata">
                                            @endif

                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="pmtabata" name="category[]" value="pmtabata">
                                @endif

                                <label for="pmtabata">PmTabata</label>

                                <span><h4>Question Category</h4></span>
                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        @if($category == 'easy')
                                            <input type="checkbox" id="easy" name="category[]" {{ $category == 'easy' ? 'checked' : '' }}  value="easy">
                                        @else
                                            @if((!in_array('easy', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="easy" name="category[]" value="easy">
                                            @endif

                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="easy" name="category[]" value="easy">
                                @endif

                                <label for="easy">Practice</label>


                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        @if($category == 'hard')
                                            <input type="checkbox" id="hard" name="category[]" {{ $category == 'hard' ? 'checked' : '' }}  value="hard">
                                        @else
                                            @if((!in_array('hard', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="hard" name="category[]" value="hard">
                                            @endif

                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="hard" name="category[]" value="hard">
                                @endif

                                <label for="hard">Simulated</label>

                                @if(!empty($catArray))
                                    @foreach($catArray as $key=>$category)
                                        @if($category == 'both')
                                            <input type="checkbox" id="both" name="category[]" {{ $category == 'both' ? 'checked' : '' }}  value="both">
                                        @else
                                            @if((!in_array('both', $catArray))&& ($key === $index))
                                                <input type="checkbox" id="both" name="category[]" value="both">
                                            @endif

                                        @endif
                                    @endforeach
                                @else
                                    <input type="checkbox" id="both" name="category[]" value="both">
                                @endif

                                <label for="both">Both</label>

                                <!-- <input type="checkbox" id="Both" name="category[]" value="both">
                               <label for="both">Both</label> -->
                                <!-- </div> -->

                            </div>
                        </div>
                        <div class="column">
                            <span><h4>Methodology</h4></span>
                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'predictive')
                                        <input type="checkbox" id="predictive" name="category[]" {{ $category == 'predictive' ? 'checked' : '' }}  value="predictive">
                                    @else
                                        @if((!in_array('predictive', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="predictive" name="category[]" value="predictive">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="predictive" name="category[]" value="predictive">
                            @endif

                            <label for="predictive">Predictive</label>

                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'agile')
                                        <input type="checkbox" id="agile" name="category[]" {{ $category == 'agile' ? 'checked' : '' }}  value="agile">
                                    @else
                                        @if((!in_array('agile', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="agile" name="category[]" value="agile">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="agile" name="category[]" value="agile">
                            @endif

                            <label for="agile">Agile</label>

                        </div>

                        <div class="column">
                            <span><h4>Eco 2021</h4></span>
                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'creating a high performance team')
                                        <input type="checkbox" id="High" name="category[]" {{ $category == 'creating a high performance team' ? 'checked' : '' }}  value="creating a high performance team">
                                    @else
                                        @if((!in_array('creating a high performance team', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="High" name="category[]" value="creating a high performance team">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="High" name="category[]" value="creating a high performance team">
                            @endif

                            <label for="High">Creating a high performance team</label>

                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'Starting The Project')
                                        <input type="checkbox" id="Project" name="category[]" {{ $category == 'Starting The Project' ? 'checked' : '' }}  value="Starting The Project">
                                    @else
                                        @if((!in_array('Starting The Project', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="Project" name="category[]" value="Starting The Project">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="Project" name="category[]" value="Starting The Project">
                            @endif

                            <label for="Project">Starting The Project</label>
                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'Doing The Work')
                                        <input type="checkbox" id="Work" name="category[]" {{ $category == 'Doing The Work' ? 'checked' : '' }}  value="Doing The Work">
                                    @else
                                        @if((!in_array('Doing The Work', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="Work" name="category[]" value="Doing The Work">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="Work" name="category[]" value="Doing The Work">
                            @endif

                            <label for="Work">Doing The Work</label>
                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'Keeping The Team On Track')
                                        <input type="checkbox" id="Track" name="category[]" {{ $category == 'Keeping The Team On Track' ? 'checked' : '' }}  value="Keeping The Team On Track">
                                    @else
                                        @if((!in_array('Keeping The Team On Track', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="Track" name="category[]" value="Keeping The Team On Track">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="Track" name="category[]" value="Keeping The Team On Track">
                            @endif

                            <label for="Track">Keeping The Team On Track</label>
                            @if(!empty($catArray))
                                @foreach($catArray as $key=>$category)
                                    @if($category == 'Keeping The Business In Mind')
                                        <input type="checkbox" id="Mind" name="category[]" {{ $category == 'Keeping The Business In Mind' ? 'checked' : '' }}  value="Keeping The Business In Mind">
                                    @else
                                        @if((!in_array('Keeping The Business In Mind', $catArray))&& ($key === $index))
                                            <input type="checkbox" id="Mind" name="category[]" value="Keeping The Business In Mind">
                                        @endif

                                    @endif
                                @endforeach
                            @else
                                <input type="checkbox" id="Mind" name="category[]" value="Keeping The Business In Mind">
                            @endif

                            <label for="Mind">Keeping The Business In Mind</label>
                        </div>


                    </div>


                    <div class="help-block">@error('title') {{ $message }} @enderror</div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group @error('description') has-error @enderror">
                        <label class="control-label tab-con">Explanation</label>
                    <!-- <input type="text" name="description" value="{{ !empty($question_edit) ? $question_edit->description : '' }}" placeholder="Please write the Explanation" class="form-control"> -->
                        <textarea class="form-control" name="description">{{ $question_edit['description'] ?? '' }}</textarea>
                        <div class="help-block">@error('description') {{ $message }} @enderror</div>
                    </div>
                </div>




            <!-- <div class="col-md-12">
            <div class="form-group @error('grade') has-error @enderror">
                <label class="control-label tab-con">{{ trans('main.question_grade') }}</label>
                <input type="hidden" class="form-control" value="1" name="grade">
                <input type="number" name="grade" value="{{ !empty($question_edit) ? $question_edit->grade : '' }}"  placeholder="{{ trans('main.question_grade') }}" class="form-control">
                <div class="help-block">@error('grade') {{ $message }} @enderror</div>
            </div>
        </div> -->
                <div class="col-md-12">
                    <div class="form-group @error('grade') has-error @enderror">
                        <label class="control-label tab-con">{{ trans('main.question_grade') }}</label>
                        <input type="number" name="grade" placeholder="{{ trans('main.question_grade') }}" value="{{ !empty($question_edit) ? $question_edit->grade : 1 }}" class="form-control">
                        <div class="help-block">@error('grade') {{ $message }} @enderror</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12" id="stopPre">
            <div class="ansalrt">
                <p>{{ trans('main.answer_alert') }}</p>
                <button type="button" class="btn add-btnd btn-info marl-16"><i class="mdi mdi-plus"></i></button>
            </div>

{{--            answers div--}}
            <div class="{{ (empty($answer) or (!empty($loop) and $loop->iteration == 1)) ? 'main-row-answers' : '' }} answer-box ans-b">
                <div class="col-md-12 answer-card" id="">
                    <div class="form-group">
                        <label class="control-label tab-con">{{ trans('main.answer') }}</label>
                        <button type="button" class="mrb12 btn btn-xs remove-btn btn-danger pull-right {{ !empty($answer) ? 'show' : '' }}"><i class="mdi mdi-close"></i></button>

{{--                        <input type="text" name="answers[{{ (empty($answer) or (!empty($loop) and $loop->iteration == 1)) ? 'record' : $answer->id }}][title]" value="{{ !empty($answer) ? $answer->title : '' }}" placeholder="{{ trans('main.add_answer') }}" class="form-control">--}}
                        <input type="text" name="answers[{{ (empty($answer) or (!empty($loop) and $loop->iteration == 1)) ? 'record' : $answer->id }}][title]" value="{{ !empty($answer) ? $answer->title : '' }}" placeholder="category name" class="form-control">
                        <input type="text" name="options_name[]" class="form-control" style="margin-top: 5px;" placeholder="write options separated by comma(,)" >
                        <div class="help-block"></div>
                    </div>

                </div>

            </div>



        </div>
    </div>
</form>


