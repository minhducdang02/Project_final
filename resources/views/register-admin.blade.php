<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/register-admin.css') }}">
</head>

<body>
    <div class="signup">
        <div class="signup-classic">
            <p>Sign up</p>
            <form action="{{ url('/register-admin') }}" method="post" id="signup-form">
                @csrf
                <label for="name">Username:</label>
                <input type="text" name="name" id="name">

                <label for="password">Password:</label>
                <input type="password" name="password" id="password">

                <input type="submit" value="Register" name="register">
            </form>
        </div>
    </div>
</body>

</html>