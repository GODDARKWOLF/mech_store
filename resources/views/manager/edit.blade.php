<title>Edit Product</title>

<body>
    {{$id ->$Data}}
  <div class="Ewrapper">
    <h2> Edit product</h2>
    <form action="{{route('update_data',$id->id)}}" method="POST">
      @csrf
      @method('PUT')
      <label for="Name"> Name </label>
      <br>
      <input type="text" id="Name" name="Name" value="{{$id ->Name}}" required>
      <br><br>

      <label for="Description"> Description </label> 
      <br>
      <textarea id="Description" name="description" required> {{$id ->description}} </textarea>
      <br><br>

      <label for="Price"> Price </label>
      <br>
      <input type="text" id="price" name="price" value="{{$id ->price}}" required>
      <br><br>

      <label for="image"> Product Image </label>
      <br>
      <input type="file" id="image" name="image" {{$id ->image}}>
      <br><br>

      <button type="submit">Edit</button>
 

  </div>
  
</body>