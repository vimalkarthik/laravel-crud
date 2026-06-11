<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>
    <div class="formContainer">
        <h2 class="regTitle">Signup</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="formWrapper">
                <label for="">Full Name</label>
                <input type="text" name="fName" placeholder="Enter your Fullname">
            </div>
            <div class="formWrapper">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter your Email">
            </div>
            <div class="formWrapper">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your Password">
            </div>
            <button type="submit">Register</button>
        </form>
        <p class="loginCt">Already Have an Account! <a href="/auth/login">Log In</a></p>
    </div>
</body>

</html>