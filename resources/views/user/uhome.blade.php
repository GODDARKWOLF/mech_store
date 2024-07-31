<title>Home page</title>
<h1>Hello there</h1>
<body>
  @foreach ($collection as $item)
      <table>
        <thead>
          <th>{{$item -> name}}</th>
        </thead>
        <tbody>
          <tr>
            <td>{{$item -> description}}</td>
            <br><br>
          </tr>
          <tr>
            <td>{{$item -> price}}</td>
            <br><br>
          </tr>
        </tbody>
      </table>
      <br><br>
  @endforeach
</body>