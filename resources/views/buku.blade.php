<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <a href="{{url('buku/add')}}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Keterangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_data as $row)
            <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->judul}}</td>
            <td>{{$row->keterangan}}</td>
            <td>
                <a href="{{url('buku/edit/'.$row->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{url('buku/edit/'.$row->id)}}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>