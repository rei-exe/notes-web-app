<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
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
        h2 {
            color: #333;
        }
        form {
            display: inline;
            margin-right: 10px;
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
        .delete-button {
            background-color: #f44336;
        }
        .delete-button:hover {
            background-color: #e53935;
        }
        .no-tasks {
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Xriber - Task Tracker</h1>
            <form action="{{ route('task-create') }}" method="GET">
                <button type="submit">Create New Task</button>
            </form>

            <form action="{{ route('showAllNotes') }}" method="GET" style="margin-top: 20px;">
            <button type="submit">Go Back to Notes</button>
            </form>
        </nav>
    </header>

    <main>
        <h2>All Tasks</h2>
        @if ($tasks->isEmpty())
            <p class="no-tasks">wow it's so empty in here...</p>
        @else
            @foreach ($tasks as $task)
                <div>
                    <p>{{ $task->task }} - Status: {{ $task->status }}</p>
                    <form action="{{ route('task-edit', $task->id) }}" method="GET" style="display:inline;">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="{{ route('task-delete', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif

    </main>
</body>
</html>
