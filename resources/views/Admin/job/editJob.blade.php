@extends('main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h4>Job Info Edit</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{route('job.admin.update')}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <input type="hidden" required id="jobId" name="jobId" value="{{$info->jobId}}">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" value="{{$info->title}}" placeholder="job Title" required>
                            @if ($errors->has('title'))
                                <span class="">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Position<span style="color: red">*</span></label>
                            <input type="text" class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}" id="position" name="position" value="{{$info->position}}" placeholder="position" required>
                            @if ($errors->has('position'))
                                <span class="">
                                    <strong>{{ $errors->first('position') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Salary<span style="color: red">*</span></label>
                            <input type="text" class="form-control {{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary" id="salary" value="{{$info->salary}}" placeholder="salary" required>
                            @if ($errors->has('salary'))
                                <span class="">
                                    <strong>{{ $errors->first('salary') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jobStatus">job Status<span style="color: red">*</span></label>
                            <select class="form-control {{ $errors->has('jobStatus') ? ' is-invalid' : '' }}" id="jobStatus" name="jobStatus" required >
                                <option value="">select Job Status</option>
                                <option @if($info->jobstatus =='1')selected @endif value="1">Part Time</option>
                                <option @if($info->jobstatus =='2')selected @endif value="2">Full Time</option>
                                <option @if($info->jobstatus =='4')selected @endif value="4">Internship</option>
                                <option @if($info->jobstatus =='5')selected @endif value="5">Contractual</option>
                                <option @if($info->jobstatus =='6')selected @endif value="6">Remote Work</option>
                                <option @if($info->jobstatus =='3')selected @endif value="3">Other</option>
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
                            <label for="">Deadline<span style="color: red">*</span></label>
                            <input type="text" class="form-control date {{ $errors->has('deadline') ? ' is-invalid' : '' }}" name="deadline" id="deadline" value="{{$info->deadline}}" required>
                            @if ($errors->has('deadline'))
                                <span class="">
                                    <strong>{{ $errors->first('deadline') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jobStatus">Status<span style="color: red">*</span></label>
                            <select required class="form-control" id="activestatus" name="status" >
                                <option value="">select Status</option>
                                @foreach(JOB_STATUS as $key=>$value)
                                    <option @if($info->status == $value ) selected @endif value="{{$value}}">{{$key}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                      <div class="row">

                        <div class="form-group col-md-6">
                            <label for="jobStatus">Zone<span style="color: red">*</span></label>
                            <select class="form-control" id="zone" name="zone" required>
                                <option value="">select zone</option>
                                @foreach($allZone as $zone)
                                <option @if($zone->zoneId == $info->fkzoneId ) selected @endif value="{{$zone->zoneId}}">{{$zone->zoneName}}</option>
                                @endforeach
                            </select>

                        </div>
                          <div class="form-group col-md-6">
                              <label for="">pdf</label>
                              <input type="file" name="jobPdf" accept="application/pdf">
                              @if(!empty($info->pdflink))
                              <a target="_blank" href="{{$info->pdflink}}"></a>
                               @endif
                          </div>

                    </div>

                      <div class="row">
                          <div class="form-group col-md-12">
                              <label for="jobDetails">Job Details</label>
                              <textarea class="form-control ckeditor {{ $errors->has('jobDetails') ? ' is-invalid' : '' }}" rows="5" id="jobDetails" name="jobDetails" required> {{ old('jobDetails',$info->details) }}</textarea>
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
                                          <input type="radio" name="questionType" value="SET" id="questionTypeSet" class="form-control {{ $errors->has('questionType') ? ' is-invalid' : '' }}" @if($info->questionType=='SET') checked @endif >Set
                                      </label>
                                  </div>
                                  <div class="col-sm-5">
                                      <label class="radio-inline">
                                          <input type="radio" name="questionType" value="CUSTOM"  id="questionTypeCustom" class="form-control {{ $errors->has('questionType') ? ' is-invalid' : '' }}" @if($info->questionType=='CUSTOM') checked @endif>Custom
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row" id="questionSet" @if($info->questionType=='CUSTOM') style="display: none" @endif >
                          <div class="form-group col-md-6 offset-3" id="jobQuestion">
                              <label for="question">Question Set<span style="color: red">*</span></label>
                              <select class="form-control" id="questionSetSelect" name="questionset" >
                                  <option value="">Select</option>
                                  @foreach($questionSet as $set)
                                      <option value="{{$set->questionSetId}}" @if($info->setNumber==$set->questionSetId) selected @endif >{{$set->setName}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

                      <div class="row" id="questionCustom" @if($info->questionType=='SET') style="display: none" @endif>
                          <div class="form-group col-md-6 offset-3" id="jobQuestion">
                              <label for="question">Question Custom<span style="color: red">*</span></label>
                              <select class="form-control" id="questionCustomSelect" name="questionCustom[]" multiple style="height: 300px">
                                  <option value="">Select</option>
                                  @php
                                      if (!empty($info->customQuestion)){
                                        $customQuestions = explode(",",$info->customQuestion);
                                      }else{
                                        $customQuestions='';
                                      }
                                  @endphp
                                  @if(!empty($customQuestions))
                                      @foreach($customQuestions as $customQuestion)
                                          @foreach($questions as $question)
                                              <option value="{{$question->sampleQuestionId}}" @if($question->sampleQuestionId==$customQuestion) selected @endif >{{$question->question}}</option>
                                          @endforeach
                                      @endforeach
                                  @else
                                      @foreach($questions as $question)
                                          <option value="{{$question->sampleQuestionId}}">{{$question->question}}</option>
                                      @endforeach
                                  @endif
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-success"> Submit</button>
                    </div>

                  </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

@endsection
@section('foot-js')
    <script type="text/javascript" src="{{url('public/assets/ckeditor/ckeditor.js')}}"></script>
    <script>
        $("#questionTypeSet").click(function () {
            $("#questionCustom").css('display', 'none');
            $('#questionCustomSelect').prop('disabled', true);
            $('#questionSetSelect').prop('disabled', false);
            $("#questionSet").css('display', 'block');
        });

        $("#questionTypeCustom").click(function () {
            $("#questionSet").css('display', 'none');
            $('#questionSetSelect').prop('disabled', true);
            $('#questionCustomSelect').prop('disabled', false);
            $("#questionCustom").css('display', 'block');
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
