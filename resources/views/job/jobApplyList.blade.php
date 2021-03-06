@extends('main')
@section('content')
    <div class="container" >
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h4>Manage Application</h4>
                </div>
                <div class="card-body">
                    @if($jobApplyList != null)
                    <div class="table table-responsive">

                    <table id="manageapplication" class="table table-striped table-bordered" style="width:100%" >
                        <thead>
                        <tr>

                            <th>Job Title</th>
                            <th>Zone</th>
                            <th>Apply Date</th>
                            <th>Detailes</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobApplyList as $applyList)
                        <tr>

                            <td>{{$applyList->title}}</td>
                            <td>{{$applyList->zoneName}}</td>
                            <td>{{date('Y-m-d',strtotime($applyList->applydate))}}</td>
                            <td>
                                @if($applyList->pdflink != null)
                                    <a target="_blank" href="{{url('public/jobPdf').'/'.$applyList->pdflink}}">Download</a>
                                @endif
                            </td>
                            <td>
                                <a href="JavaScript:void(0);" onclick="withdraw({{$applyList->jobapply}})">Withdraw</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    </div>
                    @endif
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    </div>

@endsection
@section('foot-js')

    <script src="{{url('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{url('public/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.3/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        function withdraw(id) {

            $.confirm({
                title: 'Confirm!',
                content: 'Want to withdraw application.',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'get',
                            url: "{!! url('/withdraw-application/') !!}"+'/'+id,
                            cache: false,
                            success: function () {
                                $.alert({
                                    title: 'Success',
                                    type: 'green',
                                    content: 'Application withdrawn successfully',
                                    buttons: {
                                        tryAgain: {
                                            text: 'Ok',
                                            btnClass: 'btn-green',
                                            action: function () {
                                                location.reload();
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    },
                    cancel: {
                        tryAgain: {
                            text: 'Cancel',
                            btnClass: 'btn-red'
                        }
                    }
                }
            });
        }

        $(document).ready(function() {
            $('#manageapplication').DataTable(
                {
                    "columnDefs": [
                        {
                            "targets": [0,1,3],
                            "orderable": false
                        }
                    ]
                }
            );
        } );

        @if($jobApplyList == null)

        $.alert({
            title: 'Error',
            type: 'red',
            content: 'Your CV information is not found ,please make your CV first',
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-green',
                }
            }
        });

        @endif

    </script>

@endsection
