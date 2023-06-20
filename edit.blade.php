<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body style="background-color:pink;"><br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <div class="card">
    <div class="card-body">

        <br>
    <h1><center> Updating details</center></h1>
    <form action="{{Route('student.update',$s->id)}}" method="POST"><br>
    @csrf
    @method('PATCH')
       
  <div class="mb-3">
    <label for="AdmissionNumber" class="form-label">Admission Number</label>
    <input type="number" class="form-control" name="admno" id="admno" value="{{$s->stud_admno}}">
  </div>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" name="stud_name" id="stud_name" value="{{$s->name}}">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" name="age" id="age"  value="{{$s->age}}">
  </div>
  <div class="mb-3">
    <label for="Branch" class="form-label">Branch</label>
    <input type="text" class="form-control" name="br" id="br" value="{{$s->branch}}">
  </div>
  <input type="submit" value="update" button type="submit" class="btn btn-primary" ></button>
  
</form>
    </div>
    </div>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
    
</body>
</html>