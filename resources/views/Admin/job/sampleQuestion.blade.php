@extends('main')
@section('content')
    <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="questionForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="alert alert-success print-success-msg" style="display:none">
                            <label id="success-msg"></label>
                        </div>

                        <input type="hidden" id="modalQuestionId" name="questionId">
                        <div class=" form-group">
                            <label>Type</label>
                            <select name="modalQuestionType" id="modalQuestionType" class="form-control">
                                <option value="" selected>Select a Type</option>
                                <option value="Short">Short</option>
                                <option value="Long">Long</option>
                                <option value="MCQ">MCQ</option>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label>Question</label>
                            <input type="text" class="form-control" id="modalQuestion" name="modalQuestion">
                        </div>
                        <div class="form-group" id="modalQuestionAnswer">
                            <label>Answer</label>
                            <input type="text" class="form-control" name="modalQuestionAnswer" id="modalQuestionAnswerField">
                            <small>If more than one then put it in comma separated from and add <span style="font-size: 25px;color: #77ee77;">|C</span> after correct answer</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newSetModal" tabindex="-1" role="dialog" aria-labelledby="newSetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="questionSetForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Question Set</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger print-set-error-msg" style="display:none">
                            <ul></ul>
                        </div>

                        <div class=" form-group">
                            <label>Set Name</label>
                            <input type="text" class="form-control" id="setName" name="setName">
                        </div>

                        <div class=" form-group">
                            <label>Questions</label>
                            <br><label style="color:green">Press ctrl to select multiple</label>
                            <select name="modalQuestions" id="modalQuestions" class="form-control" multiple style="height: 300px">
                                <option value="">Select</option>
                                @foreach($questions as $question)
                                    <option value="{{$question->sampleQuestionId}}" >{{$question->question}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary set-submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editSetModal" tabindex="-1" role="dialog" aria-labelledby="editSetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="questionSetEditForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Question Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger print-set-edit-error-msg" style="display:none">
                            <ul></ul>
                        </div>

                        <div class=" form-group">
                            <label>Set Name</label>
                            <select name="setName" id="questionSetEdit" class="form-control">
                                <option value="" selected>Select a Set</option>
                                @foreach($questionsSet as $qset)
                                    <option value="{{$qset->questionSetId}}" >{{$qset->setName}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class=" form-group">
                            <label>Questions</label>
                            <br><label style="color:green">Press ctrl to select multiple</label>
                            <select name="modalQuestions" id="modalQuestionsEdit" class="form-control" multiple style="height: 300px">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary set-edit-submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div style="background-color: white;margin-bottom: 20px;" class="card-body">
                <div class=" form-group">
                    <label>Question Type</label>
                    <select name="questionType" id="questionType" class="form-control">
                        <option value="" selected>Select a Type</option>
                        <option value="Short">Short</option>
                        <option value="Long">Long</option>
                        <option value="MCQ">MCQ</option>
                    </select>
                </div>
                <div class=" form-group">
                    <label>Question Set</label>
                    <select name="questionSet" id="questionSet" class="form-control">
                        <option value="" selected>Select a Set</option>
                        @foreach($questionsSet as $qset)
                        <option value="{{$qset->questionSetId}}" >{{$qset->setName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <div class="card m-b-30">
                <div class="card-header">
                    <h4 class="pull-left">Manage All Question</h4>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#questionModal" id="questionAdd">
                        Add Question
                    </button>
                    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#editSetModal" id="setEdit">
                        Edit Set
                    </button>
                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#newSetModal" id="newSetAdd">
                        New Set
                    </button>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table id="sampleQuestion" class="table table-striped table-bordered"></table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('foot-js')

    <script src="{{url('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#modalQuestionAnswer').hide();
            table = $('#sampleQuestion').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                "ajax":{
                    "url": "{!! route('job.sample.question.get')!!}",
                    "type": "POST",
                    data:function (d)
                    {
                        d._token="{{csrf_token()}}";
                        if ($('#questionType').val()!==""){
                            d.questionType=$('#questionType').val();
                        }
                        if ($('#questionSet').val()!==""){
                            d.questionSet=$('#questionSet').val();
                        }
                    },
                },
                columns: [
                    { title: 'Serial', data: 'sampleQuestionId', name: 'sampleQuestionId',"orderable": false, "searchable":true },
                    { title: 'Type', data: 'type', name: 'type', "orderable": true, "searchable":true },
                    { title: 'Question', data: 'question', name: 'question', "orderable": false, "searchable":true },
                    { title: 'Answer', data: 'answer', name: 'answer', "orderable": false, "searchable":true },
                    { title: 'Action', "data": function(data){
                        return '<a sampleQuestionId="' + data.sampleQuestionId + '" onclick="questionEdit(this)"  class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>&nbsp;' +
                                '<a sampleQuestionId="' + data.sampleQuestionId + '" onclick="questionDelete(this)" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>&nbsp;'
                        },
                        "orderable": false, "searchable":false
                    }
                ]
            });
        } );

        $('#questionAdd').click(function()
        {
            $(".print-success-msg").css('display','none');
            $('#modalQuestionId').val('');
            $("#questionForm").trigger("reset");
            $('#modalQuestionAnswer').hide();
            $('#modalQuestionAnswerField').removeAttr('required');
            $('#modalQuestionAnswerField').prop('disabled', true);
        });

        $('#modalQuestionType').change(function()
        {
            if ($('#modalQuestionType').val()==="MCQ"){
                $('#modalQuestionAnswer').show();
                $('#modalQuestionAnswerField').prop('required',true);
                $('#modalQuestionAnswerField').prop('disabled', false);
            }else {
                $('#modalQuestionAnswer').hide();
                $('#modalQuestionAnswerField').removeAttr('required');
                $('#modalQuestionAnswerField').prop('disabled', true);
            }
        });

        $(".btn-submit").click(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '{{route('job.sample.question.submit')}}',
                data: {'_token':"{{csrf_token()}}", questionId:$("#modalQuestionId").val(), modalQuestionType:$("#modalQuestionType").val(), modalQuestionAnswer:$("#modalQuestionAnswerField").val(), modalQuestion:$("#modalQuestion").val()},
                success: function( data ) {
                    if($.isEmptyObject(data.error)){
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").css('display','block');
                        $('#success-msg').html(data.success);
                        $("#questionForm").trigger("reset");
                        table.ajax.reload();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });

        $(".set-submit").click(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '{{route('job.sample.question.set.submit')}}',
                data: {'_token':"{{csrf_token()}}", setName:$("#setName").val(), modalQuestions:$("#modalQuestions").val()},
                success: function( data ) {
                    if($.isEmptyObject(data.error)){
                        $(".print-set-error-msg").css('display','none');
                        $("#questionSetForm").trigger("reset");
                        location.reload();
                    }else{
                        printSetErrorMsg(data.error);
                    }
                }
            });
        });

        $(".set-edit-submit").click(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '{{route('job.sample.question.set.submit')}}',
                data: {'_token':"{{csrf_token()}}", setName:$("#questionSetEdit").val(),setId:$("#questionSetEdit").val(), modalQuestions:$("#modalQuestionsEdit").val()},
                success: function( data ) {
                    if($.isEmptyObject(data.error)){
                        $(".print-set-edit-error-msg").css('display','none');
                        $("#questionSetEditForm").trigger("reset");
                        $('#editSetModal').modal('toggle');
                        table.ajax.reload();
                    }else{
                        printSetEditErrorMsg(data.error);
                    }
                }
            });
        });

        function printSetEditErrorMsg (msg) {
            $(".print-set-edit-error-msg").find("ul").html('');
            $(".print-set-edit-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-set-edit-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

        function printSetErrorMsg (msg) {
            $(".print-set-error-msg").find("ul").html('');
            $(".print-set-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-set-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

        $('#questionType').change(function()
        {
            if ($('#questionType').val()!==""){
                $('#questionType').css("background-color", "#7c9").css('color', 'white');
            }else {
                $('#questionType').css("background-color", "#FFF").css('color', 'black');
            }
            table.ajax.reload();
        });

        $('#questionSetEdit').change(function()
        {
            if ($('#questionSetEdit').val()!==""){
                $('#questionSetEdit').css("background-color", "#7c9").css('color', 'white');
                $.ajax({
                    type: "POST",
                    url: '{{route('job.set.questions')}}',
                    data: {'id':$('#questionSetEdit').val(),'_token':"{{csrf_token()}}"},
                    success: function (data) {
                        $('#modalQuestionsEdit').html('');
                        $.each(data, function(key, value) {
                            $('#modalQuestionsEdit').append($("<option></option>").attr("value",value.sampleQuestionId).text(value.question));
                        });
                    }
                });
            }else {
                $('#questionSetEdit').css("background-color", "#FFF").css('color', 'black');
            }
        });

        $('#questionSet').change(function()
        {
            if ($('#questionSet').val()!==""){
                $('#questionSet').css("background-color", "#7c9").css('color', 'white');
            }else {
                $('#questionSet').css("background-color", "#FFF").css('color', 'black');
            }
            table.ajax.reload();
        });

        function questionDelete(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To Delete?',
                icon: 'fa fa-warning',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function(){
                            $.ajax({
                                type: "POST",
                                url: '{{route('job.sample.question.delete')}}',
                                data: {'id':$(x).attr('sampleQuestionId'),'_token':"{{csrf_token()}}"},
                                success: function () {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Question Deleted successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    table.ajax.reload();
                                                }
                                            }
                                        }
                                    });
                                }
                            });
                        }
                    },
                    No: function () {
                    }
                }
            });
        }

        function questionEdit(x)
        {
            $('#questionForm').trigger("reset");
            var id=$(x).attr('sampleQuestionId');
            $.ajax({
                type: "POST",
                url: '{{route('job.sample.question.single')}}',
                data: {'id':id,'_token':"{{csrf_token()}}"},
                success: function (data) {
                    $('#modalQuestionId').val(data.sampleQuestionId);
                    $('#modalQuestionType').val(data.type);
                    if(data.type==='MCQ'){
                        $('#modalQuestionAnswer').show();
                        $('#modalQuestionAnswerField').prop('disabled', false);
                    }else{
                        $('#modalQuestionAnswer').hide();
                    }
                    $('#modalQuestion').val(data.question);
                    $('#modalQuestionAnswerField').val(data.answer);
                    $('#questionModal').modal('toggle');
                }
            });
        }
    </script>

@endsection
