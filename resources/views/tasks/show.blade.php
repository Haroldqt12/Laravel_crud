<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <a href="{{ route('tasks.index') }}">Back to List</a>
</body>
</html>