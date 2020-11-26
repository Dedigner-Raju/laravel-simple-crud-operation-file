<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// coll model namespace 
use App\model\crud;

class crudController extends Controller
{
    //
    /**
     * show insert form
     */
    public function showform(){
        return view('index');
    }

     /**
      * Show all deta by form
      */
    public function showdatapage(){

        $all_data = crud::all();

        return view('all',[
            'users' => $all_data 
        ]);
    }
    
    /**
     * Get data from form
     */
    public function addCrudData( Request $val ){
    

    // feiled validation 
        $this -> validate( $val, [
           'name' => 'required',
           'uname' => 'required',
           'email' => 'required',
           'cell' => 'required',

        ]);

        /**
         * File collect from form photo
         */
        if( $val-> hasFile( 'photos')) {
            $image = $val -> file( 'photos');
            $photo_name = md5(time().rand()).'.'. $image ->getClientOriginalExtension() ;
            $image -> move(  public_path('img/'), $photo_name) ;
        } else {
            $photo_name = "" ;
        }
         

       crud::create([
            'name' => $val -> name,
            'uname' => $val -> uname,
            'email' => $val -> email,
            'cell' => $val -> cell,
            'photo' => $photo_name
        ]);   

     // Delete successfully masagge
     return redirect ()-> back() -> with('success', 'Data Added Successful'); 
    }

    // single data view form Database 

    public function singleDataView( $id )  {
    
        $single_data_show = crud::find( $id );
    
        return view('single_data', compact('single_data_show'));
    }

    /**
     * Single Data Remove from crud table
     */

     public function dataRemove( $id ){
        $single_data_remove = crud::find( $id );
        $single_data_remove-> delete();
        return redirect ()-> back() -> with('Data Delete Successful'); 
    }

    /**
     * Single Data Edit from Database
     */
    public function DataEdit( $id ){
        $single_data_edit = crud::find ( $id );
        
        return view ('edit', compact('single_data_edit'));
    }
    
    /**
     * Single Data Update 
     */
    public function dataUpdate( Request $request, $id ) {
        
       $update_single_data = crud::find( $id );

       if( $request-> hasFile( 'new_photo')) {
        $image = $request -> file( 'new_photo');
        $photo_name = md5( time().rand() ).'.'. $image-> getClientOriginalExtension();
        $image -> move(  public_path('img/'), $photo_name) ;
        
    } else {
        $photo_name = $request->old_photo;
    }

    $update_single_data ->name = $request->name;
    $update_single_data ->uname = $request->uname;
    $update_single_data ->email = $request->email;
    $update_single_data ->cell = $request->cell;
    $update_single_data ->photo = $photo_name;
    $update_single_data -> update();


     // Update successfully masagge
     return redirect ()-> back() -> with('success', 'Data Update Successful'); 

    }
}
