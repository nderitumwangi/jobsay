<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog()
    {
        $blogs = Blog::all();
        return view("blog", [
            'blogs' => $blogs
        ]);
    }

    public function postBlog(Request $request)
    {

//        return $request;
       if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/blogs', $filename);
            $fileToStore = 'uploads/blogs/' . $filename;

//            $blogs->image=$filename;

        } else {
            $filename = '';
        }

//        return $filename;
        Blogs::query()->create([
            'subject' => $request->subject,
            'slug' => Str::slug($request->subject),
            'post' => $request->post,
            'register_id' => auth('employer')->id(),
            //'image' => $filename,
        ]);


        return redirect()->route('home');


    }


}
