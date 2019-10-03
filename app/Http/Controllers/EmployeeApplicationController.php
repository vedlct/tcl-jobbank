<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Ethnicity;
use App\Jobapply;
use App\Jobapplyanswer;
use App\Nationality;
use App\Religion;
use Illuminate\Http\Request;
use Session;
use Auth;
use Image;

class EmployeeApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()){
                return $next($request);
            }else{
                return redirect('/');
            }
        });
    }

    public function getAllApplication()
    {
        $empId=Employee::where('fkuserId',Auth::user()->userId)->first();

        if ($empId != null ){
            $jobApplyList=Jobapply::select('job.title','job.pdflink','zone.zoneName','jobapply.jobapply','jobapply.applydate')->leftJoin('job', 'job.jobId', '=', 'jobapply.fkjobId')->leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')->where('fkemployeeId',$empId->employeeId)->get();
        }else {
            $jobApplyList= null;
        }
        return view('job.jobApplyList',compact('jobApplyList'));
    }

    public function withdrawApplication($id)
    {
        if (Jobapplyanswer::where('jobapplyId',$id)->delete()){
            Jobapply::find($id)->delete();
        }
        return redirect()->back();
    }
}
