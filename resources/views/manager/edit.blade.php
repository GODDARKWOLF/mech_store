<title>Edit Product</title>

<body>
    {{$data ->$Data}}
  <div class="Ewapper">
    <h2> Edit product</h2>
    <form action="{{route('Edit_data',$data ->name)}}" method="POST">
      @csrf
      <input type="text" name="Name" value="{{$data -> name}}"> 
      <input type="text" name="description" value="{{$data -> description}}">
      <input type="text" name="price" value="{{$data -> price}}">
      <button type="submit">Edit</button>
 

  </div>
  
</body>