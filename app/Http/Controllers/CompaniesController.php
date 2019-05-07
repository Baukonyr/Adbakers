<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use  App\Http\Requests\CompaniesValidated;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
				
				return view('backend.companies.companyIndex')->with(['companies' => Companies::simplePaginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				return view('backend.companies.companyCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompaniesValidated $request)
    {
        //
			
				
				$request->file('logo')->store('public');
				$data = $request->all();
				array_shift($data);
				$data['logo'] = $data['logo']->hashName();

				$result = Companies::create($data);
				
				return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
				//dd($companies);
				//return view('backend.companies.companyShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $companies)
    {
        //
				
				return view('backend.companies.companyEdit')->with('company', $companies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(CompaniesValidated $request, Companies $companies)
    {
        //
				$data = $request->all();
				if($request->file('logo')){
					$request->file('logo')->store('public');
					$name = $request->file('logo')->hashName();
					
					$data['logo'] = $name;
				}
				
				$companies->update($data);
				
				return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        //
				$company->delete();
				return redirect()->route('companies.index');
    }
}
