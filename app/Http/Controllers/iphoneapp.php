<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class iiphoneapp extends Controller

{
  public function Getwelcome()
{

$phone=[

    ['Type'=>'iphone 14','price'=>4500,'color'=>'pink'],
    
    ['Type'=>'Samsong ','price'=>3500,'color'=>'black'],
    
    ['Type'=>'Huawei','price'=>2000,'color'=>'gold']
    
    
    
    
    ];
    
    
        return view('welcome',["phone"=>$phone]);
}

public function GetPhoneData()

{
$phone=DB::table('products')

->get();
return Response()->json($phone);
dd($Phone);
}


}
