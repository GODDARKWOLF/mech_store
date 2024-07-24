<title>Item Creation</title>

<body>

  <div class="Cwapper">
    <h2> Add product</h2>
    <form action="{{route('data_storage')}}" method="POST">
      @csrf
      <input type="text" name="Name" placeholder="Name"> 
      <input type="text" name="description" placeholder="description">
      <input type="text" name="price" placeholder="price">
      <button type="submit">Add</button>
 

  </div>
  
</body>