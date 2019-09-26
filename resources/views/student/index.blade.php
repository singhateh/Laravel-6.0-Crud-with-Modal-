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
<a href="" class="btn btn-info" style="margin-left:82%" data-toggle="modal" data-target="#exampleModal" >Add New Student</a>
<div class="col-md-12">

@if($message = Session::get('success'))
<div class="alert-success">
<p>{{$message}}</p>
</div>
@endif

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
        @foreach($students as $key=>$student)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->country}}</td>
                <td>{{$student->city}}</td>
                <td>{{$student->address}}</td>
                <td>
                   <!-- --------------------------------- SHOW BUTTON CODE START HERE---------------------------------------------------------------- -->
                  <a data-student_id="{{$student->id}}" data-firstname="{{$student->firstname}}" data-lastname="{{$student->lastname}}"
                  data-country="{{$student->country}}" data-city="{{$student->city}}" data-gender="{{$student->gender}}" 
                  data-address="{{$student->address}}" data-toggle="modal" data-target="#exampleModal-show" 
                  type="button"class="btn btn-warning btn-sm">Show</a> 
                  <!-- --------------------------------- EDIT BUTTON CODE END HERE---------------------------------------------------------------- -->


                  <!-- --------------------------------- EDIT BUTTON CODE START HERE---------------------------------------------------------------- -->
                  <a data-student_id="{{$student->id}}" data-firstname="{{$student->firstname}}" data-lastname="{{$student->lastname}}"
                  data-country="{{$student->country}}" data-city="{{$student->city}}" data-gender="{{$student->gender}}" 
                  data-address="{{$student->address}}" data-toggle="modal" data-target="#exampleModal-edit" 
                  type="button"class="btn btn-info btn-sm">Edit</a> 
                  <!-- --------------------------------- EDIT BUTTON CODE END HERE---------------------------------------------------------------- -->

                   <a data-student_id="{{$student->id}}" data-toggle="modal" data-target="#exampleModal-delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{$students->links()}}
</thead>
</table>
<!-- ------------------------------------ ADD NEW STUDENT MODAL -------------------------------------- -->

<!-- Modal -->
<div class="modal fade right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('student.store')}}" method="post">
        @csrf
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Firstname and Lastname</span>
          </div>
          <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
          <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
          </div>
          <br>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Country and City</span>
          </div>
          <input type="text" class="form-control" name="country" placeholder="Enter Country Name">
          <input type="text" class="form-control" name="city" placeholder="Enter City Name">
          </div>
          <br>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Address and Gender</span>
          </div>
          <textarea type="text" class="form-control" name="address" placeholder="Enter Address"></textarea>
          <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
          </div>
          <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save Student</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ------------------------------------ EDIT STUDENT MODAL -------------------------------------- -->

<!-- Modal -->
<div class="modal fade left" id="exampleModal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('student.update','student_id')}}" method="post"> 
        @csrf
        @method('PUT')
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Firstname and Lastname</span>
          </div>
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
          </div>
          <input type="hidden" id="student_id" name="student_id">
          <br>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Country and City</span>
          </div>
          <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country Name">
          <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name">
          </div>
          <br>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Address and Gender</span>
          </div>
          <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
          <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Gender">
          </div>
          <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Update Student</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ------------------------------------ DELETE STUDENT MODAL -------------------------------------- -->

<!-- Modal -->
<div class="modal fade top" id="exampleModal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-right modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:gray; color:white">
        <form action="{{route('student.destroy','student_id')}}" method="post"> 
        @csrf
        @method('DELETE')
         
          <input type="hidden" id="student_id" name="student_id">
          <p class="text-center" width="50px" > Are You Sure You Want to Delete This Student?</p>
      </div>
      <div class="modal-footer" style="background:red; color:white">
        <button type="button" class="btn btn-warning" data-dismiss="modal">No/Cancel</button>
        <button type="submit" class="btn btn-danger">Yes/Delete Student</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ------------------------------------ SHOW STUDENT MODAL -------------------------------------- -->

<!-- Modal -->
<div class="modal fade bottom" id="exampleModal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-warning" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('student.show','student_id')}}" method="get"> 
        @csrf
        <!-- @method('PUT') -->
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Firstname and Lastname</span>
          </div>
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" readonly>
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" readonly>
          </div>
          <input type="hidden" id="student_id" name="student_id">
          <br>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Country and City</span>
          </div>
          <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country Name" readonly>
          <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name" readonly>
          </div>
          <br>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Address and Gender</span>
          </div>
          <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address" readonly></textarea>
          <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Gender" readonly>
          </div>
          <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-warning">Show Student</button> -->
      </div>
      </form>
    </div>
  </div>
</div>


</div>
</div>
</div>
</body>

<script>
$('#exampleModal-edit').on('show.bs.modal', function(event){

var button = $(event.relatedTarget)
var firstname = button.data('firstname')
var lastname = button.data('lastname')
var country = button.data('country')
var city = button.data('city')
var address = button.data('address')
var gender = button.data('gender')
var student_id = button.data('student_id')

var modal = $(this)

modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
modal.find('.modal-body #firstname').val(firstname);
modal.find('.modal-body #lastname').val(lastname);
modal.find('.modal-body #country').val(country);
modal.find('.modal-body #city').val(city);
modal.find('.modal-body #address').val(address);
modal.find('.modal-body #gender').val(gender);
modal.find('.modal-body #student_id').val(student_id);
});

$('#exampleModal-delete').on('show.bs.modal', function(event){

var button = $(event.relatedTarget)
var student_id = button.data('student_id')

var modal = $(this)

modal.find('.modal-title').text('DELETE STUDENT INFORMATION');
modal.find('.modal-body #student_id').val(student_id);
});

$('#exampleModal-show').on('show.bs.modal', function(event){

var button = $(event.relatedTarget)
var firstname = button.data('firstname')
var lastname = button.data('lastname')
var country = button.data('country')
var city = button.data('city')
var address = button.data('address')
var gender = button.data('gender')
var student_id = button.data('student_id')

var modal = $(this)

modal.find('.modal-title').text('VIEW STUDENT INFORMATION');
modal.find('.modal-body #firstname').val(firstname);
modal.find('.modal-body #lastname').val(lastname);
modal.find('.modal-body #country').val(country);
modal.find('.modal-body #city').val(city);
modal.find('.modal-body #address').val(address);
modal.find('.modal-body #gender').val(gender);
modal.find('.modal-body #student_id').val(student_id);
});

</script>
</html>