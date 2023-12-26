<?php

namespace App\Http\Controllers;
use App\Models\Images;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function index(){
        return view('form');
    }

    public function singleFileUpload(Request $request){
        
        $validator = Validator::make($request->all(),[
           'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if($validator->fails()){
            return "validation error";
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'. $image->getClientOriginalName();
            $imagePath = 'images/';
            $image->move(public_path($imagePath), $filename);

            Images::query()->create([
                'image_name' => $filename,
                'image_path' => $imagePath
            ]);
            return 'file is saved';
        }
    }

    public function multiFileUpload(Request $request){
        
        if($request->hasFile('images')){
            foreach($request->file('images') as $file){
                // dosyanın adını belirliyoruz
                $fileName = uniqid().'.'.$file->getClientOriginalName();
                // resim yolunu belirtiyoruz
                $imagePath = 'images/';
                // dosya kaydetme işlemi
                $file->move(public_path($imagePath), $fileName);
                // veritabanına kaydetme işlemi
                Images::create([
                    'image_name' => $fileName,
                    'image_path' => $imagePath
                ]);
            }
            return 'files are saved';
        }
    }

    
}
