<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Employer;
use App\Job;
use App\Blog;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PageController extends Controller {
    public function index() {

        $jobs = Job::query()->orderByDesc('created_at')->get();
        return view('welcome', [
            'jobs' => $jobs,
        ]);
    }

    public function blog() {
        $blogs = Blog::query()->orderByDesc('created_at')->get();
        return view('pages.available_blogs', [
            'blogs' => $blogs,
        ]);

    }

    public function candidate() {
        $candidate = Candidate::query()->orderByDesc('created_at')->get();
        return view('pages.available_candidates', [
            'candidate' => $candidate,
        ]);
    }

    public function employer() {
        $employer = Employer::query()->orderByDesc('created_at')->get();
        return view('pages.available_employers', [
            'employer' => $employer,
        ]);

    }

    public function job() {
        $jobs = Job::query()->orderByDesc('created_at')->get();
        return view('pages.available_jobs', [
            'jobs' => $jobs,
        ]);

    }

    public function contact() {
        return view('pages.contact_us');
    }

    public function sign_up() {
        return view('pages.sign_up');
    }

    public function admin_login() {
        return view('auth.admin_login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (!auth()->guard('employer')->attempt($credentials)) {
            return redirect()->back()->with('error', "Sorry, your credentials did not match");
        }
        return redirect()->route('employer.dashboard');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerEmployer(Request $request) {
        //verification
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'email' => 'required|unique:employers|email',
            'tel_no' => 'required|digits:10|unique:employers|numeric',
        ]);

        //create employer
        $employer = Employer::query()->create([
            'name' => $request->Name,
            'email' => $request->email,
            'tel_no' => $request->tel_no,
            'address' => $request->Address,
            'company_detail' => $request->CompanyDetails,
            'description' => $request->Description,
            'password' => Hash::make($request->password),
        ]);

        //authenticate user
        auth('employer')->loginUsingId($employer->id);
        return redirect()->route('employer.dashboard');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCandidateLogin(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (!auth()->guard('candidate')->attempt($credentials)) {
            return redirect()->back()->with('error', "Sorry, your credentials did not match");
        }
        return redirect()->route('candidate.dashboard')->with('Welcome back!');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function registerCandidate(Request $request) {
        //verification
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'email' => 'required|unique:candidates|email',
            'tel_no' => 'required|digits:10|unique:candidates|numeric',
        ]);

        //create employer
//		$candidate = DB::table('candidates')->insert([
//			'name' => $request->Name,
//			'email' => $request->email,
//			'tel_no' => $request->tel_no,
//			'address' => $request->Address,
//			'description' => $request->Description,
//			'password' => Hash::make($request->password),
//			'created_at' => now(),
//			'updated_at' => now(),
//		]);

        $candidate = Candidate::query()->create([
            'name' => $request->Name,
            'email' => $request->email,
            'tel_no' => $request->tel_no,
            'address' => $request->Address,
            'description' => $request->Description,
            'password' => Hash::make($request->password),
        ]);

        //authenticate user
        auth()->guard('candidate')->loginUsingId($candidate->id);
        return redirect()->route('candidate.dashboard');
    }
}
