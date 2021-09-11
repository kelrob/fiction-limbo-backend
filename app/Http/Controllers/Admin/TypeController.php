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

    public function updateType(Request $request)
    {

        // Make sure name is passed
        if (!$request->name || !$request->id) {
            return response()->json([
                'error' => true,
                'message' => 'All Fields are required',
            ]);
        }

        // Check if type Exist
        $type = PostType::where('id', $request->id)->first();
        if (!$type) {
            return response()->json([
                'error' => true,
                'message' => 'Type not found',
            ]);
        }


        // Update the name
        $type->name = $request->name;
        $updateType = $type->save();

        if ($updateType) {
            return response()->json([
                'error' => false,
                'message' => 'Type Updated successfully',
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'There was an error making this request'
            ]);
        }
    }

    public function deleteType(Request $request)
    {

        // Make sure name is passed
        if (!$request->id) {
            return response()->json([
                'error' => true,
                'message' => 'All Fields are required',
            ]);
        }

        // Check if type Exist
        $type = PostType::where('id', $request->id)->first();
        if (!$type) {
            return response()->json([
                'error' => true,
                'message' => 'Type not found',
            ]);
        }


        // Delete the type
        $type->is_deleted = true;
        $deleteType = $type->save();

        if ($deleteType) {
            return response()->json([
                'error' => false,
                'message' => 'Type Deleted successfully',
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'There was an error making this request'
            ]);
        }
    }

    public function restoreType(Request $request)
    {
        // Make sure name is passed
        if (!$request->id) {
            return response()->json([
                'error' => true,
                'message' => 'All Fields are required',
            ]);
        }

        // Check if type Exist
        $type = PostType::where('id', $request->id)->first();
        if (!$type) {
            return response()->json([
                'error' => true,
                'message' => 'Type not found',
            ]);
        }


        // Delete the type
        $type->is_deleted = false;
        $deleteType = $type->save();

        if ($deleteType) {
            return response()->json([
                'error' => false,
                'message' => 'Type Restored successfully',
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'There was an error making this request'
            ]);
        }
    }
}
