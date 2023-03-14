<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index () {
        
        return view('providers.index', [
            'providers' => Provider::latest()
            ->Paginate(8)
        ]);
    }

    public function show (Provider $provider) {
        return view('providers.show', [
            'provider' => $provider
        ]);
    }

    // show create provider form
    public function create (Request $request) {
        return view('providers.create');
    }

    // store provider
    public function store (Request $request) {
        $provider = Provider::create($request->all());
        return redirect('/')->with('success', 'provider created successfully!');
    }

    // show edit form
    public function edit (Provider $provider){
        return view('providers.edit', ['provider' => $provider]);
    }
    
    // update provider 
    public function update (Request $request, Provider $provider) {
        $provider->update($request->all());
        return view('providers.edit', ['provider' => $provider]);
    }

    // delete provider
    public function destroy (Provider $provider) {
        $provider->delete();
        return redirect('/')->with('success','Provider deleted successfully.');
    }

    public function image (Provider $provider) {
        $response = file_get_contents($provider->url);
        $json_response = json_decode($response, true);
        $image_url = $json_response['message'];
        return response()->json(['image_url' => $image_url]);
    }
    
}
