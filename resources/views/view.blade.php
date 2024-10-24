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
            <div class="change-color">
                <div class="lMode"></div>
                <div class="dMode"></div>
                <div class="bMode"></div>
                <div class="yMode"></div>
            </div>
            <form action="{{Route('Delete', ['id' => $note->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">
                    <h1>Delete Note</h1>
                </button>
            </form>
        </nav>
    </header>

    <main>
        <form action="{{Route('Edit', ['id' => $note->id])}}">
            <button type="submit" class="edit-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                </svg>
            </button>
        </form>

        <div class="container container-lMode">
            <div class="title">{{$note->title}}</div>
            <div class="description">{{$note->description}}</div>
            <div class="content"><p>{{$note->content}}</p></div>
        </div>
    </main>
    <script src="{{asset('js/viewnote.js')}}"> </script>
</body>
</html>
