<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        if($request->has('q')){
            $data = Religion::where('nama','like', '%'.$request->q.'%')->paginate();
        } else {
            $data = Religion::all();
        }
        return view("religion/religion", compact('data'));
    }

    public function insert(){
        return view('religion/insert');
    }

    public function insertPost(Request $request){
        Religion::create($request->all());

        return redirect('religion')->with('success', 'Data berhasil di Tambahkan');
    }

    public function show($id){
        $data = Religion::find($id);
        return view('religion/edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Religion::find($id);
        $data->update($request->all());
        return redirect('religion')->with('success', 'Data berhasil di Ubah');
    }

    public function delete($id){
        $data = Religion::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil di Dihapus');;
    }

}
