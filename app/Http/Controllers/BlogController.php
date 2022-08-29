<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::paginate(10);

        return view('admin.blog.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.blog.add');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'mimes' => ':attribute harus berformat :values.',
        ];

        $request->validate([
            'judul' => 'required',
            'sampul' => 'required |image|mimes:jepg,png,jpg|max:2048',
            'tajuk_utama' => 'required',
            'isi' => 'required'
        ], $messages);

        if ($request->hasfile('sampul')) {
            $file = $request->file('sampul');
            $ext = $file->extension();
            $fileName = Str::slug($request->nama, "-") . '-' . uniqid();

            $urlName = 'assets/media/blog/' . $fileName . '.' . $ext;
        }

        // Make Slug
        $slug = Str::slug($request->judul, "-");
        // check to see if any other slugs exist that are the same & count them
        $count = DB::table('blogs')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        
        $save = Blog::create([
            'sampul' => $urlName,
            'judul' => $request->judul,
            'tajuk_utama' => $request->tajuk_utama,
            'isi' => $request->isi,
            'slug' => $count > 0 ? "{$slug}-{$count}" : $slug
        ]);

        if ($save) {
            if ($request->hasfile('sampul')) {
                $file->storeAs('public/assets/media/blog', $fileName . '.' . $ext);
            }
            return redirect()->route('admin.blog');
        } else {
            return redirect()->back();
        }
    }

    public function edit(Request $request, $id)
    {
        $data = Blog::find($id);

        return view('admin.blog.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'mimes' => ':attribute harus berformat :values.',
        ];

        $request->validate([
            'judul' => 'required',
            'sampul' => 'image|mimes:jepg,png,jpg|max:2048',
            'tajuk_utama' => 'required',
            'isi' => 'required'
        ], $messages);

        if ($request->hasfile('sampul')) {
            $file = $request->file('sampul');
            $ext = $file->extension();
            $fileName = Str::slug($request->nama, "-") . '-' . uniqid();

            $urlName = 'assets/media/blog/' . $fileName . '.' . $ext;

            $update['sampul'] = $urlName;
        }

        // Make Slug
        $slug = Str::slug($request->judul, "-");
        // check to see if any other slugs exist that are the same & count them
        $count = DB::table('blogs')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        
        $update['judul'] = $request->judul;
        $update['tajuk_utama'] = $request->tajuk_utama;
        $update['isi'] = $request->isi;
        $update['slug'] = $count > 0 ? "{$slug}-{$count}" : $slug;

        $save = Blog::where('id', $id)->update($update);

        if ($save) {
            if ($request->hasfile('sampul')) {
                $file->storeAs('public/assets/media/blog', $fileName . '.' . $ext);
            }
            return redirect()->route('admin.blog');
        } else {
            return redirect()->back();
        }
    }

    public function destroy(Blog $model, $id)
    {
        DB::beginTransaction();
        try {
            $data = $model->findOrFail($id);

            if (Storage::exists('public/'.$data->sampul)) {
                Storage::delete('public/'.$data->sampul);
            }

            $data->delete();
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back();
        }
        DB::commit();
        return redirect()->back();
    }
}
