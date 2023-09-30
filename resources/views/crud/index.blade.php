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

<body>
    <header>

    </header>
    <main>
        <div class="card text-left container">
            <div class="table-responsive text-center">
                <table class="table table-primary col-6 p5">
                    <thead>
                        <tr class="text-center">
                            <th scope="col"><i class="fa fa-id-badge" aria-hidden="true"></i> ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $item)
                        <tr class="text-center">
                            {{-- @dd($datas); --}}
          
                            
                            <td scope="row"> {{$item->id}} </td>
                            <td> {{$item->name}} </td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->image}}</td>
                            <td> 
                                <a href="/update/{{$item->id}}"> <span class="btn btn-sm btn-secondary d-inline"> Update</span> </a>

                            <span class="btn btn-sm btn-danger d-inline">Delete</span> 
                            </td>
                            @endforeach
                        </tr>
                        <tr class="">
                    </tbody>
                </table>
            </div>
        </div>
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
