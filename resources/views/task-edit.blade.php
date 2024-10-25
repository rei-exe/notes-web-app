<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="icon" href="{{ asset('icons/tt.ico') }}" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        main {
            margin-top: 20px;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Edit Task Status</h1>
            <form action="{{ route('showTasks') }}" method="GET">
                <button type="submit">Back to Task List</button>
            </form>
        </nav>
    </header>

    <main>
        <h2>Update Task Status</h2>
        <form action="{{ route('task-update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <p>Task: {{ $task->task }}</p>
            <label>
                <input type="radio" name="status" value="completed" {{ $task->status === 'completed' ? 'checked' : '' }}>
                Completed
            </label>
            <label>
                <input type="radio" name="status" value="pending" {{ $task->status === 'pending' ? 'checked' : '' }}>
                Pending
            </label>
            <button type="submit">Update Status</button>
        </form>
    </main>
</body>
</html>
