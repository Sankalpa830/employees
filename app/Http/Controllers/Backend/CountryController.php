<?php

namespace App\Http\Controllers\Backend;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountryStoreRequest;

class CountryController extends Controller
{
    public function index(Request $req){
        $countries = Country::all();
        if ($req->has('search')){
            $countries = Country::where('country_code','like',"%{$req->search}%")->orWhere('name','like',"%{$req->search}%")->get();
        }
        return view('countries.index',compact('countries'));
    }

    public function create() {
        return view('countries.create');
    }
    
    public function store(CountryStoreRequest $req) {
        Country::create($req->validated());
        return redirect()->route('countries.index')->with('message','Country Created Sucessfully');
    }

    public function edit(Country $country) {

        return view ('countries.edit',compact('country'));
    }

    public function update(CountryStoreRequest $req, Country $country ){
        $country->update( $req->validated());
        return redirect()->route('countries.index')->with('message','Country Updated Sucessfully');

    }

    public function destroy(Country $country){
        $country->delete();
        return redirect()->route('countries.index')->with('message','Country Deleted Sucessfully');

    }
}
