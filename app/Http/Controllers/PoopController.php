<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\PoopCount;
use Illuminate\Http\Request;

class PoopController extends Controller
{
    public function incrementPoop(Request $request)
    {
        
        $local_id = $request->input('place_id');
        $user = $request->user();
        
        $local = Local::find($local_id);
    
        if (!$local) {
            return response()->json(['message' => 'Local not found'], 404);
        }

        $poopCount = new PoopCount();
        $responsePoopCount = $poopCount->incrementPoopCount($user->id, $local->id);
        if (!$responsePoopCount) {
            return response()->json(['message' => 'Error incrementing poop count'], 500);
        }
        return response()->json(['message' => 'Poop count incremented successfully'], 200);
    }

    public function getPoopByLocal(int $local_id)
    {
        $local = Local::findOrFail($local_id);
        $poopCount = new PoopCount();
        $responsePoopCount = $poopCount->getPoopCountByLocal($local->id);

        if (!$responsePoopCount) {
            return response()->json(['message' => 'Error getting poop count'], 500);
        }
        return response()->json(['poop_count' => $responsePoopCount], 200);
    }

    public function getPoopByUser(Request $request)
    {
        $user = $request->user();
        $poopCount = new PoopCount();
        $responsePoopCount = $poopCount->getPoopCountByUser($user->id);

        if (!$responsePoopCount) {
            return response()->json(['message' => 'Error getting poop count'], 500);
        }
        return response()->json(['poop_count' => $responsePoopCount], 200);
    }
}
