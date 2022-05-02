<html>

    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-color: #cccaca;">

        <h1 class="text-center mt-2 ">Show Item</h1>
    
    
        <section class="w-100 d-flex justify-content-center align-content-center ">
            <div class="card container  w-50 mt-3 mb-4 pt-2">
                <div class="card-body ">
                    <h3 class="text-center">{{$gym->id}} - {{$gym->name}}</h3>
                    <hr>
    
                    
                
                    <img src='{{asset("uploads/$gym->img")}}' alt="imgTable" class="w-100 p-3"/>
    
                    {{-- <p><span style="font-weight: 700">Image:</span> {{$gym->img}}</p> --}}
                    <p><span style="font-weight: 700">Email:</span> {{$gym->email}}</p>
    
                    <p><span style="font-weight: 700">created at:</span>  {{ $gym->created_at->format('y-m-d') }}</p>
                    <p><span style="font-weight: 700">CityManager name </span> </p>
                    <div class="d-flex justify-content-end w-100">
                        <a class="btn btn-secondary" href='{{"/CityManager/index"}}'>
                            Back Home
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </body>


</html>