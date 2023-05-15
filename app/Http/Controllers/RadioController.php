<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insertInput;

class RadioController extends Controller
{
    public function handleOption(Request $request)
    {

        insertInput::insert([
            'delivery_cost' => $request->option,
        ]);
        // $selectedOption = $request->input('option');

        // Perform any necessary logic or actions based on the selected option

        // Return a JSON response
        return response()->json([
            'message' => 'Option handled successfully',
        ]);
    }
}
