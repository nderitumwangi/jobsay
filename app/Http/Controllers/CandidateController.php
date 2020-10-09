<?php

namespace App\Http\Controllers;

use App\Job;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CandidateController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:candidate');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        $user = auth()->user();
        $jobs = Job::query()->orderByDesc('created_at')->get();

        return view('Candidate.candidate_dashboard',[
            'user'=>$user,
             'jobs'=>$jobs
        ]);




    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(){
        Session::flush();
        auth()->logout();
        return redirect()->route('index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view_job(){
        return view('pages.view_job');
    }
    public function viewJob(Request $request)
    {

        return $request;

    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myJobs(){
        $jobs = Job::query()->orderByDesc('created_at')->get();
        return view('candidate.view_jobs',[
            'jobs'=>$jobs
        ]);
    }

    public function upload(){
        $user = auth()->user();
        return view('Candidate.upload_cv', [
            'user'=>$user
        ]  );
    }

    public function view(){
        $user = auth()->user();
        return view('Candidate.view_cv', [
        'user'=>$user
          ]  );
    }

    public function applyJob(Request $request){
        $user = auth()->user();
        $candidate =auth()->user()->id;

        $job = Job::query()->find($request->id);


        return redirect()->route('candidate.dashboard')->with('success', 'Job Applied  successfully.');

    }

}
