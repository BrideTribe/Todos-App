<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
        <title>Todos</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center my-4">TODOS PAGE</h1>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card card-header">
                            TODO
                        </div>
        
                        <div class="card card-body">
                            <ul class="list-group">
                                @foreach ($todos as $todo)
                                    <li class="list-group-item">
                                        {{ $todo->name }}

                                        <div class="button btn-primary btn-sm float-right">View</div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>