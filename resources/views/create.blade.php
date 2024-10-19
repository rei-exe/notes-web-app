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
        </script>
    </body>
    </html>
