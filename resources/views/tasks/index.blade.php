<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@1.9.2"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Task List</h1>

        <div id="task-message">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        
        <button class="btn btn-primary mb-3" 
                hx-get="{{ route('tasks.create') }}" 
                hx-target="#task-container" 
                hx-push-url="true">
            Create Task
        </button>

        <div id="task-container">
            @if($tasks->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr id="task-{{ $task->id }}">
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    <button class="btn btn-info"
                                            hx-get="{{ route('tasks.show', $task->id) }}" 
                                            hx-target="#task-container" 
                                            hx-push-url="true">
                                        View
                                    </button>

                                    <button class="btn btn-warning"
                                            hx-get="{{ route('tasks.edit', $task->id) }}" 
                                            hx-target="#task-container" 
                                            hx-push-url="true">
                                        Edit
                                    </button>

                                    <button class="btn btn-danger"
                                            hx-delete="{{ route('tasks.destroy', $task->id) }}"
                                            hx-target="#task-{{ $task->id }}"
                                            hx-swap="outerHTML"
                                            hx-confirm="Are you sure?"
                                            hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">No tasks found.</p>
            @endif
        </div>
    </div>
</body>
</html>
