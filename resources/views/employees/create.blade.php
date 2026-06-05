<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="formContainer">
        <h1>Create Employee</h1>
        <form action="/store" method="POST">
            @csrf
            <div class="formWrapper">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name">
            </div>
            <div class="formWrapper">
                <label for="employeeId">Employee ID</label>
                <input type="text" name="employeeId" placeholder="Enter Your Employee ID">
            </div>
            <div class="formWrapper">
                <label for="designation">Designation</label>
                <input type="text" name="designation" placeholder="Enter Your Designation">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>