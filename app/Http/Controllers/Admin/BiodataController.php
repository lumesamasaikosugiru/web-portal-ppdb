<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index()
    {
        $biodatas = DB::table('biodatas')->get()->map(function ($biodata) {
            $biodata->usia = Carbon::parse($biodata->tanggal_lahir)->age;
            return $biodata;
        });

        return view('pages.biodata.index', [
            "biodatas" => $biodatas,
        ]);
    }

    public function create()
    {
        $orangtua = User::all();

        return view('pages.biodata.create', [
            "orangtua" => $orangtua,
        ]);
    }

    public function store(Request $request)
    {
        Biodata::create([
            "nik_siswa" => $request->input('nik'),
            "name" => $request->input('name'),
            "nisn" => $request->input('nisn'),
            "tempat_lahir" => $request->input('tmpt_lhr'),
            "tanggal_lahir" => $request->input('tgl_lhr'),
            "jk" => $request->input('jk'),
            "sekolah_asal" => $request->input('sekolah_asal'),
            "id_user" => $request->input('id_user'),
            // "id_user" => Auth::id(),
        ]);
        return redirect('/biodata');
    }
}
