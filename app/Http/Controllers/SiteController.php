<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Calendar;
use App\Models\Member;

use Auth;
use Mail;
use App\Mail\notify;

class SiteController extends Controller
{
    //1.日曆       2.商品
    public function  renderindexPage(){
        $products=Product::get();
        $calendars=Calendar::get();
    return view('car.index',compact('products','calendars'));
    }
    //新增訂單
    public function order(Request $request){
        $men_name=$request->men_name;

        if(isset($men_name)){
        $email = $request->email;
        $to = collect([['name'=>'勁璿重機出租','email'=>$email]]);
        $params=['title' => '感謝您的租借!!',
               'content' => '會有專人聯繫確認匯款情況，有任何問題，請打0912345678，會有專人為您服務!!'];
        Mail::to( $to )->send( new notify($params) );
        $data = $request->except('_token');
        Order::create($data);
        return redirect('/car');
        }else{
        return redirect('/car')->with('msg','表單送出失敗，請登入會員');
        }
    }
}
