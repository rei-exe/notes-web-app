<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    header{
        display: flex;
        align-content: space-between;
    }

    h1{
        text-align: left;
    }

    main{
        margin-bottom: auto;
    }
</style>
<body>
    <header>
        <h1> Note Application</h1>
        <nav>
            <ul>
                <li><a href="http://127.0.0.1:8000/home/about">About</a></li>
                <li><a href="http://127.0.0.1:8000/home/contributors">Contributors</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <nav>
        <ul>
            <div class="container">
                <li><a href="http://127.0.0.1:8000/notes">Create New Notes</a></li>
                <li><a href="#"></a></li>
                <li></li>
            </div>
        </ul>
    </nav>
    </main>
</body>
</html>
