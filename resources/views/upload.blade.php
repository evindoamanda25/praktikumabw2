<!DOCTYPE html>
<html>
<head>
    <title>Laravel Contoh Upload Foto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Laravel Contoh Upload Foto</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Pilih file (hanya JPG, JPEG, PNG) Max:2 MB</label>
        <div class="row">
            <div class="col-md-6">
                <input type="file" name="file" class="form-control" id="file" accept=".jpg, .jpeg, .png" required>
                @if ($errors->has('file'))
                    <span class="text-danger">{{ $errors->first('file') }}</span>
                @endif
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Upload</button>
                <a href="{{ route('file.list') }}" class="btn btn-primary">View Uploaded Files</a> <!-- New button -->
            </div>
        </div>
    </form>
</div>
</body>
</html>
