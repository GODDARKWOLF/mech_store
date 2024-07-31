<title>Item Creation</title>

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