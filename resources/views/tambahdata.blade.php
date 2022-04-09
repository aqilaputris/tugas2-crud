<!doctype html>
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
    <h1 class="text-center mb-4">Tambah Data</h1>
    <div class="container">
         <div class="row justify-content-center">
             <div class="col-8">
             <div class="card">
                <div class="card-body">
                <form action="/insertdata" method="POST" enctype="multipart/form-data"> 
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Preferences</label>
                        <input type="text" name="preferences" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Portfolio</label>
                        <input type="text" name="portfolio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">About</label>
                        <input type="text" name="about" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contact</label>
                        <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
             </div>
            </div>
         </div>       
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>