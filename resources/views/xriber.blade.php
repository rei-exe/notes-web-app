{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xriber</title>
    <link rel="stylesheet" href="{{asset('styles/showallnotes.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="logo">xriber</h1>
        <h2 class="tagline">scribe it so you won't forget it!</h2>

        <!-- Center the button -->
        <div class="button-container">
            <a href="/notes/create" class="custom-button">Create New Xribe</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($notes->isEmpty())
            <div class="alert alert-warning">
                No notes available.
            </div>
        @else
            @foreach($notes as $note)
                <div class="note-lists">
                    <h4>{{$note->title}}</h4>
                    <p>{{$note->content}}</p>
                </div>
                <div class="options">
                    <a href="/notes/{{ $note->id }}" class="btn-info">View</a>
                    <a href="/notes/{{ $note->id }}/edit" class="btn-warning">Edit</a>
                    <form action="/notes/{{ $note->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </div>
            @endforeach
            <!-- <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead> -->
                <!-- <tbody>
                    @foreach ($notes as $note)
                        <tr>
                            <td>{{ $note->title }}</td>
                            <td>{{ Str::limit($note->description, 50) }}</td>
                            <td>
                                <a href="/notes/{{ $note->id }}" class="btn-info">View</a>
                                <a href="/notes/{{ $note->id }}/edit" class="btn-warning">Edit</a>
                                <form action="/notes/{{ $note->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody> -->
            <!-- </table> -->
        @endif
    </div>
</body>
</html> --}}
