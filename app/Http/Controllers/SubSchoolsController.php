<?php

namespace App\Http\Controllers;

use App\subschool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubschoolsController extends Controller
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
            $subschools = Subschool::where('user_id', Auth::user()->id)->get();

            return view('subschools.index', ['subschools'=>$subschools]);
        }
           return view('auth.login'); //pasing values to views
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function create($school_id = null )
    {
        //
        return view('subschools.create',['school_id'=>$school_id]);
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
            $subschool = Subschool::create([
                            'name'=> $request->input('name'),
                            'school_id'=> $request->input('school_id'),
                            'user_id' => Auth::user()->id
            ]);

            if($subschool){
                return redirect()->route('subschools.show', ['subschool'=> $subschool->id])
                ->with('success' , 'Subschool created successfully');
            }
        }
        
            return back()->withInput()->with('error', 'Error creating new Subschool');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subschool  $Subschool
     * @return \Illuminate\Http\Response
     */
    public function show(Subschool $subschool)
    {
        //
        if(Auth::check())
        {
        
        $subschool = Subschool::find($subschool->id);

        return view('subschools.show', ['subschool'=>$subschool]);
    }
       return view('auth.login'); //pasing values to views
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subschool  $Subschool
     * @return \Illuminate\Http\Response
     */
    public function edit(Subschool $subschool)
    {
        //

           if(Auth::check())
        {
        
        $subschool = Subschool::find($subschool->id);

        return view('subschools.edit', ['subschool'=>$subschool]);
    }
       return view('auth.login'); //pasing values to views
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subschool  $Subschool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subschool $subschool)
    {
        //save date
        $subschoolUpdate = Subschool::where('id', $subschool->id)
            ->update([
            'name'=> $request->input('name'),
            'school_head'=> $request->input('school_head'),         
                        ]);

        //if update was successful
        if($subschoolUpdate){
            return redirect()->route('subschools.show',['subschool'=>$subschool->id])
                ->with('success', 'Sub School Updated Successfully');
        }

        //redirect
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subschool  $Subschool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subschool $subschool)
    {
        //
        //dd($Subschool);
        $findSubschool = Subschool::find( $Subschool->id);
        if($findSubschool->delete()){
            
            //redirect
            return redirect()->route('subschools.index')
            ->with('success' , 'Subschool deleted successfully');
        }
        return back()->withInput()->with('error' , 'Subschool could not be deleted');
    }
}