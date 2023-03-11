<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $forms = Form::all();
        return view('forms.index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $form = new Form();
        $form->name = $request->name;
        $form->password = $request->password;
        $form->save();
        return redirect()->route('forms.index');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $forms = Form::onlyTrashed()->get();
        return view('forms.softDeleted', compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $form = Form::where('id', '=', $id)->first();
        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        Form::where('id', '=', $id)->update([
            'name'=>$request->name,
            'password'=>$request->password
        ]);
        return redirect()->route('forms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Form::destroy($id);
        return redirect()->back();
    }

    public function restore($id)
    {
        Form::withTrashed()->where('id', '=', $id)->restore();
        return redirect()->route('forms.index');
    }

    public function forcedDelete($id)
    {
        Form::withTrashed()->where('id', '=', $id)->forceDelete();
        return redirect()->back();
    }
}
