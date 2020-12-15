<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investigation;
use App\Company;
use GhazanfarMir\CompaniesHouse\Facades\CompaniesHouse;
use App\Setting;

class InvestigationController extends Controller
{
     /**
     * Show the profile for the given Investigation.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
		    return view('investigation.edit', ['investigation' => Investigation::findOrFail($id)]);

    }

    public function index()
    {
        $Investigations = Investigation::where('user_id',auth()->user()->id)
          ->orderBy('created_at','desc')
          ->paginate(10);


		   return view('investigations', ['investigations' => $Investigations]);
    }

	public function edit($id)
    {
        $Investigation = Investigation::find($id);

        $directors = CompaniesHouse::company($Investigation->company_id)->officers();
        $company = (object)[];
        $company->directors = $directors->items;

			$invArray = $Investigation->toArray();

			return view('investigation.edit', [
  			   'investigation'=>$Investigation,
           'company'=>$company
  		  ]);
    }


    public function create(Request $request, $company_number, $title)
    {
      $values = $request->all();
      $values['company_number'] = $company_number;
      $values['title'] = $title;
      $values['director'] = '';

      $directors = CompaniesHouse::company($company_number)->officers();
      $values['company'] = (object)[];
      $values['company']->directors = $directors->items;

      return view('investigation.create', $values);
    }

    public function update(Request $request,$id)
    {
      $Investigation = Investigation::find($id);

  	  $values = $request->all();
  	  $values['meta'] = array_merge((array)$Investigation->meta,$values['meta']);

      $Investigation->fill($values)->save();

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
  		$user = auth()->user();

  		Investigation::create(array_merge($request->all(), ['user_id' => $user->id]));

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
        $Investigation = Investigation::findOrFail($id);
        $Investigation->delete();

		return redirect()->action(
			'InvestigationController@index'
		)->with('success', 'Investigation deleted!');
    }
}
