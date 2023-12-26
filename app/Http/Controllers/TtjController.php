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
        $ttjs = ttj::paginate(15);
        return view('show', compact('ttjs'));
    }

    public function home()
    {
        return view('index');
    }


    public function create(ttj $ttj)
    {
        return view('ttj')->with(['ttj' => $ttj]);

    }
    

    public function store(Request $request)
    {
        // dd($request);

       try{
        // $rules = [
        //     'name' => 'required|string|max:255',
        //     // 'birth_date' => 'required|date',
        //     'phone_num' => 'required|string|max:20',
        //     'parent_num' => 'required|string|max:20',
        //     // 'region' => 'required|string|max:255',
        //     // 'address' => 'required|string|max:255',
        //     // 'facultate' => 'required|string|max:255',
        //     // 'facultate_id' => 'nullable|integer',
        //     // 'cafedra' => 'required|string|max:255',
        //     'deriction' => 'required|string|max:255',
        //     'course' => 'required|string|max:255',
        //     'group' => 'required|string|max:255',
        //     'shape' => 'required|string|max:255',
        //     'deriction2' => 'required|string|max:255',
        //     'shape2' => 'required|string|max:255',
        //     'details' => 'nullable|string',
        //     'check' => 'nullable|boolean',
        //     'doc' => 'nullable|mimes:pdf,img,jpg,png|max:5240', // Max 5MB file size, allowed file types: pdf, doc, docx
        // ];

           // Run the validation
        //    $validator = Validator::make($request->all(), $rules);

           // Check if the validation fails
        //    if ($validator->fails()) {
        //        return redirect()->back()->withErrors($validator)->withInput();
        //    }


        $path = $request->file('doc')->store('doc-store');
        
        ttj::create([
            'name'=> $request->name,
            // 'birth_date' => $request->birth_date,
            'phone_num' => $request->phone_num,
            'parent_num' => $request->parent_num,
            // 'region' => $request->region,
            // 'address' => $request->address,
            // 'facultate' => $request->facultate,
            // 'facultate_id' => $request->facultate_id ?? 0,
            // 'cafedra' => $request->cafedra,
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
        return redirect('/');
       }catch(Exception $e)
       {
        dd($e);
       }
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


