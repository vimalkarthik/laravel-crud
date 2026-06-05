<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <div class="formContainer">
        <h1>Edit Employee</h1>
        <form action="/employees/{{ $employee->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="formWrapper">
                <label>Name</label>
                <input type="text" name="name" value="{{ $employee->name }}">
            </div>
            <div class="formWrapper">
                <label>Employee ID</label>
                <input type="text" name="employeeId" value="{{ $employee->employeeId }}">
            </div>
            <div class="formWrapper">
                <label>Designation</label>
                <input type="text" name="designation" value="{{ $employee->designation }}">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>