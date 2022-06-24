<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\History;
use Carbon\Carbon;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('account.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'power' => 2,
        ]);

        return redirect('/account')->with('success','新增成功');
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
    public function personal_edit($id)
    {
        $user = User::find($id);

        return view('account.edit', compact('user'));
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
        // 防止 使用者名稱、密碼未填
        if( $request->name == "" ){       
            $result = [
                'result'=>'error',
                'message'=> '請輸入名稱',
            ];

        }elseif ( strlen($request->password) < 8 ){
            $result = [
                'result'=>'error',
                'message'=> '請輸入8位數以上的密碼',
            ];

        }elseif ( $request->power == "" ) {
            $result = [
                'result'=>'error',
                'message'=> '請選擇權限',
            ];

        }else {
        // 填寫格式正確存取資料

            $user = User::find($id);

            $user->name = $request->name;
            $user->power = $request->power;

            if (Hash::needsRehash($request->password)) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

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
        $account = User::find($id);

        $account->delete();

        return redirect('/account')->with('success','刪除成功');
    }

    public function personal_update(Request $request, $id){

        $user = User::find($id);

        $user->name = $request->name;

        if (Hash::needsRehash($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('/dashboard');
    }
}
