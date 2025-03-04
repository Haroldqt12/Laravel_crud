<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $task->title }}</h1>
        <p class="lead">{{ $task->description }}</p>
        <button class="btn btn-secondary" hx-get="{{ route('tasks.index') }}" hx-target="body">Back to List</button>
    </div>
</body>
</html>
