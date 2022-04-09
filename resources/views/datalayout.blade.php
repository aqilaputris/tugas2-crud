<!-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crud laravel</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data</h1>
    <div class="container">
    <a href="/tambahdata" type="button" class="btn btn-success">Tambah +</a>
         <div class="row">
            @if ($massage = Session::get('success'))
             <div class="alert alert-success mt-4" role="alert">
                    {{ $massage }}
            </div>
            @endif
         <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">nfcszenf</th>
            <th scope="col">Portfolio</th>
            <th scope="col">About</th>
            <th scope="col">Contact</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
            <th scope="row">{{$no++ }}</th>
            <td>{{ $row->preferences }}</td>
            <td>{{ $row->portfolio }}</td>
            <td>{{ $row->about }}</td>
            <td>{{ $row->contact }}</td>
            <td>
            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}">Delete</a>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
         </div>       
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  <script>
      $('.delete').click( function(){
          var layoutid = $(this).attr('data-id');
                swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location ="/delete/"+layoutid+""
            swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
            });
        } else {
            swal("Your imaginary file is safe!");
        }
        });
      });
  </script>
</html> -->