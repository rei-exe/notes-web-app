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
            <a class="Lmode" href="#" onclick="Lmode()"></a>
                <a class="Dmode" href="#" onclick="Dmode()"></a>
                <a class="Bmode" href="#" onclick="Bmode()"></a>
                <a class="Ymode" href="#" onclick="Ymode()"></a>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="title">{{$note->title}}</div>
            <div class="description">{{$note->description}}</div>
            <div class="content"><p>{{$note->content}}</p></div>
        </div>
    </main>
    <script>
        function Lmode(color){
        document.querySelector("div").style.backgroundColor = "white";
        document.querySelector("div").style.color= "black";
        }
        function Dmode(color){
        document.querySelector("div").style.backgroundColor = "#222831";
        document.querySelector("div").style.color= "green";
        }
        function Bmode(color){
        document.querySelector("div").style.backgroundColor = "rgb(9, 49, 85)";
        document.querySelector("div").style.color= "black";
        }
        function Ymode(color){
        document.querySelector("div").style.backgroundColor = "rgb(172, 170, 100)";
        document.querySelector("div").style.color= "black";
        }
        </script>
</body>
</html>
