<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('contacts');
    }
 
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = User::where('email', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }
}
