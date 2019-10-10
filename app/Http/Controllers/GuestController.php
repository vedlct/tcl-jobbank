<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Job;
use App\Jobapply;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function guestAvailablejob()
    {
//        $allZone=Zone::where('status',1)->get();
        $jobs=Job::leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')
            ->where('job.status',1)
            ->where('job.deadline','>=',date('Y-m-d'))->paginate(13);
        return view('guest.availableJob',compact('jobs'));
    }

    public function guestGetJobData(Request $r)
    {
//        $allZone=Zone::where('status',1)->get();
        $jobs=Job::leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')
            ->where('job.status',1)
            ->where('job.deadline','>=',date('Y-m-d'));
//        if($r->search !=""){
//            $jobs=$jobs->where('job.title', 'like', '%' . $r->search . '%');
//        }
//        if ($r->zonefilter){
//            $jobs= $jobs->where('job.fkzoneId',$r->zonefilter);
//        }
        $jobs=$jobs->paginate(10);

//        return view('guest.getAvailableJobs',compact('jobs','allZone'));
        return view('guest.getAvailableJobs',compact('jobs'));
    }
    public function jobDetails($jobId)
    {
        if (Auth::check()){
            $employee = Employee::where('fkuserId',Auth::user()->userId)->first();
            if($employee!=null){
                $applyData = Jobapply::where('fkjobId',$jobId)->where('fkemployeeId',$employee->employeeId)->count();
            }else{
                $applyData = false;
            }
        }else{
            $applyData = false;
        }
        $jobDetails = Job::where('jobId',$jobId)->leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')->first();

        return view('guest.detailsJobs',compact('jobDetails','applyData'));
    }
}
