<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses'=>'PageController@index',
    'as'=>'index'
]);
Route::get('/blog', [
    'uses'=>'PageController@blog',
    'as'=>'blog'
]);
Route::get('/candidate', [
    'uses'=>'PageController@candidate',
    'as'=>'candidate'
]);
Route::get('/employer', [
    'uses'=>'PageController@employer',
    'as'=>'employer'
]);
Route::get('/job', [
    'uses'=>'PageController@job',
    'as'=>'job'
]);
Route::get('/job/application/{id}', [
    'uses'=>'PageController@ApplyJob',
    'as'=>'jobApplication'
]);

Route::get('/contact', [
    'uses'=>'PageController@contact',
    'as'=>'contact'
]);
Route::get('/register', [
    'uses'=>'PageController@sign_up',
    'as'=>'register'
]);

Route::post('/register/employer', [
    'uses'=>'PageController@registerEmployer',
    'as'=>'register.employer'
]);
Route::post('/register/candidate', [
    'uses'=>'PageController@registerCandidate',
    'as'=>'register.candidate'
]);
Route::get('/admin/logout', [
    'uses'=>'AdminController@logout',
    'as'=>'admin.logout'
]);

//ADMIN ROUTES
Route::get('/jba/login', [
    'uses'=>'PageController@admin_login',
    'as'=>'admin.login'
]);
/*Route::post('/admin/blog', [
    'uses'=>'AdminController@adminBlog',
    'as'=>'admin.blog'
]);*/

Route:: get('/create/blog',[
    'uses'=>'AdminController@createBlog',
    'as'=>'create.blog'
]);
Route::post('/admin/view/blogs', [
    'uses'=>'AdminController@viewBlogs',
    'as'=>'admin.view.blogs'
]);

Route::get('/admin/view/candidate', [
    'uses'=>'AdminController@viewCandidates',
    'as'=>'view.candidate'
]);

Route::get('/admin/view/employers', [
    'uses'=>'AdminController@viewEmployers',
    'as'=>'view.employers'
]);

Route::get('/admin/view/active_jobs', [
    'uses'=>'AdminController@activeJobs',
    'as'=>'view.active_jobs'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix'=> 'admin'
    ], function (){
    Route::post('login', 'Auth\LoginController@AdminLogin')->name('admin.login');

    Route::get('/', [
        'uses'=>'AdminController@index',
        'as' =>'admin.home'
    ]);
});
Route::group([
    'prefix'=> 'employer'
    ],
    function (){
    Route::get('dashboard', 'EmployerController@home')->name('employer.dashboard');
    Route::get('logout', 'EmployerController@logout')->name('employer.logout');
    Route::post('login', 'PageController@postLogin')->name('employer.post.login');
        Route::get('post_job', [
            'uses'=>'EmployerController@post_job',
            'as'=>'post_job'
        ]);
    Route::post('post/job', 'EmployerController@postJob')->name('employer.post.job');

    Route::get('my/jobs', 'EmployerController@myJobs')->name('employer.my.jobs');
    Route::post('post/blog', 'EmployerController@postBlog')->name('employer.post.blog');



});
Route::group([
    'prefix'=> 'candidate'
],
    function () {
        Route::get('dashboard', 'CandidateController@home')->name('candidate.dashboard');

        Route::get('logout', 'CandidateController@logout')->name('candidate.logout');

        Route::post('login', 'PageController@postCandidateLogin')->name('candidate.post.login');

        Route::get('/view_job', [
            'uses' => 'CandidateController@view_job',
            'as' => 'view_job'
        ]);
        Route::get('view/job', 'CandidateController@viewJob')->name('view.job');
    });
Route::get('/view_jobs', [
    'uses'=>'PageController@view_jobs',
    'as'=>'view_jobs'
]);
Route::get('job/delete/{id}', [
    'uses' => 'EmployerController@deleteJob',
    'as' => 'delete.job'
]);

Route::get('job/edit/{id}', [
    'uses' => 'EmployerController@editJob',
    'as' => 'edit.job'
]);

Route::post('/job/update', [
    'uses' => 'EmployerController@updateJob',
    'as' => 'job.update'
]);
Route::post('employee/view/blog', [
    'uses' => 'EmployerController@postBlog',
    'as' => 'blog.view'
]);

Route::get('employee/view/blog', [
    'uses' => 'EmployerController@viewBlog',
    'as' => 'post.blog'
]);
Route::get('employee/view/blog', [
    'uses' => 'EmployerController@viewBlog',
    'as' => 'view.blog'
]);
Route::get('view/blog', 'EmployerController@getBlog')->name('employer.view.blog');


Route::get('candidate/dashboard/uploadCV', [
    'uses' => 'CandidateController@upload',
    'as' => 'upload'
]);
Route::get('candidate/dashboard/viewCV', [
    'uses' => 'CandidateController@view',
    'as' => 'view'
]);
Route::get('/applyJob', [
    'uses' => 'ApplicationController@applyJob',
    'as' => 'apply.job'
]);
Route::get('/candidate/job/apply', [
    'uses' => 'CandidateController@applyJob',
    'as' => 'apply.job'
]);
