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
            background-color: #3e4a61;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            background-color: #222831;
            color: white;
            padding: 10px 20px;
            text-align: center;
            width: 100%;
        }
        main {
            margin-top: 20px;
            background: #222831;
            padding: 20px;
            border-radius: 5px;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; 
            text-align: center; 
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px; 
        }
        button:hover {
            background-color: #45a049;
        }
        .radio {
            margin: 10px 0; 
            text-align: center; 
        }
        .radio label {
            display: block; 
            margin: 5px 0;
        }
        .button-group {
            display: flex; 
            justify-content: center;
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
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="completed" {{ $task->status === 'completed' ? 'checked' : '' }}>
                    Completed
                </label>
                <label>
                    <input type="radio" name="status" value="pending" {{ $task->status === 'pending' ? 'checked' : '' }}>
                    Pending
                </label>
            </div>
            <div class="button-group">
                <button type="submit">Update Status</button>
                <form action="{{ route('task-delete', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>
            </div>
        </form>
    </main>
</body>
</html>
