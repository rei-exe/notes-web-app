<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note - {{ $note->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-size: 60%;
            background-image: url("/images/paper.png");
            background-repeat: no-repeat;
            background-position: center;
            padding: 5px;

        }
        .container{
            margin: 10%;
            height: 50%;
        }
        h1 {
            font-size: 2.5rem; 
            margin-bottom: 20px; 
        }
        .form-group {
            margin: 20px 0; 
            text-align: center; 
        }
        label {
            display: block; 
            margin-bottom: 5px; 
        }
        input, textarea {
            width: 50%;
            padding: 10px;
            border: 3px solid #dee2e6;
            border-radius: 5px;
            font-size: 1rem;
            text-align: center; 
            align: center;
            max-width: 60%;
            max-height: 240px;
            
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px; 
        }
        button:hover {
            background-color: darkblue; 
        }
        .btn-secondary {
            background-color: gray;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Note - {{ $note->title }}</h1>

        <form action="{{ url('/notes/' . $note->id) }}" method="POST">
            @csrf <!-- CSRF token for form submission -->
            @method('PUT') <!-- Use PUT method for updating -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ $note->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{ $note->description }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" required>{{ $note->content }}</textarea>
            </div>
            <button type="submit">Update Note</button>
            <a href="{{ url('/notes') }}" class="btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
