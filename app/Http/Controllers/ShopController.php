<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Favorite;
use Illuminate\Support\Facades\Shop;

class ShopController extends Controller
{
    public function index()
    // item(favorites)を渡す前提とするが、favoritesを表示させるのは、@if(Auth::check())、との条件分岐を実施
    {
        $user = Auth::user();
        $favorite = Favorite::where('user_id', $user -> id)->get();
        $item = Shop::all();
        $param = ['favorite' => $favorite, 'item' => $item];
        return view ('index', ['param' => $param]);
        // item（各Shop）とfavoriteのレコードとの照合方法を要確認
    }

    public function detail($param){
        $item = Shop::where('id', $param)->first();
        return view ('detail', ['item' => $item]);
    }

    public function find(Request $request){
        $query = Shop::query();
    // Shopモデルにリレーションのコードを記述前提
        if(!empty($request->area)){
            $query -> where('area -> name', $request -> area) -> get();
        }

        if(!empty($request->category)){
            $query -> where('category -> name', $request -> category) -> get();
        }

        if(!empty($request->name)){
            $query -> where('name','LIKE',"%{$request -> name}%") -> get();
        }

        $item = $query -> get();

        return view ('index', ['item => $item']);

    }
}
