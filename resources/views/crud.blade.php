<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD laravel!</title>
  </head>
  <body>
        <h1 class="text-center mb-4">Data</h1>
            <div class="container">
             <a href="{{url('/crud/add')}}" class="btn btn-success">Tambah +</a>
                <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Preferences</th>
                    <th scope="col">Portfolio</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_data as $row)
                    <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->preferences}}</td>
                    <td>{{$row->portfolio}}</td>
                    <td>{{$row->contact}}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>