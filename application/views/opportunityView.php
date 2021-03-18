<!doctype html>
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
        <a class="navbar-brand" href="#">Opportunity</a>
        <a class="navbar-brand" href="<?php echo site_url('UserController/login_view')?>">Logout</a>

    </div>
    </nav>
    
    <div class="container">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Opportunity
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method='post' action="<?php echo site_url('UserController/createOpportunity')?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Opportunity Name</label>
                        <input type="text" class="form-control" name="oppo_name" aria-describedby="emailHelp" placeholder="Enter Username" Required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Salary</label>
                        <input type="number" class="form-control" name="salary" aria-describedby="emailHelp" placeholder="Enter Salary" Required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Account</label>
                        <input type="text" class="form-control" name="account" aria-describedby="emailHelp" placeholder="Enter Account" Required>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" value='save'>Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
        <br></br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Opportunity Name</th>
                <th scope="col">Salary</th>
                <th scope="col">Account</th>
                
                

                </tr>
            </thead>
            <tbody>
                <?php 
                    
                    foreach($opportunities as $row){
                ?>
                <tr>
                <th scope="row"><?php echo $row->oppo_name;?></th>
                <td><?php echo $row->salary;?></td>
                <td><?php echo $row->account;?></td>
                
                
                </tr>
                <?php
                    } ;
                ?>
            </tbody>
        </table>
    </div>
  </body>
</html>