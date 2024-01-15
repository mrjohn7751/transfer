<?php

namespace App\Http\Controllers;

use App\Models\ttj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TtjController extends Controller
{
    public function index()
    {
        $ttjs = ttj::all(); // Retrieve all items without pagination
        return view('show', compact('ttjs'));
    }

    public function home()
    {
        return view('index');
    }

    public function result()
    {
        return view('result');
    }


    public function create(ttj $ttj)
    {
        return view('ttj')->with(['ttj' => $ttj]);

    }
    

    public function store(Request $request)
    {
      

        $path = $request->file('doc')->store('doc-store');
        
        ttj::create([
            'name'=> $request->name,
            'phone_num' => $request->phone_num,
            'parent_num' => $request->parent_num,
            'deriction' => $request->deriction,
            'shape' => $request->shape,
            'group' => $request->group,
            'course' => $request->course,
            'deriction2' => $request->deriction2,
            'shape2' => $request->shape2,
            'details' => $request->details,
            'check' => $request->check ?? 0,
            'doc' => $path,
        ]);
        return redirect('result');
      
    }
  
    public function downloadFile($id)
    {
        $ttj = ttj::findOrFail($id);

        // Ensure the file exists in the storage
        if (Storage::exists($ttj->doc)) {
            $fileContents = Storage::get($ttj->doc);

            return Response::stream(function () use ($fileContents) {
                echo $fileContents;
            }, 200, [
                'Content-Type' => Storage::mimeType($ttj->doc),
                'Content-Disposition' => 'attachment; filename="' . basename($ttj->doc) . '"',
            ]);
        } else {
            // Handle the case when the file does not exist
            return redirect()->back()->with('error', 'File not found.');
        }
    }
}


