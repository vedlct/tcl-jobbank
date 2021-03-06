<table class="table-bordered" width="99%" align="center">
    <tr>
        <th class="TextAlignLeft">Job Title</th>
        <th class="TextAlignCenter">Location</th>
        <th class="TextAlignRight">Salary</th>
        <th class="TextAlignRight">Deadline</th>
        <th>Action</th>
    </tr>
    <tbody>
    @if($jobs && count($jobs)>0)
        @foreach($jobs as $job)
        <tr>
            <td class="TextAlignLeft">{{$job->title}}</td>
            <td class="TextAlignCenter">{{$job->zoneName}}</td>
            <td class="TextAlignRight">{{$job->salary}}</td>
            <td class="TextAlignRight">{{$job->deadline}}</td>
            <td>
                <a class="btn btn-mini" href="{{url('/job-details/'.$job->jobId)}}" target="_blank">
                    <i class="glyphicon glyphicon-zoom-in"></i>View</a>
            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>
{!! $jobs->links() !!}
