<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row input-group d-flex justify-content-center mt-5">

            <div class="col-8 ">
                <div class="mb-5">
                    <h1 class="display-1 text-center">Login</h1>
                </div>

                <form class="form-control" method="POST" action="{{ route('login') }}">
                    @csrf


                    <input type="email" name="email" id="email" class="form-control  m-auto mt-3 text-center"
                        placeholder="E-mail" value="{{ old('email') ? old('email') : 'ahmed' }}">
                    @error('email')
                        <h6 class="bg-danger p-5 btn-danger"> {{ $message }}</h6>
                    @enderror
                    <input type="password" name="password" id="password" class="form-control mt-3 m-auto text-center"
                        placeholder="Password">
                    @error('password')
                        <h6 class="bg-danger p-5 btn-danger"> {{ $message }}</h6>
                    @enderror
                    <input type="submit" class="btn btn-primary  m-auto mt-3" value="Login">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>

</html>
