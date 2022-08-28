<?php

namespace App\Http\Controllers;

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
}
