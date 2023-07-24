<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="container-fluid">
    <h1 class="text-center mt-4">Task Management</h1>
    <hr>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach ($tasks as $task )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $task['name'] }}</td>
            <td>{{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</td>
            <td>{{ $task['status'] }}</td>
            <td>
                <a href="/task/{{ $task['id'] }}" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
