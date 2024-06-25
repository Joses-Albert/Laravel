<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="form-group">
                    <p>Name : </p>
                    <input type="text" class="form-control" name="nama">
                    <p>Comment : </p>
                    <input type="text" class="form-control" name="komentar">
                </div>
                <input type="submit" class="btn btn-primary" name="komentar">
            </form>
        </div>
    </div>

</body>
</html>