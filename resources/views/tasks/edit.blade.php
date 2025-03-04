<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@1.9.2"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Task</h1>

        <form hx-put="{{ route('tasks.update', $task->id) }}"
              hx-target="body"
              hx-swap="outerHTML">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $task->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button class="btn btn-secondary" hx-get="{{ route('tasks.index') }}" hx-target="body">Back</button>
        </form>
    </div>
</body>
</html>
