<?php
namespace App\Services;

use App\Models\Test;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TestService{

    public function testData(){ // Örnek verileri test amaçlı çeken fonksiyon.
        return $data = ["test1","test2","test3"];
    }

    public function getAllTests(){ // 'tests' tablosundan parametre içindeki verileri çeken fonksiyon.

        // Test tablosundan tum verileri çeker.
        // return Test::all();


        // Test tablosundan 'id','title','description' sütunlarını çeker.
         return DB::table('tests')->select('id','title','description')->get();


        /* Veriler değişse bile sadece belirli zaman periyotları (10 dakika) ile
        veri çekerek sürekli gelen istek ve yenilemelerde projeyi yormayıp, optimizasyonunu arttırır.
        return Cache::remember('all_tests', now()->addMinutes(10), function(){
            return Test::all();
        });
        */
    }

    public function createTest(array $data){
        return Test::query()->create($data);
    }

    public function getTestById($id){
        return Test::query()->find($id);
    }

    public function updateTest($id, $data){
        $test = Test::query()->find($id);

        if($test){
            $test->update($data);
            return true;
        } else {
            return false;
        }
    }

    public function deleteTest($id){
        $test = Test::query()->find($id);

        if($test){
            $test->delete();
            return true;
        } else {
            return false;
        }
    }
}
