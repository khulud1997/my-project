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


return view('showphone',["phone"=>$phone]);
}

public function GetphoneDataid($id)

{

$phone=DB::table('products')->find($id);

return view('checkout',["phone"=>$phone]);

}

public function Getinvoic(Request $requset)
{
$price=$requset->price;
$Qty=1;
$Total=$price*$Qty;
$vat=$Total*0.15;
$Total=$Total+$vat;
$desc=0;
$net=$Total-$desc;
$invoicdate=date("Y-m-d");
$custName=$requset->name;
$ProdoctName=$requset->ProdoctName;


$row=[
'CostName'=>$custName,
'invDate'=>$invoicdate,
'ProdoctName'=>$ProdoctName,
'Price'=>$price,
'Quantity'=>$Qty,
'vat'=>$vat,
'Descount'=>$desc,
'Net'=>$net,
];

DB::table ('invoic')->insert($row);

$datainv=DB::table('invoic')
->orderBy('id','desc')
->first();


return view('invoic',['inv'=>$datainv]);

//DB::table ('test6')->insert(['Name'=>'khulud','email'=>'khuludabdali.com']);
}

}
