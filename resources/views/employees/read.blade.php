@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <div class="logout">
            <button type="submit" class="btn Createbtn">Logout</button>
        </div>
    </form>
    <form action="/employees/search" method="GET" class="textCenter">
        <input type="text" placeholder="Search Here...." name="search" class="searchField" id="search">
        <!-- <span class="closeIcon"><img src="{{ asset('/images/cancel.png')}}" alt="Cancel"></span> -->
         <button id="clearBtn" type="button">Clear</button>
    </form>
    <div class="tableContainer">
        <div class="tableTitle">
            <h1>Employees</h1>
            <a href="{{ url('/employees/create') }}" type="button" class="btn Createbtn">Create Employee</a>
        </div>

        <table border="1" class="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Employee ID</th>
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody id="tableBody">
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->employeeId }}</td>
                    <td>{{ $employee->designation }}</td>
                    <td>
                    <a href="{{ url('/employees/'.$employee->id.'/edit') }}"><img src="{{ asset('images/edit.png') }}" alt="Edit" class="actionImg" title="Edit"></a>
                    <form action="{{ url('/employees/'.$employee->id) }}" method="POST" class="empForm">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="deleteBtn">
                            <img src="{{ asset('images/delete.png') }}" alt="Delete" class="actionImg" title="Delete">
                        </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/crud.js')}}"></script>
</body>

</html>