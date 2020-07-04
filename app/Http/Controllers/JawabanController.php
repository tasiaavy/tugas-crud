<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id) {
        $jawaban = JawabanModel::get_all($pertanyaan_id);
        return view('jawaban', compact('jawaban'));
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $idnya = $request["pertanyaan_id"];
        $jawaban = JawabanModel::save($data);
        // if($jawaban) {
        //     return redirect('/jawaban/$idnya',["idnya" => $idnya]);
        // }
    }
}