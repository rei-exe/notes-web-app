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
            background-color: #222831;;
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
        header button {
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
       p, h2{
        color:white;
       }
       main button{
        width: 100%;
        max-width: 95vw; /* Limits the width */
        height: 80px;
        padding: 15px;
        margin: 10px 0 10px 0;
        align-items: center;
        background-color: grey;
        border: 1px solid;
        border-color: #ccc;
        border-radius: 5px;
        text-align: left;
        cursor: pointer;
        display: block;
        font-family: Arial, sans-serif;
        box-sizing: border-box;
        overflow: hidden;    /*para di mag overflow yung content */
        white-space: nowrap; /*hide nya lng yung content na sobra */
        text-overflow: ellipsis; /*diko alam toh nakita ko lng yan sa stackoverflow */
        transition: border-color 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
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
                <div class="content">
                    <form action="{{ route('task-edit', $task->id) }}" method="GET" style="display:inline;">
                        <button type="submit"><p><b>{{ $task->task }}</b> - <h7><i>Status: {{ $task->status }}</i></h7></p></button>
                    </form>
                </div>
    
            @endforeach
        @endif

    </main>
</body>
</html>
