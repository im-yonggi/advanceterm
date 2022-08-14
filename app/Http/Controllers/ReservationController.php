<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Reservation;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $user = Auth::user();
        $item = $request -> all();
        $item['user_id'] = $user -> id;
        $item['shop_id'] = $request -> id;
        Reservation::create($item);
        return redirect('/done');
    }

    public function done(){
        return view('/done');
    }

    public function delete(Request $request){
        $item = $request -> id;
        // requestとなっているバツボタンのhidden inputはidがValueとする、＝item自体がreservation テーブルから渡っている想定
        $user = Auth::user();
        Reservation::where('id', $item) -> andWhere('user_id', $user -> id)->delete();
        // 論理削除の実装と同じ店を別日に複数回予約してた際の挙動→複数回予約の際はdateで絞るしかないため、bladeからddate情報も渡す必要あり。
    }
}
