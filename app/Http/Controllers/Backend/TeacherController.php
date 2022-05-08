<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Teacher'
        ];

        $teacher = User::where('role_id',2)->get();

        return view('backend.pages.teacher.index',$data,compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Teacher'
        ];

        $departments = Department::get();

        return view('backend.pages.teacher.create',$data, compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'id_no'         => 'required',
            'designation'   => 'required',
            'department_id' => 'required',
            'mobile'        => 'required|min:11',
            'status'        => 'required',
            'password'      => 'required|min:8',
            'image'         => 'required|image|mimes:png,jpeg,jpg'
        ]);

        $file =  $request->file('image');
        $uploadName = $this->fileUpload($file,'image');

        $teacher = new User($request->all());

        $teacher->image = $uploadName;
        
        if($teacher->save())
        {
            return redirect()->route('admin.teacher.index')->with('success','Item added successfully');
        }else{
            return redirect()->route('admin.teacher.index')->with('error','Item can not be added');
        }
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
    }

    private function fileUpload($file, $name){
        $prefix='User_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name=$name.'_img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/User_Image',$picture);
        }
        return $picture;
    }
}
