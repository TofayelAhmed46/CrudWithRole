<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container">
  <header>
    <x-app-layout>
    
  </header>
  <main>
<div class="ms-0 m-3">
    <a href="{{route('crud.create')}}"> <span class="btn btn-primary ms-auto float-right"> Add data</span> </a>
</div>
      <div class="row">
    <table class="table table-bordered table-hover bg-secondary-subtle text-center rounded">
        <tr >
            <th class="col-3">ID</th>
            <th class="col-3">Name</th>
            <th class="col-3">Image</th>
            <th class="col-3">Action</th>
        </tr>
        @foreach ($data as $datas)
            
        <tr>
            <td> {{$datas->id}} </td>
            <td>{{$datas->name}} </td>
            <td> <img src="/crudimage/{{$datas->image}}" alt="" width="40" height="40" class="rounded-circle"> </td>
            <td>
                  <a href="/crud/show/{{$datas->id}}"> <span class="btn btn-success btn-sm"> View</span> </a>
                  <a href="/crud/edit/{{$datas->id}}"> <span class="btn btn-primary btn-sm"> Edit</span> </a>
                  <form method="POST" action="/crud/delete/{{$datas->id}}" class="d-inline btn-sm">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                

            </td>
        </tr>
        @endforeach
    </table>
</div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>