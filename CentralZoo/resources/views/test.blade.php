<table>
    <tr>
        <th>id</th><th>type</th><th>desciption</th><th>price</th>
    </tr>
    @foreach ($post as $p)
    <tr>
        <td>{{ $p->id }}</td><td>{{ $p->tick_type }}</td><td>{{ $p->descript }}</td><td>{{ $p->price }}</td>
    </tr>
    @endforeach
</table>
