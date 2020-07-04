<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        return view('indexPertanyaan', compact('pertanyaan'));
    }

    public function create() {
        return view('formPertanyaan');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::save($data);
        if($pertanyaan) {
            return redirect('/pertanyaan');
        }
    }

    public function edit($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->get();
        return view('editPertanyaan', compact('pertanyaan'));
    }
}