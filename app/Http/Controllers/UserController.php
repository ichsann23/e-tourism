<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::paginate(10);

        return view('admin.users.dataUser',[
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.users.tambahUser');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.'
        ];

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], $messages);

        $save = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if ($save) {
            return redirect()->route('admin.user');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data = User::find($id);

        return view('admin.users.editUser', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.'
        ];

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ], $messages);

        $update['name'] = $request->name;
        $update['email'] = $request->email;

        if ($request->password) {
            $update['password'] = Hash::make($request->password);
        }

        $save = User::where('id', $id)->update($update);

        if ($save) {
            return redirect()->route('admin.user');
        } else {
            return redirect()->back();
        }
    }

    public function destroy(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = User::findOrFail($id);

            $data->delete();
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back();
        }
        DB::commit();
        return redirect()->back();
    }
}
