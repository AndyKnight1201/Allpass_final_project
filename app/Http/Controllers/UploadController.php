<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FilesController;
use App\Models\Meal;
use File;
use DB;


use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function meal_img_update(Request $request, $id){
        // 刪除舊圖片
        $meal = Meal::find($id);
        FilesController::deleteUpload($meal->img_path);

        // 新增圖片
        $path = FilesController::imgUpload($request->newMealImg , 'meal');
        Meal::where('id', $id)->update([
            'img_path' => $path,
        ]);

        // Filepond 須回傳字串
        return '';
    }

    public function new_img_update(Request $request, $id){
        // 刪除舊圖片
        $new = DB::table('news')->find($id);
        FilesController::deleteUpload($new->img_path);

        // 新增圖片
        $path = FilesController::imgUpload($request->newImg , 'new');
        DB::table('news')->where('id', $id)->update([
            'img_path' => $path,
        ]);

        // Filepond 須回傳字串
        return '';
    }
} 
