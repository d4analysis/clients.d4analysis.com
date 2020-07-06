<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use GhazanfarMir\CompaniesHouse\Facades\CompaniesHouse;

class CompanyController extends Controller
{
     /**
     * Show the profile for the given investment.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
		return view('investment.edit', ['investment' => Investment::findOrFail($id)]);

    }

    public function index()
    {
        $investments = Investment::with('user')
          ->orderBy('created_at','desc')
          ->paginate(10);

		   return view('investments', ['investments' => $investments]);
    }

	public function edit($id)
    {
        $investment = Investment::find($id);
        return view('investment.edit', compact('investment'));
    }


    public function create()
    {
        return view('investment.create');
    }

    public function update(Request $request,$id)
    {
        $investment = Investment::find($id);

    	   $investment->value = $request->value;

        $investment->save();

        return redirect()->action(
    			'InvestmentController@index'
    		)->with('success', 'Investment updated!');

    }

    /**
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
		$investment = new Investment;

		$user = auth()->user();

        $investment->user_id = $user->id;
    	$investment->value = $request->value;

        $investment->save();

		return redirect()->action(
			'InvestmentController@index'
		)->with('success', 'Investment added!');
    }

    /**
     * @param Request $request
     * @return
     */
    public function destroy(Request $request,$id)
    {
        $investment = Investment::findOrFail($id);
        $investment->delete();

		return redirect()->action(
			'InvestmentController@index'
		)->with('success', 'Investment deleted!');
    }

    public function search(Request $request)
    {
        $companies = CompaniesHouse::search()->companies($request->search);

        return view('company.search',['companies'=>$companies->items]);
    }
}
