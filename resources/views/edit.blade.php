<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note - {{ $note->title }}</title>
    <link rel="stylesheet" href="{{asset('styles/edit-notes.css')}}">
</head>
<body>
    <header>
        <nav>
            <form action="{{Route('Read', ['id' => $note->id])}}" method="GET">
                <button type="submit" class="arrow">
                    <i class="arrow-left"></i>
                </button>
            </form>
            <h1>Create Xribe</h1>
        </nav>
    </header>

    <main>
        <div class="container">
            <form action="{{route('Update', ['id' => $note->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title"></label>
                    <input value="{{$note->title}}" name="title" placeholder="Title" class="title" required>
                    </div>
                <div class="form-group">
                    <label for="description"></label>
                    <input value="{{$note->description}}" name="description" class="description" placeholder="Description">
                </div>
                    <div class="form-group">
                        <label for="content"></label>
                        <textarea name="content" class="content" placeholder="Insert Notes">{{$note->content}}</textarea>
                    </div>
                    <button type="submit" class="check-mark">✓</button>
            </form>
        </div>
    </main>
</body>
</html>
