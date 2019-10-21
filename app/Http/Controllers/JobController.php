<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Jobapply;
use App\JobQuestion;
use App\Jobsamplequestion;
use App\QuestionSet;
use App\Rules\QAoptionCheck;
use Illuminate\Http\Request;
use App\Job;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class JobController extends Controller
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

   public function index(){
       $jobs=Job::leftJoin('zone', 'zone.zoneId', '=', 'job.fkzoneId')
           ->where('job.status',1)
           ->where('job.deadline','>=',date('Y-m-d'))->paginate(10);
       return view('job.all',compact('jobs'));
//   public function index(Request $r){

//       $allZone=DB::table('zone')->where('status',1)->get();
//       $jobs=Job::select('job.jobId','job.title','job.details','job.details','job.deadline','job.pdflink')
//                    ->where('job.status',1)
//                    ->where('job.deadline','>=',date('Y-m-d'));
//
//       if($r->search !=""){
//           $jobs=$jobs->where('job.title', 'like', '%' . $r->search . '%');
//       }
//       if ($r->zonefilter){
//           $jobs= $jobs->where('job.fkzoneId',$r->zonefilter);
//       }
//       $jobs=$jobs->paginate(10);
//
//       $empId1=Employee::where('fkuserId',Auth::user()->userId)->first();
//
//       if ($empId1 != null ){
//
//           $cvStatus=$empId1->cvStatus;
//
//           $applyjob = Jobapply::select('fkjobId')
//               ->where('fkemployeeId' , $empId1->employeeId)
//               ->get();
//
//       }else {
//           $cvStatus=null;
//
//           $applyjob = null;
//       }
//
//       if ($r->ajax()) {
//           return view('job.getAllJob',compact('jobs','cvStatus', 'applyjob','allZone'));
//       }
//
//       return view('job.all',compact('allZone','applyjob','jobs'));

   }

   public function guestAvailablejob()
   {
       $allZone=DB::table('zone')->where('status',1)->get();
       return view('guest.availableJob',compact('allZone'));
   }

   public function guestGetJobData(Request $r)
   {
//       $allZone=DB::table('zone')->where('status',1)->get();

       $jobs=Job::select('job.jobId','job.title','job.details','job.details','job.deadline','job.pdflink')
           ->where('job.status',1)
           ->where('job.deadline','>=',date('Y-m-d'));
//       if($r->search !=""){
//           $jobs=$jobs->where('job.title', 'like', '%' . $r->search . '%');
//       }
//       if ($r->zonefilter){
//           $jobs= $jobs->where('job.fkzoneId',$r->zonefilter);
//       }


       $jobs=$jobs->paginate(10);

//       if ($r->ajax()) {
//
//           return view('presult', compact('jobs'));
//
//       }

//       $cvStatus=Employee::where('fkuserId',Auth::user()->userId)->first()->cvStatus;

//       $empId1=Employee::where('fkuserId',Auth::user()->userId)->first();
//
//
//       if ($empId1 != null ){
//
//           $cvStatus=$empId1->cvStatus;
//
//           $applyjob = Jobapply::select('fkjobId')
//               ->where('fkemployeeId' , $empId1->employeeId)
//               ->get();
//
//
//
//       }else {
//           $cvStatus=null;
//
//           $applyjob = null;
//       }

       return view('job.getAllJob',compact('jobs'));
   }

   public function getJobData(Request $r){

       $allZone=DB::table('zone')->where('status',1)->get();

       $jobs=Job::select('job.jobId','job.title','job.details','job.details','job.deadline','job.pdflink')
           ->where('job.status',1)
           ->where('job.deadline','>=',date('Y-m-d'));
       if($r->search !=""){
           $jobs=$jobs->where('job.title', 'like', '%' . $r->search . '%');
       }
       if ($r->zonefilter){
           $jobs= $jobs->where('job.fkzoneId',$r->zonefilter);
       }
//       $empId=Employee::where('fkuserId',Auth::user()->userId)->first()->employeeId;
//
//       $applyjob = Jobapply::select('fkjobId')
//           ->where('fkemployeeId' , $empId)
//           ->get();


       $jobs=$jobs->paginate(10);

//       $cvStatus=Employee::where('fkuserId',Auth::user()->userId)->first()->cvStatus;

       $empId1=Employee::where('fkuserId',Auth::user()->userId)->first();

       if ($empId1 != null ){
           $cvStatus=$empId1->cvStatus;
           $applyjob = Jobapply::select('fkjobId')
               ->where('fkemployeeId' , $empId1->employeeId)
               ->get();
       }else {
           $cvStatus=null;
           $applyjob = null;
       }

       return view('job.getAllJob',compact('jobs','cvStatus','applyjob','allZone'));
   }

   public function applyJobModal(Request $r){
        $jobId = $r->jobId;
        $jobqus = JobQuestion::where('jobId',$jobId)->first();
        if ($jobqus->questionType=='SET'){
            $QuestionSet = QuestionSet::find($jobqus->setNumber);
            $questions = Jobsamplequestion::whereIn('sampleQuestionId',explode(",",$QuestionSet->setQuestion))->get();
        }elseif ($jobqus->questionType=='CUSTOM'){
            $questions = Jobsamplequestion::whereIn('sampleQuestionId',explode(",",$jobqus->customQuestion))->get();
        }
        return view('job.jobModal',compact('jobId','questions'));
   }

   public function appliedJobModal(Request $r){
       $jobId = $r->jobId;
       $employeeId = $r->employeeId;
       $jobqus = JobQuestion::where('jobId',$jobId)->first();

       if ($jobqus->questionType=='SET'){
           $QuestionSet = QuestionSet::find($jobqus->setNumber);
           $questions = Jobsamplequestion::whereIn('sampleQuestionId',explode(",",$QuestionSet->setQuestion))->get();
       }elseif ($jobqus->questionType=='CUSTOM'){
           $questions = Jobsamplequestion::whereIn('sampleQuestionId',explode(",",$jobqus->customQuestion))->get();
       }

       $Jobapplyanswer = Jobapply::leftJoin('jobapplyanswer', 'jobapplyanswer.jobapplyId', '=', 'jobapply.jobapply')
                        ->where('fkemployeeId',$employeeId)->where('fkjobId',$jobId)->first();

       $Jobapplyanswer->status = 'Viewed';
       $Jobapplyanswer->save();

       return view('job.jobAnsModal',compact('jobqus','Jobapplyanswer','questions'));
   }

   public function job_question(Request $data){
        $job_data = job::leftJoin('jobquestion', 'jobquestion.jobId', '=', 'job.jobId')
                        ->where('title',$data->jobTitle)->first();
        if (!empty($job_data->questionType)) {
            if ($job_data->questionType == 'SET') {
                $QuestionSet = QuestionSet::find($job_data->setNumber);
                $questions = Jobsamplequestion::whereIn('sampleQuestionId', explode(",", $QuestionSet->setQuestion))->get();
            } elseif ($job_data->questionType == 'CUSTOM') {
                $questions = Jobsamplequestion::whereIn('sampleQuestionId', explode(",", $job_data->customQuestion))->get();
            }
            return view('Admin.application.manageJobQuestion',compact('questions'));
        }
   }

   public function sampleQuestion()
   {
       $questions = Jobsamplequestion::all();
       $questionsSet = QuestionSet::all();
       return view('Admin.job.sampleQuestion',compact('questions','questionsSet'));
   }

   public function sampleQuestionSubmit(Request $data)
   {
       $validator = Validator::make($data->all(), [
           'modalQuestionType' => 'required',
           'modalQuestion' => 'required',
           'modalQuestionAnswer' => ['required_if:modalQuestionType,==,MCQ',new QAoptionCheck]
       ]);

       if ($validator->passes()) {

           if ($data->questionId){
               $model = Jobsamplequestion::find($data->questionId);
               $message = 'Question updated successfully';
           }else{
               $model = new Jobsamplequestion;
               $message = 'Question inserted successfully';
           }
           $model->type = $data->modalQuestionType;
           $model->question = $data->modalQuestion;
           if (!empty($data->modalQuestionAnswer)){
               $model->answer = $data->modalQuestionAnswer;
           }else{
               $model->answer = 'N/A';
           }
           $model->save();
           return response()->json(['success'=>$message]);
       }
       return response()->json(['error'=>$validator->errors()->all()]);
   }

   public function sampleQuestionGet(Request $data)
   {
       $application = Jobsamplequestion::select('*');

       if ($data->questionType){
           $application= $application->where('type',$data->questionType);
       }
       if($data->questionSet){
           $questionSet = QuestionSet::find($data->questionSet);
           $application= $application->whereIn('sampleQuestionId',explode(",",$questionSet->setQuestion));
       }
       $application = $application->orderBy('sampleQuestionId','desc')->get();

       $datatables = DataTables::of($application);
       return $datatables->make(true);
   }

   public function sampleQuestionDelete(Request $data)
   {
       Jobsamplequestion::where('sampleQuestionId',$data->id)->delete();
   }

   public function sampleQuestionSingle(Request $data)
   {
       $single = Jobsamplequestion::find($data->id);
       return $single;
   }

   public function sampleQuestionSetSubmit(Request $data)
   {
       $validator = Validator::make($data->all(), [
           'setName' => 'required',
           'modalQuestions' => 'required'
       ]);

       if ($validator->passes()) {

           if ($data->setId){
               $set = QuestionSet::find($data->setId);
               $message = 'Set updated successfully';
           }else{
               $set = new QuestionSet;
               $message = 'Set set inserted successfully';
           }

           $set->setName = $data->setName;
           $set->setQuestion = implode(",",$data->modalQuestions);
           $set->save();
           return response()->json(['success'=>$message]);
       }
       return response()->json(['error'=>$validator->errors()->all()]);
   }

   public function jobSetQuestions(Request $data)
   {
       $questions = Jobsamplequestion::all();
//       $sets = QuestionSet::find($data->id);
//       foreach ($questions as $question){
//           foreach ($sets as $set){
//
//           }
//       }
       return $questions;
   }
}
