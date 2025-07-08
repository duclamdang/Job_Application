<?php

namespace App\Http\Controllers\Admin\CompanyModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
class CompanyManagermentController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return response()->json($company, 201);
    }

    public function show($id)
    {
        return Company::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());
        return $company;
    }

    public function destroy($id)
    {
        Company::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }

}
