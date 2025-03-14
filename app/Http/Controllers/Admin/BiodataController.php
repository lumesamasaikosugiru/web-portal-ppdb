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
        $validated = $request->validate([
            "nik_siswa" => "required|min:16",
            "name" => "required|min:3",
            "nisn" => "required|min:10",
            "tempat_lahir" => "required|min:3",
            "tanggal_lahir" => "required",
            "jk" => "required",
            "sekolah_asal" => "required|min:5",
            "id_user" => "required",
        ]);
        Biodata::create($validated);
        return redirect('/biodata');
    }
    public function delete($id)
    {
        $del_biodata = Biodata::where('id', $id);
        $del_biodata->delete();

        return redirect('/biodata');
    }
    public function edit($id)
    {
        $orangtua = User::all();
        $edit_biodata = Biodata::findOrFail($id);

        return view('pages.biodata.edit', [
            "orangtua" => $orangtua,
            "edit_biodata" => $edit_biodata,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "nik_siswa" => "required|min:16",
            "name" => "required|min:3",
            "nisn" => "required|min:10",
            "tempat_lahir" => "required|min:3",
            "tanggal_lahir" => "required",
            "jk" => "required",
            "sekolah_asal" => "required|min:5",
            "id_user" => "required",
        ]);
        Biodata::where('id', $id)->update($validated);
        return redirect('/biodata');
    }
}
