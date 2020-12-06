<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{
    public function addCompany() {
        Company::create([
            'name' => 'MyCompany',
            'code' => '1234',
            'address' => 'John Doe Avenue',
            'city' => 'Tbilisi',
            'country' => 'Georgia'
        ]);
        return 'Company added';
    }
    
    public function delete(Request $request)
    {
      Company::where('code', $request->code)->delete();
  
      return 'Company deleted';
    }

    public function showCompanies() {
        $companies = Company::all();
        return view('showcomps')->withcompanies($companies)->withtitle('Companies');
    }
}
