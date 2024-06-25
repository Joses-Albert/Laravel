<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            /* font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0; */
        }
        .container1 {
            display: flex;
            margin-top: 180px;
            margin-bottom: 210px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background-color: white;
        }
        .signin, .signup {
            padding: 40px;
        }
        .signin {
            background: linear-gradient(to bottom right, #00b4db, #0083b0); /* Updated gradient colors */
            color: white;
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .signin h2 {
            margin-bottom: 20px;
        }
        .signin button {
            background-color: white;
            color: #0083b0;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        .signup {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .signup h2 {
            margin-bottom: 20px;
        }
        .signup form {
            display: flex;
            flex-direction: column;
        }
        .signup form input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup form button {
            background-color: #00b4db;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @extends("layouts.main")
    @section('container')
    <div class="container1">
        <div class="signin">
            <h2>Selamat Datang!</h2>
            <p>Untuk tetap terhubung dengan kami, silahkan bikin terlebih dahulu akun anda</p>
        </div>
        <div class="signup">
            <h2>Buat Akun</h2>
            <form action="{{route('register.store')}}" method="post">
                @csrf
                <label for="namaInput" class="form-label">Username</label>
                <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput" value="{{ old('namaInput') }}">
                @error('namaInput')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <label for="emailInput" class="form-label">Email</label>
                <input type="text" class="form-control @error('emailInput') is-invalid @enderror" id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                @error('emailInput')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="passwordInput" name="passwordInput">
                @error('passwordInput')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                @error('passwordInput_confirmation')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                <button type="submit">REGISTER</button>
            </form>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
