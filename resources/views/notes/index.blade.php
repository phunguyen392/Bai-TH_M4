
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS của Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Category</title>
    </head>
 
    <body>
        <div class="card">
            <div class="card-body">
        <div class="text-end">
            <a href="{{ route('notes.create') }}"><br>
                <button type="button" class="btn btn-info">New add</button></a>
        </div>
        <div class="text-center">
            <h1 style="color: blue">Note List</h1>
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr >
                        <th>STT</th>
                        <th>Category</th>
                        
                        <th>Money</th>

                        <th>Date</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $key => $note)
                        <tr >
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $note->category }}</td>
                            <td>{{ $note->money }}</td>
                            <td>{{ $note->date }}</td>

                            <td >
                                <div class="btn-group">
                       
                                    <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                   
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>

    </html>
   


