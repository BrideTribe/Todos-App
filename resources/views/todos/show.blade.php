<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Todo Item</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">

            {{ $todo -> name }}
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card card-header bg-secondary text-light">
                        <h3>Details</h3>
                    </div>
                    <div class="card card-body bg-light">
                        {{ $todo -> description }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>