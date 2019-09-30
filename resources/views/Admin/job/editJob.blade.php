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
                                <option @if($info->jobstatus =='1') selected @endif value="1">Part Time</option>
                                <option @if($info->jobstatus =='2') selected @endif value="2">Full Time</option>
                                <option @if($info->jobstatus =='3') selected @endif value="3">Other</option>
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
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="question1">Question 1<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question1') ? ' is-invalid' : '' }}" id="question1" name="question1" value="{{ old('question1',$info->question1) }}" placeholder="Enter Question">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="question2">Question 2<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question2') ? ' is-invalid' : '' }}" id="question2" name="question2" value="{{ old('question2',$info->question2) }}" placeholder="Enter Question">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="question3">Question 3<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question3') ? ' is-invalid' : '' }}" id="question3" name="question3" value="{{ old('question3',$info->question3) }}" placeholder="Enter Question">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="question4">Question 4<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question4') ? ' is-invalid' : '' }}" id="question4" name="question4" value="{{ old('question4',$info->question4) }}" placeholder="Enter Question">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="question5">Question 5<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question5') ? ' is-invalid' : '' }}" id="question5" name="question5" value="{{ old('question5',$info->question5) }}" placeholder="Enter Question"><br>
                              <input type="text" class="form-control {{ $errors->has('answer5') ? ' is-invalid' : '' }}" name="answer5" value="{{ old('answer5',$info->question5Answer) }}" placeholder="Enter answers in comma separated form">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="question6">Question 6<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question6') ? ' is-invalid' : '' }}" id="question6" name="question6" value="{{ old('question6',$info->question6) }}" placeholder="Enter Question"><br>
                              <input type="text" class="form-control {{ $errors->has('answer6') ? ' is-invalid' : '' }}" name="answer6" value="{{ old('answer6',$info->question6Answer) }}" placeholder="Enter answers in comma separated form">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="question7">Question 7<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question7') ? ' is-invalid' : '' }}" id="question7" name="question7" value="{{ old('question7',$info->question7) }}" placeholder="Enter Question"><br>
                              <input type="text" class="form-control {{ $errors->has('answer7') ? ' is-invalid' : '' }}" name="answer7" value="{{ old('answer7',$info->question7Answer) }}" placeholder="Enter answers in comma separated form">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="question8">Question 8<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question8') ? ' is-invalid' : '' }}" id="question8" name="question8" value="{{ old('question8',$info->question8) }}" placeholder="Enter Question"><br>
                              <input type="text" class="form-control {{ $errors->has('answer8') ? ' is-invalid' : '' }}" name="answer8" value="{{ old('answer8',$info->question8Answer) }}" placeholder="Enter answers in comma separated form">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="question9">Question 9<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question9') ? ' is-invalid' : '' }}" id="question9" name="question9" value="{{ old('question9',$info->question9) }}" placeholder="Enter Question">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="question10">Question 10<span style="color: red">*</span></label>
                              <input type="text" class="form-control {{ $errors->has('question10') ? ' is-invalid' : '' }}" id="question10" name="question10" value="{{ old('question10',$info->question10) }}" placeholder="Enter Question">
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
