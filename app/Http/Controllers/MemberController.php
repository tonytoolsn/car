<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Order;
use App\Models\Product;
use App\Models\Calendar;

use Auth;
use Mail;
use App\Mail\notify;

class MemberController extends Controller
{
    //會員會有的動作      1.加入會員 2.登入會員 3.修改帳號 4.訂單查詢


    //1.加入會員
    public function create(Request $request){
       // $email = $request->email;
       // $to = collect([['name'=>'勁璿重機出租','email'=>$email]]);
       // $params=['title' => '歡迎您註冊會員!!',
       //       'content' => '租車時，請查看月曆在進行表單填寫，會有專人聯繫確認匯款情況，有任何問題，請打0912345678，會有專人為您服務!!'];
       // Mail::to( $to )->send( new notify($params) );

        $data = $request->except('_token');
        Member::create($data);
        return redirect('/car');
    }
   //2.登入會員
    public function login(Request $request){
        $login = $request->name;
        $member= Member::where('name',$login)->get();
        foreach ($member as $value) {
          $id = $value->id;
          $name = $value->name;
          $email = $value->email;
          $phone = $value->phone;
        }
        if(isset($id)){
        $request->session()->put('id',$id);
        $request->session()->put('name',$name);
        $request->session()->put('email',$email);
        $request->session()->put('phone',$phone);
        $member_id=$request->session()->get('id');
        $member_name=$request->session()->get('name');
        $member_email=$request->session()->get('email');
        $member_phone=$request->session()->get('phone');
        $products=Product::get();
        $calendars=Calendar::get();
        return view('car.index',compact('products','calendars'))->with('id', $id)->with('name', $member_name)->with('email', $member_email)->with('phone', $member_phone);
        }else{
            return redirect('/car');
        }
    }
   //4.訂單查詢
    public function member(Request $request){
        $member_name=$request->session()->get('name');
        $orders=Order::where('men_name',$member_name)->get();
        return view('member.order',compact('orders'));
    }
   //3.修改帳號get
    public function edit(Request $request){
       $id=$request->session()->get('id');
       $members=Member::where('id',$id)->get();
       return view('member.updata',compact('members'));
   }
   //3.修改帳號post
   public function updata(Request $request){
      $member_id=$request->session()->get('id');
      $data=$request->except('_token');
      Member::find($member_id)->update($data);
      return redirect('/car/member/edit');
    }

   //會員登出
    public function loyout(Request $request){
       $request->session()->flush();
       return redirect('/car');
    }

    //訂單查詢(側邊攔)
    public function order(){
      return redirect('/member/order');
    }
    public function sendMail(){
       $to = collect([['name'=>'重機出租','email'=>'web109btony712@gmail.com']]);
       $params=['title' => '歡迎您註冊會員!!',
              'content' => '租車時，請查看月曆在進行表單填寫，會有專人聯繫確認匯款情況，有任何問題，請打0912345678，會有專人為您服務!!'];
       Mail::to( $to )->send( new notify($params) );
    }
}
