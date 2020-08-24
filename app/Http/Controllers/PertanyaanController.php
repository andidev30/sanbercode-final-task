<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('pertanyaan')->get();
        return view('pertanyaan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $id = Auth::user()->id;
        return view('pertanyaan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $query = DB::table('pertanyaan')->insert([
            "judul"     => $request->title,
            "isi_pertanyaan"       => $request->isi,
            "tag"       => $request->tag
        ]);

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $query = DB::table('pertanyaan')
                            ->where('id', $id)
                            ->update([
                                "judul"     => $request->title,
                                "isi_pertanyaan"       => $request->isi,
                                "tag"       => $request->tag
                            ]);
        return redirect('/my-questions')->with('success', 'berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $query = DB::table('pertanyaan')->where('id', $id)->delete();

        return redirect('/my-questions')->with('success', 'berhasil dihapus');
    }

    public function myQuestion()
    {
        $data = DB::table('pertanyaan')->get();
        return view('pertanyaan.myquestion', compact('data'));
    }
}
