<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Representation;

class RepresentationController extends Controller
{
    public function findByShow($showId) {
        $representations = Representation::where([
            'show_id' => $showId,
        ])->get();

        return view('representations.index',[
            'representations' => $representations,
        ]);
    }
}
