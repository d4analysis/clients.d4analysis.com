<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
use App\Company;
use App\Setting;

class InvestmentController extends Controller
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
        $investments = Investment::where('user_id',auth()->user()->id)
          ->orderBy('created_at','desc')
          ->paginate(10);
		  

		   return view('investments', ['investments' => $investments]);
    }

	public function edit($id)
    {
        $investment = Investment::find($id);

    		$share_class = '';

    		if ($investment->meta) {
    			$share_class = ($investment->meta['classification']['share_class']) ?: '';
    		}
			
			$invArray = $investment->toArray();

			return view('investment.edit', [
  			     'investment'=>$investment,
			     'share_class'=>$share_class
  		  ]);
    }


    public function create(Request $request)
    {
      $values = $request->all();
      $values['share_class'] = '';

      return view('investment.create', $values);
    }

    public function update(Request $request,$id)
    {
      $investment = Investment::find($id);
	  
	  $values = $request->all();
	  $values['meta'] = array_merge((array)$investment->meta,$values['meta']);
	  

       $investment->fill($values)->save();

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
		$user = auth()->user();
		
		Investment::create(array_merge($request->all(), ['user_id' => $user->id]));
		
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
}
