<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
//        $contacts = Contact::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $companies = Company::orderBy('name')->where(function ($query) {
            if ($companyId = request('company_id')) {
                $query->where('company_id', $companyId);
            }

        })->paginate(3);
        return view('companies.index', compact('companies'));
    }
}
