<title>Edit Product</title>

<body>
    {{$id ->$Data}}
  <div class="Ewapper">
    <h2> Edit product</h2>
    <form action="{{route('update_data',$id->id)}}" method="POST">
      @csrf
      @method('PUT')
      <input type="text" name="Name" value="{{$id->name}}"> 
      <input type="text" name="description" value="{{$id->description}}">
      <input type="text" name="price" value="{{$id->price}}">
      <button type="submit">Edit</button>
 

  </div>
  
</body>