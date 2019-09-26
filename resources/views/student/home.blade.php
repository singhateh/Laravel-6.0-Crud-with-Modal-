<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 6.0 Crud Application</title>

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</head>
<body>
    <style>
        .container{
            padding:0.5%;
        }
    </style>
<div class="container">
<h2 class="alert alert-success">LARAVEL 6.0 CRUD APPLICATION</h2>

<div class="row">
<a href="" class="btn btn-info" style="margin-left:82%" data-toggle="modal" data-target="#basicExampleModal">Add New Student</a>
<div class="col-md-12">
<table class="table table-bordered">
<thead>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>LastName</th>
        <th>Gender</th>
        <th>Country</th>
        <th>City</th>
        <th>Address</th>
        <th>Action</th>
        </tr>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
</thead>

</table>



</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify  modal-success modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="">Firstname and Lastname </span>
            </div>
            <input type="text" name="firstname" class="form-control" >
            <input type="text" name="lastname"class="form-control">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="">Country and City </span>
            </div>
            <input type="text" name="country" class="form-control" >
            <input type="text" name="city" class="form-control">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="">Address and Gender </span>
            </div>
            <textarea name="address" id="" class="form-control"></textarea>
            <input type="text" name="gender" class="form-control">
        </div>
       <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>