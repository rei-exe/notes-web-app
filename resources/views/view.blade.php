<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $note->title }}</title>
    <link rel="stylesheet" href="{{asset('styles/one-note.css')}}">
<body>
    <header>
        <nav>
            <form action="{{Route('showAllNotes')}}" method="GET">
                <button type="submit" class="arrow">
                    <i class="arrow-left"></i>
                </button>
            </form>
            <h1>Xribe</h1>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="title">{{$note->title}}</div>
            <div class="description">{{$note->description}}</div>
            <div class="content"><p>{{$note->content}}</p></div>
        </div>
    </main>
</body>
</html>
