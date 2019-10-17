<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="jobModalTitle"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="jobModalBody">
        @if(count($questions)>0)
            @foreach($questions as $key => $question)
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="qa">{{($key+1).': '.$question->question}}</label>
                        @php
                            if (!empty($Jobapplyanswer->answers)){
                                $answers = explode('&%TCL%&',$Jobapplyanswer->answers);
                                foreach ($answers as $answer){
                                    $breaks = explode('=>',$answer);
                                    if($breaks[0]==$question->sampleQuestionId){
                                        if($question->type=='Short' || $question->type=='MCQ'){
                                            echo '<input type="text" class="form-control" id="qa" value="'.$breaks[1].'" readonly >';
                                        }elseif($question->type=='Long'){
                                            echo '<textarea type="text" class="form-control" id="qa" rows="5" readonly >'.$breaks[1].'</textarea>';
                                        }
                                    }
                                }
                            }
                        @endphp
                    </div>
                </div>
            @endforeach
        @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" style="background-color: red;color: white;" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
