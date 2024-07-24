<title>Manager Homepage</title>

<body>

  <div class="Hwrapper">

    <a href="{{route('create_page')}}"><button>creation page</button></a>
    
    @foreach ($table_data as $data)
      <table>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>price</th>
        <th>Image</th>
      </table>
    @endforeach

  </div>

</body>
