<title>Home page</title>

<body>
  @foreach ($collection as $item)
      <table>
        <thead>
          <th>{{$item -> name}}</th>
        </thead>
        <tbody>
          <tr>
            <td>{{$item -> description}}</td>
            <td>{{$item -> price}}</td>
          </tr>
        </tbody>
      </table>
  @endforeach
</body>