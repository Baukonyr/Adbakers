<?php

namespace App\Http\Controllers;

use App\Employers;
use App\Companies;
use Illuminate\Http\Request;

use  App\Http\Requests\EmployersValidated;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employers $employers)
    {
        //
				return view('backend.employers.employerIndex', ['employers' => $employers->all()->load('Company')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				return view('backend.employers.employerCreate', ['companies' => Companies::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployersValidated $request)
    {
        //
				$data = $request->all();
				array_shift($data);
				
				$result = Employers::create($data);
				
				return redirect()->route('employers.index');
				
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function show(Employers $employers)
    {
        //
				//dd($employers);
				//return view('backend.employers.employerShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function edit(Employers $employers)
    {
        //
				return view('backend.employers.employerEdit')->with(['employer' => $employers, 'companies' => Companies::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function update(EmployersValidated $request, Employers $employers)
    {
        //
				$data = $request->all();
				$employers->update($data);
				return redirect()->route('employers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employers  $employers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employers $employers)
    {
        //
				$employers->delete();
				return redirect()->route('employers.index');
    }
}
