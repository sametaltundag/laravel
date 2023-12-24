<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $datas = Module::query()->get();

        return view('module.index',compact('datas'));
    }


    public function create()
    {
        return view('module.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'image/';
            $moduleImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $moduleImage);
            $data['image'] = "$moduleImage";
        }
        Module::create($data);
        return redirect()->route('module.index');
    }


    public function show(Module $module)
    {
        return view('module.show');
    }


    public function edit(Module $module)
    {
        return view('module.edit');
    }


    public function update(Request $request, Module $module)
    {
        //
    }


    public function destroy(Module $module)
    {
        //
    }
}
