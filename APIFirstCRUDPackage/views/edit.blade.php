<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Resources</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-2">
        <div class="card">
            <div class="card-header">
                <h5><strong>Resource Registration Edit/Update Form</strong></h5>
            </div>
            <div class="card-body">
                <form action="{{ route('crud_resources.update',$crudResource->id) }}" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="Name">Resource Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $crudResource->name }}" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="Content">Resource Content:</label>
                        <input type="text" class="form-control" name="content" value="{{ $crudResource->content }}" id="content">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>