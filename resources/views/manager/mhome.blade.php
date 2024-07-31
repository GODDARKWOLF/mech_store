<title>Manager Homepage</title>

<body>

  <section class="main_display">

    <a href="{{route('create_page')}}"><button>creation page</button></a>
    @if (@session()->has('success'))
        {{ 'Data has been added' }}
    @endif

    <table border="3">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
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
            <td>

              <img height="200" width="200" src="products/{{$data ->image}}">

            </td>
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

    @if (@session()->has('updated'))
        {{ 'Data has been updated' }}
    @endif

    @if (@session()->has('deleted'))
        {{ 'Data has been deleted' }}
    @endif

  </section>

</body>
