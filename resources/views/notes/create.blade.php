<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    



<div class="card">
    <div class="card-body">
        <div class="container">
            <form action="{{ route('notes.store') }}" method="post">
                @csrf

                <div class="heading-container text-center" style="color: rgb(127, 17, 83);">
                    <h1>Create New</h1>
                </div>
                <div class="form-group text-center">
                    <label class="text-center" for="category">Category :</label><br>
                    <input id="category" name="category" type="text" class="form-control-sm border border-primary "
                        value="">

                </div>

                <div class="form-group text-center">
                    <label for="money">Money :</label>
                    <input type="number" id="money" name="money" class="form-control">
                </div>

                <div class="form-group text-center">
                    <label for="date">Date :</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
                <div class="form-group text-center">
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{ route('notes.index') }}" class="btn btn-warning">BACK</a>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>