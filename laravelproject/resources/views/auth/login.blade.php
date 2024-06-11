<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    

</head>
<body>
    <div class="login-form">
    

        <h1 class="login-title">Login</h1>
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-box">
                <label for="user" class="form-label">Utilisateur</label><br><br>
                <input type="text"  name="name" value="" class="form-control"><i class='bx bxs-user'></i>
            </div>
            <div class="mb-3">
                <div class="d-grid">
                    <br>
                    <button class="login-btn">Login</button>
                </div>
                <div class="register">
                    <p>Don't have an account? <a href="/register">Register</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html> 






 
