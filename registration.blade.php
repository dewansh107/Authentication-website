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
                <h4 class="mt-5 fs-3 text-center mb-3">Registration</h4>
                <hr>
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="fs-5">Name</label>
                        <input type="text" name="name" value="{{ old('name', '') }}" required
                            class="mb-3 @error('name') is-invalid @enderror form-control" placeholder="Enter Full Name">
                        @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email', '') }}" required
                            class=" @error('email') is-invalid @enderror form-control form-control-lg  mb-3"
                            placeholder="Enter Email">
                        @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required
                            class="form-control mb-3 @error('password') is-invalid @enderror"
                            placeholder="Enter Password">
                        @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" required
                            class="form-control mb-3 @error('password_confirmation') is-invalid @enderror"
                            placeholder="Confirm Password">
                        @error('password_confirmation')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mb-3">Register</button>
                    </div>
                </form>
                <div class="option">
                    <p>Already a registered User?
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>