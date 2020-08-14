<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Blog;
use App\Employer;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:employer');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        $user = auth()->user();
        $jobs = Job::query()->orderByDesc('created_at')->get();
        return view('Employer.employer_dashboard',[
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
    public function post_job(){
        return view('pages.post_job');
    }
    public function postJob(Request $request)
    {
        $user = auth()->user();
        Job::query()->create([
            'employer_id'=>$user->id,
            'company_name'=>$request->company_name,
            'company_website'=>$request->company_website,
            'company_email'=>$request->company_email,
            'job_category'=>$request->job_category,
            'company_logo'=>$request->company_logo,
            'job_title'=>$request->job_title,
            'job_description'=>$request->job_description,
            'job_type'=>$request->job_type,
            'job_salary'=>$request->job_salary,
            'job_location'=>$request->job_location


        ]);
        return redirect()->route('employer.my.jobs')->with('success',"You have successfully posted a job");
    }
        /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request){

        if ($request->hasfile('company_logo')) {
            $file = $request->file('company_logo');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time() . '.' . $extension;
            $file->move('extra-images', $filename);
            $fileToStore = 'extra-images/' . $filename;

            // $filename= $file;

        } else {
            $filename = 'img-1.jpg';
        }
        $user = auth()->user();
        Job::query()->create([
            'employer_id'=>$user->id,
            'company_name'=>$request->company_name,
            'company_website'=>$request->company_website,
            'company_email'=>$request->company_email,
            'job_category'=>$request->job_category,
            'company_logo'=>$request->company_logo,
            'job_title'=>$request->job_title,
            'job_description'=>$request->job_description,
            'job_type'=>$request->job_type,
            'job_salary'=>$request->job_salary,
            'job_location'=>$request->job_location


        ]);
        return redirect()->route('employer.my.jobs')->with('success',"You have successfully posted a job");
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myJobs(){
        $jobs = Job::query()->orderByDesc('created_at')->get();
        return view('Employer.my_jobs',[
            'jobs'=>$jobs
        ]);
    }
    public function deleteJob(string $id)
    {

        try{
            //
            $job = Job::query()->find($id);
            $job->delete();
            return redirect()->back()->with('success','Deleted successfully');

        } catch (Exception $exception){
            return redirect()->back();

        }


    }

    public function editJob(string $id)
    {
        // Find the job by id
        $job = Job::query()->findOrFail($id);
        return view('pages.edit', [
            'job' => $job
        ]);
    }

      public function updateJob(Request $request)
      {
          try {
              // Find the post by id
              $job = Job::query()->find($request->id);

              $job->insert([
                  'applicant_id' => $request->id,
                  'job_id' => $request->$id,

              ]);
              return redirect()->route('employer.my.jobs')->with('success', 'Job updated successfully.');
          } catch (\Exception $exception) {
              return redirect()->back()->with('error', 'Another job with the same tittle already exists.')
                  ->withInput($request->all());
          }
      }
    public function getBlog()
    {
        $blogs = Blog::all();
        return view("pages.blog", [
            'blogs' => $blogs
        ]);
    }

    public function postBlog(Request $request)
    {

        if ($request->hasfile('image')) {
            $destinationPath ='upload/blogs/';//upload path
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/blogs', $filename);
            $fileToStore = 'upload/blogs/' . $filename;

            // $filename= $file;

        } else {
            $filename = 'img-1.jpg';
        }
        Blog::query()->create([
            'subject' => $request->subject,

            'post' => $request->post,
            'register_id' => auth('employer')->id(),
            'image' => $filename,
        ]);


        return redirect()->route('blog') ->with("Great! You have added a new blog");


    }

    public function viewBlog(){
        return view('pages.post_blog');
 }
 public function Blog(){

     $blogs = Blog::all();
     return view("pages.available_blogs", [
         'blogs' => $blogs
     ]);
    }
}
