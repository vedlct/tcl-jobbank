<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="jobModalTitle"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="{{route('candidate.ApplyJob',['jobId'=>$jobId])}}">
            {{csrf_field()}}
            <div class="modal-body" id="jobModalBody">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="currentSalary">Current Salary</label>
                        <input type="number" id="currentSalary" placeholder="current salary" name="currentSalary">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="expectedSalary">Expected Salary</label>
                        <input type="number" placeholder="expected salary" id="expectedSalary" name="expectedSalary" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="qa1">{{$jobqus->question1}}</label>
                        <input type="text" name="qa1" id="qa1" placeholder="Write your answer here." required >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="qa2">{{$jobqus->question2}}</label>
                        <input type="text" name="qa2" id="qa2" placeholder="Write your answer here." required >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="qa3">{{$jobqus->question3}}</label>
                        <input type="text" name="qa3" id="qa3" placeholder="Write your answer here." required >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="qa4">{{$jobqus->question4}}</label>
                        <input type="text" name="qa4" id="qa4" placeholder="Write your answer here." required >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="qa5">{{$jobqus->question5}}</label>
                        <select class="form-control" name="qa5" id="qa5">
                            <option value="">Select your answer</option>
                            @php
                            $anss5 = explode(",",$jobqus->question5Answer);
                            if (count($anss5)>0){
                                foreach ($anss5 as $ans5){
                                    echo "<option value=".$ans5.">".$ans5."</option>";
                                }
                            }
                            @endphp
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="qa6">{{$jobqus->question6}}</label>
                        <select class="form-control" name="qa6" id="qa6">
                            <option value="">Select your answer</option>
                            @php
                                $anss6 = explode(",",$jobqus->question6Answer);
                                if (count($anss6)>0){
                                    foreach ($anss6 as $ans6){
                                        echo "<option value=".$ans6.">".$ans6."</option>";
                                    }
                                }
                            @endphp
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="qa7">{{$jobqus->question7}}</label>
                        <select class="form-control" name="qa7" id="qa7">
                            <option value="">Select your answer</option>
                            @php
                                $anss7 = explode(",",$jobqus->question7Answer);
                                if (count($anss7)>0){
                                    foreach ($anss7 as $ans7){
                                        echo "<option value=".$ans7.">".$ans7."</option>";
                                    }
                                }
                            @endphp
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="qa8">{{$jobqus->question8}}</label>
                        <select class="form-control" name="qa8" id="qa8">
                            <option value="">Select your answer</option>
                            @php
                                $anss8 = explode(",",$jobqus->question8Answer);
                                if (count($anss8)>0){
                                    foreach ($anss8 as $ans8){
                                        echo "<option value=".$ans8.">".$ans8."</option>";
                                    }
                                }
                            @endphp
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="qa9">{{$jobqus->question9}}</label>
                        <textarea type="text" class="form-control" name="qa9" id="qa9" placeholder="Write your answer here." rows="5" required ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="qa10">{{$jobqus->question10}}</label>
                        <textarea type="text" class="form-control" name="qa10" id="qa10" placeholder="Write your answer here." rows="5" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit" style="background-color: forestgreen;color: white;" onclick="btnhide()" id="button-apply">Apply</button>
                <button type="button" class="btn btn-danger" style="background-color: red;color: white;" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

{{--<script>--}}
{{--    function btnhide() {--}}
{{--        $("#button-apply").hide();--}}
{{--    }--}}
{{--</script>--}}
