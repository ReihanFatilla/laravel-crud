<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(){
        $data = Employee::all();
        return view('home/home', compact('data'));
    }

    public function insert(){
        return view('insert/insert');
    }

    public function insertPost(Request $request){
        Employee::create($request->all());
        return redirect('employee')->with('success', 'Data berhasil di Tambahkan');
    }
    
    public function showDetail($id){
        $data = Employee::find($id);
        return view('edit/edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect('employee')->with('success', 'Data berhasil di Ubah');
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil di Dihapus');;
    }

}
