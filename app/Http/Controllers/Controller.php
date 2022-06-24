<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Feedback;
use App\Models\Meal_tag;
use App\Models\History;
use App\Models\Meal;
use App\Models\Notification;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 主頁
    public function index(){

        // 最新消息輪播
        $allnews = Notification::get();

        // 對留言依權重由小到大排序，包含空值
        $sortedNews = $allnews->sortBy('weight');
        // 將權重給key值，再過濾掉空值與0的key
        $keyedNews = $sortedNews->keyBy('weight');
        $carouselNews = $keyedNews->forget('');
        $carouselNews = $keyedNews->forget('0');

        // 留言輪播
        $allFeedbacks = Feedback::get();

        // 對留言依權重由小到大排序，包含空值
        $sorted = $allFeedbacks->sortBy('weight');
        // 將權重給key值，再過濾掉空值與0的key
        $keyed = $sorted->keyBy('weight');
        $carouselFeedbacks = $keyed->forget('');
        $carouselFeedbacks = $keyed->forget('0');

        return view('index', compact('carouselFeedbacks', 'carouselNews'));
    }

    // 飲品介紹
    public function drink_list(){

        return view('front_end_page.drink_list');
    }

    // 餐點介紹
    public function mealsindex(){

        $mealTag = Meal_tag::get();
        $breakfast = $mealTag[1]->meal->take(3);
        $salad = $mealTag[2]->meal->take(3);
        $dessert = $mealTag[3]->meal->take(3);
        $afternoonTea = $mealTag[4]->meal->take(3);
        $nchuStudent = $mealTag[5]->meal->take(3);
        $curryJp = $mealTag[6]->meal->take(3);
        $exoticRice = $mealTag[7]->meal->take(3);
        $pasta = $mealTag[8]->meal->take(3);

        return view('front_end_page.mealsindex_fin', compact('mealTag', 'breakfast', 'salad', 'dessert', 'afternoonTea', 'nchuStudent', 'curryJp', 'exoticRice', 'pasta'));
    }

    // 門市據點
    public function position_map(){
        $mealTag = Meal_tag::get();


        return view('front_end_page.position_map', compact('mealTag'));
    }

    // 顧客權益
    public function right_of_customer(){

        return view('front_end_page.right_of_customer');
    }

    // 品牌故事
    public function story(){

        return view('front_end_page.story');
    }

    // 顧客留言
    public function feedback(){
        $feedbacks = Feedback::get();

        return view('front_end_page.feedback' , compact('feedbacks'));
    }

    // 新增顧客留言
    public function store_feedback(Request $request){
        // 儲存留言
        Feedback::insert([
            'name'=> $request->name,
            'salutation' => $request->salutation,
            'date' => $request->date,
            'period' => $request->period,
            'suggestion' => $request->suggestion,
            'phone'=> $request->phone,
            'email'=> $request->email,
        ]);

        return redirect('/feedback');
    }
    // :::::::::::::::::::::::::::::::::::::::::: 後台 ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    // 後臺主頁
    public function dashboard(){

        $histories = History::orderBy('id', 'desc')->get();
        return view('backend.main', compact('histories'));
    }

    // 刪除歷史紀錄
    public function delete_history($id){

        History::where('id', $id)->delete();

        return redirect('/dashboard');
    }
}
