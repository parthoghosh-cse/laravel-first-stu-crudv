<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * load all student
     */
    public function index()
    {
       $data =Student::all();
       return view('student.index',[
         'all_data' => $data,
       ]);
    }
    /**
     * add new student
     */
    public function create()
    {
        return view('student.create');
    }
     /**
     * student data store
     */
     public function store(Request $request)
    {
      $this->validate($request,[
        'name' => ['required'],
        'email'=> ['required','unique:students','email'],
        'cell' =>['required','Numeric','Starts_with:01,+8801,8801'],
      ]);
      
      $unique_name='';
      if($request->hasFile('photo')){
        $img=$request->file('photo');
        $unique_name=md5(time().rand()) . '.' . $img->getclientOriginalExtension();
        $img->move(public_path('media/students'), $unique_name);
      }

      student::create([
        'name'    => $request->name,
        'email'   => $request->email,
        'cell'    => $request->cell,
        'username'=> $request->username,
        'photo'   => $unique_name,
      ]);
      return back() -> with('success','Student data created successful');
     
    } 
    
    /**
     * edit student
     */
    public function edit($id)
    {
        $data = Student::find($id);
        return view('student.edit',[
          'edit_data' => $data,
        ]);
    }

    /**
     * sigle student show
     */
    public function show($id)
    {
      $data=Student::find($id);
      return view('student.show',[
        'user_data'=>$data,
      ]);
    }

    /**
     * student data delete
     */
    public function destroy($id)
    {
      $delete_data=Student::find($id);
      $delete_data->delete();
      return back()->with('success','Student data delete successful');
    }

    /**
     * student data update
     */
    public function update(Request $request, $id)
    {
     $update_data =Student::find($id);
     $update_data -> name = $request -> name;
     $update_data ->email = $request -> email;
     $update_data ->cell = $request -> cell;
     $update_data ->username = $request -> username;
     $update_data->update();

     return back()->with('success','Student data updated successful');
    }
 
}
