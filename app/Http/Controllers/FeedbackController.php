<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\History;
use Carbon\Carbon;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::get();

        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // 要修改順序的留言: 取得權重
        $feedbackWeight = Feedback::where('id', $id)->value('weight');
        // 重複輪播順序的留言: 取得id
        $repeatFeedbackId = Feedback::where('weight', '=', $request->weight)->value('id');

        // 替換兩個留言的輪播順序
        Feedback::where('id', $repeatFeedbackId)->update([
            'weight'=> $feedbackWeight,
        ]);
        Feedback::where('id', $id)->update([
            'weight'=> $request->weight,
        ]);

        
        $result = [
            'result' => 'success',
        ];
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
        $feedback = Feedback::find($id);

        // 刪除留言歷史
        if ( mb_strlen($feedback->suggestion, 'utf-8') > 10 ){
            $shortFeedback = mb_substr($feedback->suggestion, 0, 10, 'utf-8').'......';
        }else{
            $shortFeedback = $feedback->suggestion;
        }
        History::insert([
            'created_at'=> Carbon::now(),
            'change_history'=> '已刪除留言 - '.$shortFeedback,
        ]);

        Feedback::where('id', $id)->delete();

        return redirect('/backend/feedback');
    }
}
