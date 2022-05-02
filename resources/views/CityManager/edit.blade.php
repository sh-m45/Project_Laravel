<html>

    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-color: #cccaca; font-style:italic">
        <section class="container">
            <h1 class="titelPage w-100 text-center py-2">Edit City Manager</h1>
            <form method="POST" action='#' enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <label style="font-weight: 500 " class="mb-2">Name : </label>
                    <input name="name" type="text" class="form-control" value="{{$gym->name}}" />
                </div>

                <div class="form-group my-3">
                    <label style="font-weight: 500 " class="mb-2">Email : </label>
                    <input name="email" type="email" class="form-control" value="{{$gym->email}}" />
                </div>

                <div class="form-group my-3">
                    <label style="font-weight: 500 " class="mb-2">Password : </label>
                    <input name="password" type="password" class="form-control" value="{{$gym->password}}" />
                </div>

                <div class="form-group my-3">
                    <label style="font-weight: 500 " class="mb-2">Image : </label>
                    <input name="img" type="file" class="form-control" value="{{$gym->img}}" />
                </div>

                <div class="form-group my-3">
                    <label style="font-weight: 500 " class="mb-2">National_ID : </label>
                    <input name="national_id" type="number" class="form-control" value="{{$gym->national_id}}" />
                </div>
                @if($errors->any())
                    <div class="alter alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="w-100 d-flex justify-content-end">
                    <button id="submitBtn" type="submit" class="btn btn-primary mb-3 mt-3 ">Update Item</button>
                </div>

                
            </form>
        </section>
    </body>


</html>