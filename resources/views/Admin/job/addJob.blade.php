@extends('main')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h4>Job Info Add</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('job.admin.insert')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title">Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }} " name="title" id="title" value="{{ old('title') }}" placeholder="job Title" >
                                @if ($errors->has('title'))
                                    <span class="">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="position">Position<span style="color: red">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}" id="position" name="position" value="{{ old('position') }}" placeholder="position" >
                                @if ($errors->has('position'))
                                    <span class="">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="salary">Salary<span style="color: red">*</span></label>
                                <input type="text" class="form-control {{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary" id="salary" value="{{ old('salary') }}" placeholder="salary" >
                                @if ($errors->has('salary'))
                                    <span class="">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jobStatus">job Status<span style="color: red">*</span></label>
                                <select class="form-control {{ $errors->has('jobStatus') ? ' is-invalid' : '' }}" id="jobStatus" name="jobStatus" >
                                    <option value="">select Job Status</option>
                                    <option @if(old('jobStatus')=='1')selected @endif value="1">Part Time</option>
                                    <option @if(old('jobStatus')=='2')selected @endif value="2">Full Time</option>
                                    <option @if(old('jobStatus')=='4')selected @endif value="4">Internship</option>
                                    <option @if(old('jobStatus')=='5')selected @endif value="5">Contractual</option>
                                    <option @if(old('jobStatus')=='6')selected @endif value="6">Remote Work</option>
                                    <option @if(old('jobStatus')=='3')selected @endif value="3">Other</option>
                                </select>

                                @if ($errors->has('jobStatus'))
                                    <span class="">
                                        <strong>{{ $errors->first('jobStatus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="deadline">Deadline<span style="color: red">*</span></label>
                                <input type="text" class="form-control date {{ $errors->has('deadline') ? ' is-invalid' : '' }}" name="deadline" id="deadline" value="{{ old('deadline') }}" >
                                @if ($errors->has('deadline'))
                                    <span class="">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="activestatus">Status<span style="color: red">*</span></label>
                                <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" id="activestatus" name="status" >
                                    <option value="">select Status</option>
                                    @foreach(JOB_STATUS as $key=>$value)
                                        <option @if(old('status')== $value ) selected @endif value="{{$value}}">{{$key}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('status'))
                                    <span class="">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="zone">Zone<span style="color: red">*</span></label>
                                <select class="form-control {{ $errors->has('zone') ? ' is-invalid' : '' }}" id="zone" name="zone" >
                                    <option value="">select zone</option>
                                    @foreach($allZone as $zone)
                                    <option  value="{{$zone->zoneId}}">{{$zone->zoneName}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('zone'))
                                    <span class="">
                                        <strong>{{ $errors->first('zone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>pdf</label>
                                <input type="file" name="jobPdf" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="jobDetails">Job Details</label>
                                <textarea class="form-control ckeditor {{ $errors->has('jobDetails') ? ' is-invalid' : '' }}" rows="5" id="jobDetails" name="jobDetails" > {{ old('jobDetails') }}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row" id="questionType">
                            <div class="form-group col-md-6 offset-3">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="question">Question Type<span style="color: red">*</span></label>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="radio-inline">
                                            <input type="radio" name="questionType" value="SET" id="questionTypeSet" class="form-control {{ $errors->has('questionType') ? ' is-invalid' : '' }}">Set
                                        </label>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="radio-inline">
                                            <input type="radio" name="questionType" value="CUSTOM"  id="questionTypeCustom" class="form-control {{ $errors->has('questionType') ? ' is-invalid' : '' }}">Custom
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="questionSet" style="display: none">
                            <div class="form-group col-md-6 offset-3" id="jobQuestion">
                                <label for="question">Question Set<span style="color: red">*</span></label>
                                <select class="form-control" id="questionSetSelect" name="questionset" >
                                    <option value="">Select</option>
                                    @foreach($questionSet as $set)
                                        <option value="{{$set->questionSetId}}">{{$set->setName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row" id="questionCustom" style="display: none">
                            <div class="form-group col-md-6 offset-3" id="jobQuestion">
                                <label for="questionCustomSelect">Question Custom<span style="color: red">*</span></label><br>
                                <label style="color:green;text-size:20px">Press ctrl to select multiple</label>
                                <select class="form-control" id="questionCustomSelect" name="questionCustom[]" multiple style="height: 300px">
                                    <option value="">Select</option>
                                    @foreach($questions as $question)
                                        <option value="{{$question->sampleQuestionId}}">{{$question->question}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot-js')
    <script type="text/javascript" src="{{url('public/assets/ckeditor/ckeditor.js')}}"></script>
    <script>

        $("#questionTypeSet").click(function(){
            $("#questionCustom").css('display','none');
            $('#questionCustomSelect').prop('disabled', true);
            $('#questionSetSelect').prop('disabled', false);
            $("#questionSet").css('display','block');
        });

        $("#questionTypeCustom").click(function(){
            $("#questionSet").css('display','none');
            $('#questionSetSelect').prop('disabled', true);
            $('#questionCustomSelect').prop('disabled', false);
            $("#questionCustom").css('display','block');
        });

        $(function () {
            $('.date').datepicker({
                format: 'yyyy-m-d',
                todayHighlight: true,
                startDate: new Date(),
                autoclose: true,
            });
        });

    </script>
@endsection
