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
            <div class="alert-success">
                {{session('success')}}
            </div>
        @endif

        @if ($notes->isEmpty())
            <div class="alert-warning">
                No notes available
            </div>
        @endif

        <div class="note-lists">
            @foreach ($notes as $note)

            <div class="dropdown">
                <button class="dropdown-button">...</button>
                <div class="dropdown-content">
                <form action="{{route('Edit', ['id' => $note->id])}}" method="GET">
                    <button type="submit">Edit</button>
                </form>
                <form action="{{route('Delete', ['id' =>$note->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit">Delete</button>
                </form>
                </div>
            </div>
            
            <form action="{{Route('Read', ['id' => $note->id])}}" method="GET">
                <button type="submit" class="note-lists-buttons">
                    <div class="title">{{$note->title}}</div>
                    <div class="desc"><p>{{ Str::limit($note->content, 72) }}</p></div>
                </button>
                </form>
            @endforeach
        </div>


    </main>

    <footer>

    </footer>
</body>
</html>
