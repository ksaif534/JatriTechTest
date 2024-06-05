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
        <div class="row mt-2">
            <div class="col">
                <h1>Crud Resources</h1>
            </div>
            <div class="col">
                <button class="btn btn-outline-warning">
                    <a href="{{ route('crud_resources.create') }}" class="nav-link">Create a Resource</a>
                </button>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crudResource as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-success">
                                        <a href="{{ route('crud_resources.show',$item->id) }}" class="nav-link">View</a>
                                    </button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-outline-warning">
                                        <a href="{{ route('crud_resources.edit',$item->id) }}" class="nav-link">Edit</a>
                                    </button>
                                </div>
                                <div class="col">
                                    <form action="{{ route('crud_resources.destroy',$item->id) }}" method="POST">
                                        @method('DELETE')
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>