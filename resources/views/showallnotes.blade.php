<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xriber</title>
    <link rel="stylesheet" href="{{asset('styles/showallnotes.css')}}">
</head>
<body>
    <header>
        <h1>Xriber</h1>
        <h2>xribe so you won't forget</h2>
    </header>

    <main>
        <div class="container">
            <form action="{{Route('Create')}}">
                <button type="submit" class="create-btn">+</button>
            </form>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        @if ($notes->isEmpty())
            <div class="alert alert-warning">
                No notes available
            </div>
        @endif

        <div class="note-lists">
            @foreach ($notes as $note)
            <form action="{{Route('Read', ['id' => $note->id])}}" method="GET">
                <button type="submit" class="note-lists-buttons">
                    <div class="title">{{$note->title}}</div>
                    <div class="desc">{{ Str::limit($note->content, 72) }}</div>
                </button>
                </form>
            @endforeach
        </div>


    </main>

    <footer>

    </footer>
</body>
</html>
