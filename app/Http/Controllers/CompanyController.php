<?php

namespace App\Http\Controllers;
use App\Http\Requests\CompanyValidatieRequest;
use App\Models\company;



class CompanyController extends Controller
{
    //

    public function index()
    {
        $Companies = company::all();
        return view ('companies.companies', ['companies' =>$Companies]);
    }

    public function show($id)
    {
        $Company = company::with('companies')->findOrFail($id);
        return view('companies.company', ['Company' =>$Company]);

    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(CompanyValidatieRequest $request) 
    {
        Company::create($request->validated());
        return redirect('company');
    }

    public function edit($id)
    {
        $Company = company::findOrFail($id);
        return view('company.edit', ['company' => $Company]);
    }

    public function update(CompanyValidatieRequest $request, $id)
    {
        $Company = company::findOrFail($id);
        $Company->update($request->validated());
        return redirect('/company');
    }

     public function destroy($id)
    {
        $Company = company::findOrFail($id);
        $Company->delete();
        return redirect('/companies');
    }
}
