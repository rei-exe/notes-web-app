<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-repeat: no-repeat;
            background-color: #0B6477
        }
        h1 {
            font-size: 2.5rem;
            margin: 20px 0;
            color: #213A57;
        }
        .form-group {
            margin: 20px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a New Note</h1>

        <form action="{{Route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" required></textarea>
            </div>
            <button type="submit">Create Note</button>
        </form>
    </div>
</body>
</html>
