<?php

namespace App\Http\Controllers\blog;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
            $blogs = Blogs::all();
            return view('blog.blog' , compact('blogs'));

            // {

            //     $blogs = $Blogs->paginate(1);
            //     return view('course.course', compact('courses'));
            // }
    }

    public function show($slug)
    {
        $blogs = Blogs::query()->where('title' , str_replace('_' , ' ' , $slug))->firstOrFail();
        return view('blog.blog_single' , compact('blogs'));
    }

}
