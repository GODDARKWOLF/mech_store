<title>Manager Homepage</title>

<style>
  .main_display
  {
    margin: auto;
    width: 500px;
  }

  .create
  {
    font-size: 18;
    font-family: 'franklin Gothic Medium';
    text-align: center;
  }

  body
  {

    font-family: 'Franklin Gothic Medium';
    font-size: medium;
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

  table
  {
    padding: 15px;
    border-radius: 15px;
    width: 75%;
    height: 75%;
    background-color: lightskyblue;
  }

  thead, tbody
  {
    padding: 20px;
    border-radius: 20px;
    width: 100%;
    height: 100%;
    
  }

</style>

<body>

  <section class="main_display">

    <a href="{{route('create_page')}}"><button>creation page</button></a>
    
    <table border="3">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created_at</th>
        <th>Updated_at</th>
      </thead>
      
      <tbody>
        @foreach ($table_data as $data )
          <tr>
            <td>{{$data -> id}}</td>
            <td>{{$data -> name}}</td>
            <td>{{$data -> description}}</td>
            <td>{{$data -> price}}</td>
            <td>{{$data -> created_at}}</td>
            <td>{{$data -> updated_at}}</td>

            <td>
              <a href="{{route('edit_page',['id' => $data ->id])}}"><button>Edit</button></a>
              <form action="{{route('delete_data',['id' => $data ->id])}}" method="POST">
                @csrf
                @method("DELETE")
                 <button type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>

  </section>

</body>
