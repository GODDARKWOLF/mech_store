<title>Edit Product</title>

<style>
  .Ewrapper
  {
    margin: auto;
    width: 500px;
  }

  body
  {

    font-family: 'Franklin Gothic Medium';
    font-size: 18;
    text-align: center;
    margin: 10px;
    background-color: blueviolet;

  }

  button
  {
    background-color: #ccc;
  }

  button:hover
  {
    background-color: hotpink;
    cursor: pointer;
  }

  textarea, input
  {
    border: 3px solid #ccc;
  }

  textarea:focus, input[type="text"]:focus
  {
    outline: 3px solid purple;
  }

  textarea
  {
    width: 45%;
    height: 25%;
    resize: both;
  }

  input[type="text"],textarea,input[type="number"]
  {
    background-color: lightskyblue;
  }

  input[type="text"],textarea,input[type="number"],button
  {
    padding: 10px;
    border-radius: 10px;
  }

</style>

<body>
    {{$id ->$Data}}
  <div class="Ewrapper">
    <h2> Edit product</h2>
    <form action="{{route('update_data',$id->id)}}" method="POST">
      @csrf
      @method('PUT')
      <label for="Name"> Name </label>
      <br>
      <input type="text" id="Name" name="Name" value="{{$id ->name}}" required>
      <br><br>

      <label for="Description"> Description </label> 
      <br>
      <textarea id="Description" name="description" required> {{$id ->description}} </textarea>
      <br><br>

      <label for="Price"> Price </label>
      <br>
      <input type="text" id="price" name="price" value="{{$id ->price}}" required>
      <br><br>

      <button type="submit">Edit</button>
 

  </div>
  
</body>