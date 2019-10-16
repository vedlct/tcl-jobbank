<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JobQuestion;
use App\Jobsamplequestion;
use App\QuestionSet;
use App\Rules\QAoptionCheck;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Job;
use App\HR;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use Yajra\DataTables\DataTables;


class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()){
                if(Auth::user()->fkuserTypeId==USER_TYPE['Admin'] || Auth::user()->fkuserTypeId==USER_TYPE['Emp'] ){
                    return $next($request);
                }else{
                    return redirect('/');
                }
            }else{
                return redirect('/');
            }
        });
    }

   public function addNewJob(){

       if(Auth::user()->fkuserTypeId==USER_TYPE['Emp']){
           $myZone=HR::where('fkuserId',Auth::user()->userId)->first();
           $allZone=DB::table('zone')->where('zoneId',$myZone->fkzoneId)->where('status',1)->get();
       }elseif(Auth::user()->fkuserTypeId==USER_TYPE['Admin']){
           $allZone=DB::table('zone')->where('status',1)->get();
       }
       $questions = Jobsamplequestion::all();
       $questionSet = QuestionSet::all();
       return view('Admin.job.addJob',compact('allZone','questions','questionSet'));
   }

   public function manageJob()
   {
       $allZone=DB::table('zone')->where('status',1)->get();
       return view('Admin.job.manageJob',compact('allZone'));
   }

   public function getManageJobData(Request $r){

       $allJobList=Job::select('job.jobId','job.title as jobTitle','job.position as jobPosition','job.deadline','u1.name as createBy','job.createDate','u2.name as updateBy',
           'job.updateTime','job.status','job.pdflink','zone.zoneName',DB::raw("DATE(job.postDate) as postDate"))
           ->leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')
           ->leftJoin('user as u1', 'u1.userId', '=', 'job.createBy')
           ->leftJoin('user as u2', 'u2.userId', '=', 'job.updateBy')
           ->where('job.status', '!=',0)
           ->orderBy('job.postDate','desc');

       if ($r->zonefilter){
           $allJobList= $allJobList->where('job.fkzoneId',$r->zonefilter);
       }
       if ($r->jobStatusFilter){
           $allJobList= $allJobList->where('job.status',$r->jobStatusFilter);
       }
       if ($r->postDateFilter){
           $allJobList= $allJobList->where(DB::raw("DATE(job.postDate)"),$r->postDateFilter);
       }
       if ($r->deadlineFilter){
           $allJobList= $allJobList->where('job.deadline',$r->deadlineFilter);
       }

       if(Auth::user()->fkuserTypeId=="cbEmp"){
           $myZone=HR::where('fkuserId',Auth::user()->userId)
               ->first();
           $allJobList= $allJobList->where('job.fkzoneId',$myZone->fkzoneId);

       }

       $allJobList=$allJobList->get();

       $datatables = DataTables::of($allJobList);

       return $datatables->make(true);

   }
   public function jobEdit($jobId){

       $info=Job::leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')
           ->leftJoin('jobquestion', 'jobquestion.jobId', '=', 'job.jobId')
           ->where('job.jobId',$jobId)
           ->first();

       if(Auth::user()->fkuserTypeId==USER_TYPE['Emp']){
           $myZone=HR::where('fkuserId',Auth::user()->userId)->first();
           $allZone=DB::table('zone')->where('zoneId',$myZone->fkzoneId)->where('status',1)->get();
       }elseif(Auth::user()->fkuserTypeId==USER_TYPE['Admin']){
           $allZone=DB::table('zone')->where('status',1)->get();
       }
       $questions = Jobsamplequestion::all();
       $questionSet = QuestionSet::all();
       return view('Admin.job.editJob',compact('info','allZone','questions','questionSet'));

   }
   public function jobStatusUpdate(Request $r){

       if ($r->status==JOB_STATUS['Posted']){
           $data=array(
               'status'=>JOB_STATUS['Posted'],
               'postBy'=>Auth::user()->userId,
               'postDate'=>date('Y-m-d'),

               );
       }elseif($r->status==JOB_STATUS['De-activate']){

           $data=array(
               'status'=>JOB_STATUS['De-activate'],
               'postBy'=>null,
               'postDate'=>null,

           );

       }

       DB::table('job')
           ->where('jobId',$r->id)
           ->update($data);



   }
   public function jobDelete(Request $r){

       DB::table('job')
           ->where('jobId',$r->id)
           ->update(['status' => 0]);


   }

   public function jobUpdate(Request $r){

       $rules = [

           'title' => 'required',
           'position' => 'required',
           'salary' => 'required|max:45',
           'jobStatus' => 'required',
           'deadline' => 'required|date',
           'zone' => 'required',
           'status' => 'required'
       ];

       $this->validate($r, $rules);

       $jobInfo=Job::findOrFail($r->jobId);
       $jobInfo->title=$r->title;
       $jobInfo->position=$r->position;
       $jobInfo->salary=$r->salary;
       $jobInfo->deadline=$r->deadline;
       $jobInfo->details=$r->jobDetails;
       $jobInfo->status=$r->status;
       $jobInfo->jobstatus=$r->jobStatus;
       $jobInfo->fkzoneId=$r->zone;
       $jobInfo->updateBy=Auth::user()->userId;
       $jobInfo->updateTime=Carbon::now();

       if($r->hasFile('jobPdf')){
           $img = $r->file('jobPdf');
           $filename= $r->jobId.'jobPdf'.'.'.$img->getClientOriginalExtension();
           $jobInfo->pdflink=$filename;
           $location = public_path('jobPdf'.'/');
           $upload_success = $img->move($location, $filename);
       }

       if($jobInfo->save()){
           $jobquestion = jobquestion::where('jobId',$r->jobId)->first();
           if ($r->questionset){
               $jobquestion->questionType = 'SET';
               $jobquestion->setNumber = $r->questionset;
               $jobquestion->customQuestion = null;
           }elseif ($r->questionCustom){
               $jobquestion->questionType = 'CUSTOM';
               $jobquestion->customQuestion = implode(",",$r->questionCustom);
               $jobquestion->setNumber = null;
           }
           $jobquestion->save();
       }

       Session::flash('message', 'Job Edited Successfully');
       return redirect()->route('job.admin.manage');

   }
   public function jobInsert(Request $r){
        $rules = [
           'title' => 'required',
           'position' => 'required',
           'salary' => 'required|max:45',
           'jobStatus' => 'required',
           'deadline' => 'required|date',
           'jobDetails' => 'required',
           'zone' => 'required',
           'status' => 'required'
       ];

       $this->validate($r, $rules);

       $jobInfo= new Job();

       $jobInfo->title=$r->title;
       $jobInfo->position=$r->position;
       $jobInfo->salary=$r->salary;
       $jobInfo->deadline=$r->deadline;
       $jobInfo->details=$r->jobDetails;
       $jobInfo->status=$r->status;
       $jobInfo->jobstatus=$r->jobStatus;
       $jobInfo->fkzoneId=$r->zone;
       $jobInfo->createBy=Auth::user()->userId;
       $jobInfo->createDate=Carbon::now();
       $jobInfo->updateBy=Auth::user()->userId;
       $jobInfo->updateTime=Carbon::now();

       if ($r->status == '1'){
           $jobInfo->postBy=Auth::user()->userId;
           $jobInfo->postDate=Carbon::now();
       }
       $jobInfo->save();

       if($r->hasFile('jobPdf')){
           $img = $r->file('jobPdf');
           $filename= $jobInfo->jobId.'jobPdf'.'.'.$img->getClientOriginalExtension();
           $jobInfo->pdflink=$filename;
           $location = public_path('jobPdf'.'/');
           $upload_success = $img->move($location, $filename);
       }

       if($jobInfo->save()){
           $jobquestion = new JobQuestion();
           $jobquestion->jobId = $jobInfo->jobId;
           if ($r->questionset){
               $jobquestion->questionType = 'SET';
               $jobquestion->setNumber = $r->questionset;
           }elseif ($r->questionCustom){
               $jobquestion->questionType = 'CUSTOM';
               $jobquestion->customQuestion = implode(",",$r->questionCustom);
           }
           $jobquestion->save();
       }

       Session::flash('message', 'Job Added Successfully');
       return redirect()->route('job.admin.manage');

   }
}
