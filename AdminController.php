<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Candidate;
use App\Job;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

 public function index (){
     return view('admin.admin_dashboard');
 }
    public function viewEmployers (){
        $employers = Employer::query()->orderByDesc('created_at')->get();
        return view('admin.view_employers', [
            'employers' => $employers,
        ]);
    }

    public function viewCandidates (){
        $candidates = Candidate::query()->orderByDesc('created_at')->get();
        return view('admin.view_candidates', [
            'candidates' => $candidates,
        ]);
    }
    public function activeJobs (){
            $jobs = Job::query()->orderByDesc('created_at')->get();
            return view('admin.active_jobs',[
                'jobs'=>$jobs
            ]);

    }
    public function create_Blog(){
        return view('admin.create.blogs');
    }
    /*public function createBlog(Request $request)
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
            'register_id' => auth('admin')->id(),
            'image' => $filename,
        ]);
        return $request;
        //return redirect()->route('blog') ->with("Great! You have added a new blog");


    }*/
    /*public function viewBlog(Request $request){
        //return view('pages.post_blog');
        return $request;
    }*/


 public function logout(){
        Session::flush();
        auth()->logout();
        return redirect()->route('index');
 }

    /*public function postAdminBlog (Request $request)
    {
        $blogs = Blog::query()->orderByDesc('created_at')->get();
        return view('admin.admin_blog', [
            'blogs' => $blogs
        ]);

    }*/
        /*public function AdminBlogs(Request $request){
            return view('admin.admin_blogs');
        }*/





}
