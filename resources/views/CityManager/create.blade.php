<html>

    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-color: #cccaca; font-style:italic">
        <section class="container">
            <h3 class="text-center mt-5 mb-4"> Show All Gyms  </h3>
            <div>
                <table class="container table table-dark table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>password</th>
                        <th>National_ID</th>
                        <th>created_at</th>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                    </thead>

                    <tbody id="tableBody">
                        @foreach($Gyms as $Gym)
                        <tr>
                            <td>{{$Gym->id}}</td>
                            <td>{{$Gym->name}}</td>
                            <td>{{$Gym->email}}</td>
                            <td>{{$Gym->img}}</td>
                            <td>{{$Gym->password}}</td>
                            <td>{{$Gym->national_id}}</td>
                            <td>{{$Gym->created_at->format('y-m-d') }}</td>
                            <td><a class="btn btn-Primary" href='{{url("/CityManager/show/$Gym->id")}}'>Show</a></td>
                            <td><a class="btn btn-secondary" href='{{url("/CityManager/edit/$Gym->id")}}'>Update</a></td>
                            <td><a class="btn btn-danger" href='{{url("/CityManager/delete/$Gym->id")}}' onclick="return confirm('Are You Sure ?')">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

                <!-- hna ana b3ml pagination  -->
                <div class="container d-flex justify-content-end">
                    {{-- {{$cats->links()}} --}}
                </div>

            </div>
        </section>
    </body>
</html>