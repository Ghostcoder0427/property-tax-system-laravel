<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getProvinces($regionId)
    {
        $provinces = Province::where('region_code', $regionId)->get();
        // Check if provinces were found
        if ($provinces->isEmpty()) {
            return response()->json(['error' => 'No provinces found for this region'], 404);
        }
    
        return response()->json($provinces, 200);
    }
   
}
