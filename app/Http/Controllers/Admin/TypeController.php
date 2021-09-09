<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function addType(Request $request)
    {
        // Make sure name is passed
        if (!$request->name) {
            return response()->json([
                'error' => true,
                'message' => 'Type name is required',
            ]);
        }

        // Check if name already exist
        $type = PostType::where('name', $request->name)->get();
        if (count($type) > 0) {
            return response()->json([
                'error' => true,
                'message' => 'Name already exist',
            ]);
        }


        // Add the type to the data
        $addType = PostType::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
        ]);


        if ($addType) {
            return response()->json([
                'error' => false,
                'message' => 'Type Submitted Successfully'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'There was an error creating this type'
            ]);
        }
    }
}
