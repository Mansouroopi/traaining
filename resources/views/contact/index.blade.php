<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-stripped">
        <tr>
             <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>Password</th>

        </tr>

         @foreach ($users as $key => $user)
          <tr>
              <td>{{ $key+1 }}</td>
            <th>{{ $user->name }}</th>
            <th>{{ $user->email }}</th>
            <th>{{ $user->password }}</th>
          </tr>
        @endforeach



 <form action="" class="for">

     <button class="btn btn-success btn-block">Add User</button>
 </form>


    </table>

</body>
</html>