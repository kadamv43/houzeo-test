<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchData;
use App\Http\Requests\SearchQuery;
use App\Models\SearchDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function submit_form(SearchData $request)
    {
        $request = $request->validated();
        $search_data  = new SearchDatum();
        $search_data->street_address =  $request['street_address'];
        $search_data->city =  $request['city'];
        $search_data->state =  $request['state'];
        $search_data->zip =  $request['zipcode'];
        $search_data->property_type =  $request['property_type'];

        if ($search_data->save()) {
            $data = $search_data->orderBy('id', 'desc')->with('property_type')->get();
            return response()->json(['code' => '100', 'msg' => 'success', 'data' => $data]);
        } else {
            return response()->json(['code' => '101', 'msg' => 'failure', 'data' => []]);
        }
    }

    public function search_query(SearchQuery $request)
    {
        $request = $request->validated();
        $search_query = $request['search_query'];
        $url = 'https://us-autocomplete.api.smartystreets.com/suggest?auth-id='.config('app.smarty_street_auth_id').'&auth-token='.config('app.smarty_street_auth_token').'&prefix=' . $search_query;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);
        $result_array = json_decode($result);
        if (is_null($result_array)) {
            $result_array = '';
            return response()->json(['code' => '100', 'msg' => 'success', 'data' => $result_array]);
        } else {
            return response()->json(['code' => '101', 'msg' => 'failure', 'data' => $result_array]);
        }
    }
}
