<?php

namespace App\Modules\TestModule\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\TestModule\Models\Test;
use Illuminate\Http\Request;


class ModuleController extends Controller
{
    public function index(){
        $tests = Test::all();
        return view('TestModule::backend.index',compact('tests'));
    }

    public function create(){
        return view('TestModule::backend.create');
    }

    public function store(Request $request){

        $data = $request->validate([
           'name' => 'required',
            'description' => 'required',
        ]);

        Test::query()->create($data);
        return redirect()->route('test.index')->with('success', 'Kayıt başarılı');
    }

    public function edit($id){
        $test = Test::query()->find($id);
        return view('TestModule::backend.edit',compact('test'));
    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $test = Test::query()->find($id);
        $test->update($data);
        return redirect()->route('test.index')->with('success', 'Kayıt başarılı');
    }

    public function destroy($id){

        $test = Test::query()->find($id);
        $test->delete();
        return redirect()->route('test.index')->with('success', 'Kayıt silindi');
    }
}
