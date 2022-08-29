<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function penginapan()
    {
        $data = Penginapan::paginate(8);

        return view('user.penginapan.penginapan', [
            'data' => $data
        ]);
    }

    public function penginapanDetail($id)
    {
        $data = Penginapan::find($id);
        
        return view('user.penginapan.detail-penginapan', [
            'data' => $data
        ]);
    }

    public function blog()
    {
        $first = Blog::orderBy('id', 'DESC')->first();
        
        $data = Blog::paginate(4);

        return view('user.blog.blog', [
            'first' => $first,
            'data' => $data
        ]);
    }

    public function blogDetail($slug)
    {
        $data = Blog::where('slug', $slug)->first();

        return view('user.blog.detailBlog', [
            'data' => $data
        ]);
    }
}
