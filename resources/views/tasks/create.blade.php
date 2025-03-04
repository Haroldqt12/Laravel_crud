<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@1.9.2"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create Task</h1>

        <form hx-post="{{ route('tasks.store') }}"
              hx-target="body"
              hx-swap="outerHTML">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <button class="btn btn-secondary" hx-get="{{ route('tasks.index') }}" hx-target="body">Back to List</button>
        </form>
    </div>
</body>
</html>
