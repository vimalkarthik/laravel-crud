<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>
    <div class="formContainer">
        <h2 class="regTitle">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="formWrapper">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter your Email">
            </div>
            <div class="formWrapper">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your Password">
            </div>
            <button type="submit">Submit</button>
        </form>
        <p class="loginCt">If Don't Have an Account! <a href="/auth/signup">Signup</a></p>
    </div>
</body>

</html>