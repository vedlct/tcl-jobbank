<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="jobModalTitle"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="jobModalBody">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="qa1">{{$jobqus->question1}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa1}}" readonly >
                </div>
                <div class="form-group col-md-6">
                    <label for="qa2">{{$jobqus->question2}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa2}}" readonly >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="qa3">{{$jobqus->question3}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa3}}" readonly >
                </div>
                <div class="form-group col-md-6">
                    <label for="qa4">{{$jobqus->question4}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa4}}" readonly >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="qa5">{{$jobqus->question5}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa5}}" readonly >
                </div>
                <div class="form-group col-md-6">
                    <label for="qa6">{{$jobqus->question6}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa6}}" readonly >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="qa7">{{$jobqus->question7}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa7}}" readonly >
                </div>
                <div class="form-group col-md-6">
                    <label for="qa8">{{$jobqus->question8}}</label>
                    <input type="text" value="{{$Jobapplyanswer->qa8}}" readonly >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="qa9">{{$jobqus->question9}}</label>
                    <textarea type="text" class="form-control" rows="5" readonly >{{$Jobapplyanswer->qa9}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="qa10">{{$jobqus->question10}}</label>
                    <textarea type="text" class="form-control" rows="5" readonly >{{$Jobapplyanswer->qa9}}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" style="background-color: red;color: white;" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
