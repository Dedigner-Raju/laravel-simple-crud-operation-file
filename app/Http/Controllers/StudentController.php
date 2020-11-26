<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Included all view data

        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load all file

        return view('student.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // data store query include here

         /**
         * File collect from form photo
         */
        if( $request-> hasFile( 'photos')) {
            $image = $request -> file( 'photos');
            $photo_name = md5(time().rand()).'.'. $image ->getClientOriginalExtension() ;
            $image -> move(  public_path('student/img/'), $photo_name) ;
        } else {
            $photo_name = "" ;
        }

        student::create([
            'name' => $request -> name,
            'uname' => $request -> uname,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'photo' => $photo_name
        ]);  

        return redirect ()-> back() -> with('success', 'Data Added Successful');                            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show single student data

        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // data edit query include here
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
        // Data update query include here
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Data delete query include here
    }
}
