<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
    <link rel="stylesheet" href="{{asset('styles/create-notes.css')}}">
    </head>
    <body>
        <header>
            <nav>
                <form action="{{Route('showAllNotes')}}" method="GET">
                    <button type="submit" class="arrow">
                        <i class="arrow-left"></i>
                    </button>
                </form>
                <h1>Create Xribe</h1>
                <a class="Lmode" href="#" onclick="Lmode()"></a>
                <a class="Dmode" href="#" onclick="Dmode()"></a>
                <a class="Bmode" href="#" onclick="Bmode()"></a>
                <a class="Ymode" href="#" onclick="Ymode()"></a>
            </nav>
        </header>

        <main>
            <div class="container">
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title"></label>
                        <input type="text" name="title" placeholder="Title" class="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description"></label>
                        <input type="text" name="description" class="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="content"></label>
                        <textarea name="content" class="content" placeholder="Insert Notes"></textarea>
                    </div>
                    <button type="submit" class="check-mark">✓</button>
                </form>
            </div>
        </main>

        <script>

            function autoResize(textarea) {
                textarea.style.height = 'auto'; // Reset height to allow shrinking
                textarea.style.height = textarea.scrollHeight + 'px'; // Set height to scrollHeight
            }
            function Lmode(color){
                document.querySelector("div").style.backgroundColor = "white";
                document.querySelector("textarea").style.backgroundColor= "white";
                document.querySelector("textarea").style.color= "black";
            }
            function Dmode(color){
                document.querySelector("div").style.backgroundColor = "#222831";
                document.querySelector("textarea").style.backgroundColor= "#1d1716";
                document.querySelector("textarea").style.color= "green";
            }
            function Bmode(color){
                document.querySelector("div").style.backgroundColor = "rgb(9, 49, 85)";
                document.querySelector("textarea").style. backgroundColor= "#7fa99b";
                document.querySelector("textarea").style.color= "black";
            }
            function Ymode(color){
                document.querySelector("div").style.backgroundColor = "rgb(172, 170, 100)";
                document.querySelector("textarea").style. backgroundColor= "#ffe79a";
                document.querySelector("textarea").style.color= "black";
            }
        </script>
    </body>
    </html>
