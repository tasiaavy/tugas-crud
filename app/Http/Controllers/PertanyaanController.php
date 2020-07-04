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

    public function update(Request $request) {
        DB::table('pertanyaan')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect('/pertanyaan');
    }

    public function show($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->get();
        $jawaban = DB::table('jawaban')->where('pertanyaan_id',$id)->get();
        return view('showPertanyaan', compact('pertanyaan'), compact('jawaban'));
    }

    public function destroy($id) {
        DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan');
    }
}