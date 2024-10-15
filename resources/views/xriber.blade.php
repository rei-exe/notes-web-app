<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xriber</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .logo {
            font-size: 4rem;
            font-weight: bold;
            margin: 0; 
        }
        .tagline {
            font-size: 1.25rem; 
            color: #6c757d;
            margin: 0;
        }
        .button-container {
            margin-top: 20px;
        }
        .custom-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; 
        }
        .custom-button:hover {
            background-color: #0056b3; 
        }
        /* table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        } */
        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
        }
        .btn-info {
            background-color: #17a2b8;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-warning {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        div .note-lists{
            text-align: left;
            margin-top: 1%;
            border-style: solid;
            padding: 1%;
        }
        div .button-container{
            margin-bottom:5%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="logo">xriber</h1>
        <h2 class="tagline">scribe it so you won't forget it!</h2>

        <!-- Center the button -->
        <div class="button-container">
            <a href="/notes/create" class="custom-button">Create New Xribe</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($notes->isEmpty())
            <div class="alert alert-warning">
                No notes available.
            </div>
        @else
            @foreach($notes as $note)
                <div class="note-lists">
                    <h4>{{$note->title}}</h4>
                    <p>{{$note->content}}</p>
                </div>
            @endforeach
            <!-- <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead> -->
                <!-- <tbody>
                    @foreach ($notes as $note)
                        <tr>
                            <td>{{ $note->title }}</td>
                            <td>{{ Str::limit($note->description, 50) }}</td>
                            <td>
                                <a href="/notes/{{ $note->id }}" class="btn-info">View</a>
                                <a href="/notes/{{ $note->id }}/edit" class="btn-warning">Edit</a>
                                <form action="/notes/{{ $note->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody> -->
            <!-- </table> -->
        @endif
    </div>
</body>
</html>
