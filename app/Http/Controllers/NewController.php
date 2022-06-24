<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FilesController;
use App\Models\History;
use DB;
use Carbon\Carbon;
use App\Models\Notification;


class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Notification::get();

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = FilesController::imgUpload($request->img, 'new');

        Notification::insert([
            'title'=> $request-> title,
            'img_path'=> $path,
            'start_date'=> $request-> startDate,
            'end_date'=> $request-> endDate,
            // 'weight'=> $request-> weight,
        ]);

        // 編輯消息歷史
        if ( mb_strlen($request->title, 'utf-8') > 10 ){
            $shortTitle = mb_substr($request->title, 0, 10, 'utf-8').'......';
        }else{
            $shortTitle = $request->title;
        }
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已新增消息 - '.$shortTitle,
        ]);

        return redirect('/new');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 防止 消息名稱、時間未填
        if( $request->title == "" ){       
            $result = [
                'result'=>'error',
                'message'=> '請輸入消息名稱',
            ];

        }elseif ( $request->startDate == "" ){
            $result = [
                'result'=>'error',
                'message'=> '請選擇開始日期',
            ];

        }elseif ( $request->endDate == "" ) {
            $result = [
                'result'=>'error',
                'message'=> '請選擇結束日期',
            ];

        }else {
        // 填寫格式正確存取資料

           // 要修改順序的消息: 取得權重
            $newWeight = Notification::where('id', $id)->value('weight');
            // 重複輪播順序的消息: 取得id
            $repeatNewId = Notification::where('weight', '=', $request->weight)->value('id');

            // 替換兩個消息的輪播順序
            Notification::where('id', $repeatNewId)->update([
                'weight'=> $newWeight,
            ]);

            Notification::where('id', $id)->update([
                'title'=> $request->title,
                'start_date'=> $request->startDate,
                'end_date'=> $request->endDate,
                'weight'=> $request->weight,
            ]);

            if ( mb_strlen($request->title, 'utf-8') > 10 ){
                $shortTitle = mb_substr($request->title, 0, 10, 'utf-8').'......';
            }else{
                $shortTitle = $request->title;
            }
            // 編輯消息歷史
            History::insert([
                'created_at'=> Carbon::now(),
                'change_history'=> '已編輯消息 - '.$shortTitle,
            ]);

            $result = [
                'result' => 'success',
                'message' => '編輯完成'
            ];
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // 刪除後端圖檔
        $new = Notification::find($id);
        FilesController::deleteUpload($new->img_path);

        // 刪除消息歷史
        if ( mb_strlen($new->title, 'utf-8') > 10 ){
            $shortTitle = mb_substr($new->title, 0, 10, 'utf-8').'......';
        }else{
            $shortTitle = $new->title;
        }
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已刪除消息 - '.$shortTitle,
        ]);

        // 刪除資料庫資料
        Notification::where('id', $id)->delete();

        return redirect('/new');
    }
}
