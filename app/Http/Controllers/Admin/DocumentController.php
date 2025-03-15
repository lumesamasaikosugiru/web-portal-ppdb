<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $document = Document::all();

        return view('pages.document.index', compact('document'));
    }

    public function create()
    {

        return view('pages.document.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|unique:documents,name",
            "url_berkas" => "required",
            "id_biodata" => "required",
        ], [
            "name.required" => "Nama berkas harus diisi!",
            "name.unique" => "Nama berkas sudah digunakan!",
            "url_berkas.required" => "URL harus diisi!",
            "id_biodata.required" => "ID biodata harus diisi!",
        ]);

        $document = new Document();
        $document->name = $request->input('name');
        $document->url_berkas = $request->input('url_berkas'); // FIXED
        $document->id_biodata = $request->input('id_biodata');
        $document->save();

        return redirect('/document');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "name" => "required|unique:documents,name,$id",
            "url_berkas" => "required",
            "id_biodata" => "required",
        ], [
            "name.required" => "Nama berkas harus diisi!",
            "name.unique" => "Nama berkas sudah digunakan!",
            "url_berkas.required" => "URL harus diisi!",
            "id_biodata.required" => "ID biodata harus diisi!",
        ]);

        $document = Document::find($id); // FIXED
        if (!$document) {
            return redirect('/document')->with('error', 'Dokumen tidak ditemukan!');
        }

        $document->name = $request->input('name');
        $document->url_berkas = $request->input('url_berkas'); // FIXED
        $document->id_biodata = $request->input('id_biodata');
        $document->save();

        return redirect('/document')->with('success', 'Dokumen berhasil diperbarui!');
    }


    public function edit($id)
    {
        $edit_doc = Document::find($id);

        return view('pages.document.edit', compact('edit_doc'));
    }

    public function delete($id)
    {
        Document::where('id', $id)->delete();

        return redirect('/document');
    }
}
