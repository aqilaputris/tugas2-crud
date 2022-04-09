<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  @include('task2.navbar')

    <h1 class="text-center mb-4">Data Crud Portfolio</h1>
        <div class="container">
        <a  href="/task2/portofoliotambah" type="button" class="btn btn-success">Add +</a>
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
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp 
                @foreach ($data as $row)
                <table class="table table-striped">
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->image }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->desc }}</td>
                    <td>
                    <a href="/task2/portofoliotampil/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}">Delete</a>
                    </td>
                  </tr>
                  </table>
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
  var portofolioid = $(this).attr('data-id');
  swal({
    title: "Yakin ?",
    text: "Data akan terhapus apabila kamu pencet ok! "+portofolioid+" ",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      window.location = "/task2/portofoliodelete/"+portofolioid+""
      swal("Data berhasil dihapus!", {
        icon: "success",
      });
    } else {
      swal("Data tidak jadi dihapus!");
    }
  });
});
</script>
</html>