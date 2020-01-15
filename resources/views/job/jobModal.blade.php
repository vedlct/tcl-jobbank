<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="jobModalTitle"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="{{route('candidate.ApplyJob',['jobId'=>$jobId])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body" id="jobModalBody">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="currentSalary">Current Salary</label>
                        <input type="number" class="form-control" id="currentSalary" placeholder="current salary" name="currentSalary">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="expectedSalary">Expected Salary</label>
                        <input type="number" class="form-control" placeholder="expected salary" id="expectedSalary" name="expectedSalary" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="resume">Resume</label>
                        <input type="file" id="resume" class="form-control-file" name="resume">
                    </div>
                </div>
                <hr>
                @if(count($questions)>0)
                    @foreach($questions as $key => $question)
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="qa">{{($key+1).': '.$question->question}}</label>
                                @if($question->type=='Short')
                                    <input type="text" id="qa" name="question[{{$question->sampleQuestionId}}]" placeholder="Write your answer here." required >
                                @elseif($question->type=='Long')
                                    <textarea type="text" class="form-control" name="question[{{$question->sampleQuestionId}}]" id="qa" placeholder="Write your answer here." rows="5" required ></textarea>
                                @elseif($question->type=='MCQ')
                                    <select class="form-control" name="question[{{$question->sampleQuestionId}}]" id="qa" required>
                                        <option value="">Select your answer</option>
                                        @php
                                            $anss = explode(",",$question->answer);
                                            if (count($anss)>0){
                                                foreach ($anss as $ans){
                                                    if (strpos($ans, '|C') !== false) {
                                                        $ansss = explode("|C",$ans);
                                                        echo "<option value=".$ansss[0].">".$ansss[0]."</option>";
                                                    }else{
                                                        echo "<option value=".$ans.">".$ans."</option>";
                                                    }
                                                }
                                            }
                                        @endphp
                                    </select>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit" style="background-color: forestgreen;color: white;" id="button-apply">Apply</button>
                <button type="button" class="btn btn-danger" style="background-color: red;color: white;" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
