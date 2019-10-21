@if(count($questions)>0)
    @foreach($questions as $key => $question)
        @if($question->type=='MCQ')
            <div class=" form-group">
                <label for="qa">{{($key+1).': '.$question->question}}</label>
                <select class="form-control" name="question[{{$question->sampleQuestionId}}]" id="{{$question->sampleQuestionId}}">
                    <option value="">Select your answer</option>
                    @php
                        $anss = explode(",",$question->answer);
                        if (count($anss)>0){
                            foreach ($anss as $ans){
                                echo "<option value=".$ans.">".$ans."</option>";
                            }
                        }
                    @endphp
                </select>
            </div>
        @endif
    @endforeach
@endif
