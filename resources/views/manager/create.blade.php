<title>Item Creation</title>

<style>
  .Cwrapper-main
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
    width: 25%;
    height: 25%;
    resize: both;
  }

  input[type="text"],textarea,input[type="number"]
  {
    background-color: rgb(153, 235, 135);
  }

  input[type="text"],textarea,input[type="number"],button
  {
    padding: 10px;
    border-radius: 10px;
  }
</style>

<body>

  <section class="Cwrapper">
    <h2> Add product</h2>
    <form action="{{route('data_storage')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="Name"> Name </label>
      <br>
      <input type="text" id="Name" name="Name" placeholder="Name" required>
      <br><br>

      <label for="Description"> Description </label> 
      <br>
      <textarea id="Description" name="description" placeholder="description" required></textarea>
      <br><br>

      <label for="Price"> Price </label>
      <br>
      <input type="text" id="price" name="price" placeholder="0.00" required>
      <br><br>

      <label for="image"> Product Image </label>
      <br>
      <input type="file" id="image" name="image" >
      <br><br>

      <button type="submit">Add</button>
 

    </section>
  
</body>