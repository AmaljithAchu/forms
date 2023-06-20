<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    
</head>
<body style="background-color:floralwhite;"><br>
    <h1 align="center">Student Management System</h1>
    <div class="container">
  <div class="row">
    <div class="col">
    <a href="{{Route ('student.create')}}"><button class="btn btn-primary">Add student</button></a>
    </div>
  </div>
    <div class="row">
    <div class="col"> <br>
    <table class="table table-striped">   
        <thead>
            <tr>
            <th>ID</th>
            <th>Admission Number</th>
            <th>Name</th>
            <th>Age</th>
            <th>Branch</th>
            <th>Edit</th>
            <th>Delete</th>
            @foreach($a as $s)

            </tr>
        </thead>
        <tbody>
            
            <tr>
            <td>{{$s->id}}
            <td>{{$s->stud_admno}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->age}}</td>
            <td>{{$s->branch}}</td>
            <td><a href="{{Route ('student.edit',$s->id)}}"><button class="btn btn-outline-success">edit</button></a></td>
            <td><a href="{{Route ('student.show',$s->id)}}"><button class="btn btn-outline-danger">delete</button></a></td>

            
            </tr>
            @endforeach
        </tbody>
        <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    </table>
    </html>
