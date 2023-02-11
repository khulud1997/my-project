@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="center"></div>
<div clSS="container">
    @foreach($phone  as $items)
    <div class="mb-5">
    <div class="card">
        
    <div class="card-header">
     <h3>{{$items->Name}}</h3>
     
</div>
<div  

class="card-body">
<div class="row">
        <div class="col-3">
     <img  hieght = "150" width= "160"src="https://img.freepik.com/free-psd/digital-device-mockup_53876-91376.jpg?size=338&ext=jpg&ga=GA1.2.764055070.1675782266&semt=sph" >     
</div>


        <div class="col-9">
            <h1 class ="text-primary alert alert-dark">{{$items->Name}}</h1>
            <p class="text-dark">PRICE : <span class="badge bg-secondary">{{$items->price}}</span> </p>
            <p class="text-primary">Quantity : <span>{{$items->Qty}}</span> </p>
            <a href=" {{route('getlistid',[$items->id] )}}"class="btn btn-outline-primary">ADD TO CART</button>
<a href=" {{route('getlistid',[$items->id])}}"class="btn btn-praimary"></a>
</div>


</div>



            

</div>


<div class="card-footer">
<p><i class="fa-solid fa-phone"></i> CONTACT : 966500000004</p> 

</div>
</div>
</div>
@endforeach
</body>





@endsection
