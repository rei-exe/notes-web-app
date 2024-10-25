<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link rel="icon" href="{{ asset('icons/tt.ico') }}" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #3e4a61;
        }
        header {
            background-color: #222831;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        main {
            margin-top: 20px;
            background: #222831;
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
            <h1>Create a New Task</h1>
            <form action="{{ route('showTasks') }}" method="GET">
                <button type="submit">Back to Task List</button>
            </form>
        </nav>
    </header>

    <main>
        <form action="{{ route('task-store') }}" method="POST">
            @csrf
            <input type="text" name="task" required placeholder="Enter task">
            <button type="submit">Create Task</button>
        </form>
    </main>
</body>
</html>
