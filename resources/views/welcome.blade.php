@extends('layouts.app')

    
@section('content')

<h1 class="text-center p-5"> اهلا بكم في الصفحة الرئيسية</h1>
<div  class="container">

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Type</th>
      <th>price</th>
      <th>color</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($phone as $items)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://img.freepik.com/free-vector/realistic-instagram-photo-frame-smartphone-template_23-2148125909.jpg?w=740&t=st=1675605211~exp=1675605811~hmac=fa13a0578e03833711d0d05f15e37cfebe47a322f754b8ea34febd447ab5c60b"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$items['Type']}}</p>
            
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$items['price']}}</p>
       
      </td>
      <td>
        <span class="fw-normal mb-1">{{$items['color']}}</span>
      </td>
      
      </td>
    </tr>
    @endforeach
      
  </tbody>
</table>

</div>
    @endsection




 



                            

                          
                            
                         
                       

                       
