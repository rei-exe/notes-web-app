<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $note->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background: rgba(8, 69, 58, 1.0);
background: radial-gradient(at center, rgba(8, 69, 58, 1.0), rgba(23, 78, 7, 1.0));
        }
        h1 {
            font-size: 2.5rem; 
            margin-bottom: 20px; 
        }
        h3 {
            margin-top: 20px; 
            margin-bottom: 10px; 
            text-align: left;
        }
        p {
            text-align: left;
            margin: 10px 0;
        }
        .btn-edit, .btn-delete, .btn-secondary {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px; 
            display: inline-block; 
        }
        .btn-edit {
            background-color: blue;
            color: white;
        }
        .btn-delete {
            background-color: red;
            color: white;
        }
        .btn-secondary {
            background-color: gray;
            color: white;
        }
        .modal {
            display: none; 
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
            max-width: 500px; 
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .container{
            border-style: solid;
            padding: 3%;
            opacity: 20px;
            background-image: linear-gradient(30deg, #0B6477, #259b9a);
        }
        #btn:hover {
            background-color:darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $note->title }}</h1>
        
        <h3>Description:</h3>
        <p>{{ $note->description }}</p>

        <h3>Content:</h3>
        <p>{{ $note->content }}</p>

        <p><strong>Created at:</strong> {{ $note->created_at }}</p>
        <p><strong>Updated at:</strong> {{ $note->updated_at }}</p>

        <div>
            <a href="{{ url('/notes/' . $note->id . '/edit') }}" class="btn-edit" id="btn">Edit</a>
            <button class="btn-delete" onclick="document.getElementById('deleteModal').style.display='block'" id="btn">Delete</button>
            <a href="{{ url('/notes') }}" class="btn-secondary" id="btn">Back to Notes</a>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="document.getElementById('deleteModal').style.display='none'">&times;</span>
                <h5 class="modal-title" style="margin: 0;">Confirm Deletion</h5>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this note?
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" onclick="document.getElementById('deleteModal').style.display='none'">Cancel</button>
                <form action="{{ url('/notes/' . $note->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Close the modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('deleteModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
