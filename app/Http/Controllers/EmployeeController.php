<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Religion;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(Request $request){

        if($request->has('q')){
            $data = Employee::where('nama','like', '%'.$request->q.'%')->paginate();
        } else {
            $data = Employee::paginate(5);
        }

        return view('employee/employee', compact('data'));
    }

    public function insert(){
        $religions = Religion::all();
        return view('employee/insert', compact('religions'));
    }

    public function insertPost(Request $request){
        $data = Employee::create($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('photoemployee/', $request->file('foto')->getClientOriginalName()); 
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('employee')->with('success', 'Data berhasil di Tambahkan');
    }
    
    public function showDetail($id){
        $employee = Employee::find($id);
        $religions = Religion::all();
        // $data = [
        //     'employee' => Employee::find($id),
        //     'religions' => Religion::all()
        // ];
        return view('employee/edit', compact('employee', "religions"));
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
