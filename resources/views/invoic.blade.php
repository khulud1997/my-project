@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">{{$inv->CostName}}</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> {{$inv->id}}</li>
          <li class="text-black mt-1">{{$inv->invDate}}</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>ProdoctName</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$inv->Price}}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>Net</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$inv->Net}}
          </p>
        </div>
        <hr>
      </div>
     
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">View in browser</u></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>

    </div>
  </div>
</div>



@endsection