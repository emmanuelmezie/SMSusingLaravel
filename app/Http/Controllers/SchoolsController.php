<?php

namespace App\Http\Controllers;

use App\school;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        if(Auth::check())
        {
            $schools = School::where('user_id', Auth::user()->id)->get();

            return view('schools.index', ['schools'=>$schools]);
        }
           return view('auth.login'); //pasing values to views
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('schools.create');
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
         if(Auth::check()){
            $school = School::create([
                            'name'=> $request->input('name'),
                            'slogan'=> $request->input('slogan'),
                            'description'=> $request->input('description'),
                            'school_head'=> $request->input('schoolhead'),
                            'address'=> $request->input('address'),
                            'user_id' => Auth::user()->id
            ]);

            if($school){
                return redirect()->route('schools.show', ['school'=> $school->id])
                ->with('success' , 'School created successfully');
            }
        }
        
            return back()->withInput()->with('error', 'Error creating new school');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function show(school $school)
    {
        //
        if(Auth::check())
        {
        
        $school = School::find($school->id);

        return view('schools.show', ['school'=>$school]);
    }
       return view('auth.login'); //pasing values to views
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(school $school)
    {
        //

           if(Auth::check())
        {
        
        $school = School::find($school->id);

        return view('schools.edit', ['school'=>$school]);
    }
       return view('auth.login'); //pasing values to views
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, school $school)
    {
        //save date
        $schoolUpdate = School::where('id', $school->id)
                        ->update([
                            'name'=> $request->input('name'),
                            'slogan'=> $request->input('slogan'),
                            'description'=> $request->input('description'),
                            'school_head'=> $request->input('schoolhead'),
                            'address'=> $request->input('address')
                        ]);

        //if update was successful
        if($schoolUpdate){
            return redirect()->route('schools.show',['school'=>$school->id])
                ->with('success', 'School Updated Successfully');
        }

        //redirect
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(school $school)
    {
        //
        //dd($school);
        $findSchool = School::find( $school->id);
        if($findSchool->delete()){
            
            //redirect
            return redirect()->route('schools.index')
            ->with('success' , 'School deleted successfully');
        }
        return back()->withInput()->with('error' , 'School could not be deleted');
    }
}
