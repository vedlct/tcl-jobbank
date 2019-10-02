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
                        <label>Current Salary</label>
                        <input type="number" placeholder="current salary" name="currentSalary">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Expected Salary</label>
                        <input type="number" placeholder="expected salary" name="expectedSalary" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success"onclick="btnhide()" id="button-apply">Apply</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
<script>
    function btnhide() {
        $("#button-apply").hide();
    }
</script>
