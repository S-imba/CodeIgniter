<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    
    <title>Opportunity Management</title>
  </head>
  <body>
    <!-- As a link -->
    <nav class="navbar navbar-dark bg-dark">    <div class="container-fluid">
        <a class="navbar-brand" href="#">Opportunity Management</a>
    </div>
    </nav>
    <br></br>
    
    <div class="container">
        <form method='post' action="<?php echo site_url('UserController/login')?>">
            <div class="mb-3">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter Username" Required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Enter Username" Required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
  </body>
</html>