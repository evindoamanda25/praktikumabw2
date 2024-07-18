<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 File List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .text-center {
            text-align: center;
        }
        .img-center img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Uploaded Files</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="img-center">
                        <img src="{{ asset('uploads/' . basename($file)) }}" alt="Image" style="width:100px;height:auto;">
                    </td>
                    <td>
                        <a href="{{ asset('uploads/' . basename($file)) }}" class="btn btn-primary" download>Download</a>
                        <form action="{{ route('file.delete', basename($file)) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
