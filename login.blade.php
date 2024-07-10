<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body style="background: #A0C0D6;">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <div class="row m-5 w-100" style="background: #98B899;">
            <div class="col-md-4 offset-md-4" style="width: 300px;">
                <h4 class="mt-5 fs-3 text-center mb-3">Login</h4>
                <hr>
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class=" form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email', '') }}" required
                            class=" @error('email') is-invalid @enderror form-control mb-3" placeholder="Enter Email">
                        @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required
                            class=" @error('password') is-invalid @enderror form-control mb-3"
                            placeholder="Enter Password">
                        @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </div>
                </form>
                <div class="option">
                    <p>Not a registered User?
                        <a href="{{ route('registration') }}">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>