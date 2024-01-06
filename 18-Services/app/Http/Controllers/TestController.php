<?php

namespace App\Http\Controllers;

use App\Services\TestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    protected $testService;
    public function __construct(TestService $testService) {
        $this->testService = $testService;
    }

    public function index(){
        //$tests = $this->testService->testData();
        $tests = $this->testService->getAllTests();
        return view('test.index',compact('tests'));
    }

    public function create(){
        return view('test.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255|string',
            'description' => 'required|min:5|max:255|string',
        ]);

        if($validator->fails()){
            return redirect()->route('create')->withErrors($validator)->withInput();
        }

        $result = $this->testService->createTest($request->all());
        if($result){
            return redirect()->route('test')->with('success','Test created successfully.');
        } else {
            return redirect()->route('test')->withErrors('error','Test creation failed.');
        }
    }

    public function edit($id){
        $test = $this->testService->getTestById($id);

        return view('test.edit',compact('test'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255|string',
            'description' => 'required|min:5|max:255|string',
        ]);

        if($validator->fails()){
            return redirect()->route('create')->withErrors($validator)->withInput();
        }

        $result = $this->testService->updateTest($id, $request->all());
        if($result){
            return redirect()->route('test')->with('success','Test updated successfully.');
        } else {
            return redirect()->route('test')->withErrors('error','Test update failed.');
        }
    }

    public function delete($id){
        $result = $this->testService->deleteTest($id);

        if($result){
            return redirect()->route('test')->with('success','Test deleted successfully.');
        } else {
            return redirect()->route('test')->withErrors('error','Test deletion failed.');
        }
    }
}
