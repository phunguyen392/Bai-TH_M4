

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
    <!DOCTYPE html>
<html>
<body>
</head>
<body>
    


<div class="heading-container text-center">
<h2>NOTE EDIT</h2>
</div>
<div class="card">
  <div class="card-body">
    <div class="container">
<form action="<?php echo route('notes.update',$note->id)?>" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group text-center">
  <label class="text-center" for="category">Category</label><br>
  <input class="form-control-sm border border-primary" type="text" id="category" name="category" value="{{ $note->category }}"><br>
  
  <label for="money ">money</label><br>
  <input type="text" id="money" name="money" value="{{ $note->money }}"><br>

  <label for="date ">date</label><br>
  <input type="text" id="date" name="date" value="{{ $note->date }}"><br>

  <label for="description ">Description</label><br>
  <input type="text" id="description" name="description" value="{{ $note->description }}"><br>

    </div>


  <div class="form-group text-center">
    <button type="submit" class="btn btn-info ">Update</button>
    <a href="{{ route('notes.index') }}" class="btn btn-warning">BACK</a>

  </div>
</form>

    </div>
  </div>
</div>

</body>
</html>
