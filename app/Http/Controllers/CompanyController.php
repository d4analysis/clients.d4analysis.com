<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Investigation;
use GhazanfarMir\CompaniesHouse\Facades\CompaniesHouse;

class CompanyController extends Controller
{
     /**
     * Show the profile for the given investigation.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
    		//prepend a zero if the ID is <8 chars
    		$companyId = sprintf("%08d", $id);

    		$company = CompaniesHouse::company($companyId)->get();
    		$offices = CompaniesHouse::company($companyId)->registered_office_address();
    		$directors = CompaniesHouse::company($companyId)->officers();
    		$history = CompaniesHouse::filingHistory($companyId)->all();

    		$company->json = json_encode($company,true);
    		$company->offices = json_encode($offices,true);

    		$company->directors = $directors->items;
    		$company->history = $history->items;

    		return view('company.profile',['company'=>$company]);

    }

    public function index()
    {

      $companies = Investigation::where('user_id',auth()->user()->id)
        ->orderBy('created_at','desc')
        ->paginate(10)
        ->unique('company_id');

		   return view('companies', ['companies' => $companies]);
    }

	public function edit($id)
    {
        $investigation = Investigation::find($id);
        return view('investigation.edit', compact('investigation'));
    }


    public function create()
    {

      return view('investigation.create');
    }

    public function update(Request $request,$id)
    {
        $investigation = Investigation::find($id);

    	   $investigation->value = $request->value;

        $investigation->save();

        return redirect()->action(
    			'InvestigationController@index'
    		)->with('success', 'Investigation updated!');

    }

    /**
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
		$investigation = new Investigation;

		$user = auth()->user();

        $investigation->user_id = $user->id;
    	$investigation->value = $request->value;

        $investigation->save();

		return redirect()->action(
			'InvestigationController@index'
		)->with('success', 'Investigation added!');
    }

    /**
     * @param Request $request
     * @return
     */
    public function destroy(Request $request,$id)
    {
        $investigation = Investigation::findOrFail($id);
        $investigation->delete();

		return redirect()->action(
			'InvestigationController@index'
		)->with('success', 'Investigation deleted!');
    }

    public function search(Request $request)
    {

        if ($request->search) {
          $companies = CompaniesHouse::search()->companies($request->search);
          return view('company.search',['company_search'=>$companies->items]);
        }

        $companies_list = Investigation::where('user_id',auth()->user()->id)
          ->orderBy('created_at','desc')
          ->paginate(10)
          ->unique('company_id');

        return view('company.search',['companies'=>$companies_list]);
    }
}
