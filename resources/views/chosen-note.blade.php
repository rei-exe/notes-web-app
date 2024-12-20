<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$note->title}}</title>
    <link rel="stylesheet" href="{{asset('styles/home.css')}}">
    <link rel="icon" href="{{asset('icons/menu_book_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png')}}">
    <script type="text/javascript" src="{{asset('js/home.js')}}" defer>colorMode()</script>
</head>
<body>
    <nav id="sidebar">
        <ul>
            <li>
                <span class="logo">Xriber</span>
                <button id="toggle-btn" onclick=toggleSidebar()>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M560-280 360-480l200-200v400Z"/></svg>
                </button>
            </li>
            <li class="active">
                <a href="{{Route('showAllNotes')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
                    <span>Options</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-200 240-440l56-56 184 183 184-183 56 56-240 240Zm0-240L240-680l56-56 184 183 184-183 56 56-240 240Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li class=>
                            <a href="{{Route('Edit', ['id' => $note->id])}}">Edit</a>
                        </li>
                        <li>
                            <form id="delete-form-{{ $note->id }}" action="{{Route('Delete', ['id' => $note->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0);" onclick="if(confirm('Are you sure you want to delete this note?')) { document.getElementById('delete-form-{{ $note->id }}').submit(); }">Delete</a>
                            </form>
                        </li>
                    </div>
                </ul>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                    <span>Contributors</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-200 240-440l56-56 184 183 184-183 56 56-240 240Zm0-240L240-680l56-56 184 183 184-183 56 56-240 240Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="https://www.facebook.com/duriga.vince123" target="_blank">Vincent Lee Duriga</a></li>
                        <li><a href="https://www.facebook.com/jimmy.lumaad.3" target="_blank">Jimmy Lumaad</a></li>
                        <li><a href="https://www.facebook.com/sleepyrel" target="_blank">John Russel Regalado</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M424-80q-51 0-77.5-30.5T320-180q0-26 11.5-50.5T367-271q22-14 35.5-36t18.5-47l-12-6q-6-3-11-7l-92 33q-17 6-33 10t-33 4q-63 0-111.5-55T80-536q0-51 30.5-77.5T179-640q26 0 51 11.5t41 35.5q14 22 36 35.5t47 18.5l6-12q3-6 7-11l-33-92q-6-17-10-33t-4-32q0-64 55-112.5T536-880q51 0 77.5 30.5T640-781q0 26-11.5 51T593-689q-22 14-35.5 36T539-606l12 6q6 3 11 7l92-34q17-6 32.5-9.5T719-640q81 0 121 67t40 149q0 51-32 77.5T777-320q-25 0-48.5-11.5T689-367q-14-22-36-35.5T606-421l-6 12q-3 6-7 11l33 92q6 16 10 30.5t4 30.5q1 65-54 115T424-80Zm56-340q25 0 42.5-17.5T540-480q0-25-17.5-42.5T480-540q-25 0-42.5 17.5T420-480q0 25 17.5 42.5T480-420Zm-46-192q6-2 12.5-3.5T459-618q8-42 30.5-78t59.5-60q5-4 8-10t3-15q0-8-6-13.5t-18-5.5q-38 0-86 16.5T400-719q0 9 2.5 17t4.5 15l27 75ZM240-400q14 0 33-7l75-27q-2-6-3.5-12.5T342-459q-42-8-78-30.5T204-549q-4-5-10.5-8t-14.5-3q-9 0-14 6t-5 18q0 54 20.5 95t59.5 41Zm184 240q47 0 92.5-19t43.5-66q0-8-2.5-15t-4.5-13l-27-75q-6 2-12.5 3.5T501-342q-8 42-30.5 78T411-204q-5 4-8.5 10.5T400-180q1 8 6 14t18 6Zm353-240q9 0 16-5t7-19q0-38-16-86.5T719-560q-9 0-17 2t-15 4l-75 28q2 6 3.5 12.5T618-501q42 8 78 30.5t60 59.5q3 5 9 8t12 3ZM618-501ZM459-618ZM342-459Zm159 117Z"/></svg>
                    <span>Color Mode</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-200 240-440l56-56 184 183 184-183 56 56-240 240Zm0-240L240-680l56-56 184 183 184-183 56 56-240 240Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="#" id="lMode-btn">Light Mode</a></li>
                        <li><a href="#" id="dMode-btn">Dark Mode</a></li>
                        <li><a href="#" id="bMode-btn">Blue Mode</a></li>
                        <li><a href="#" id="yMode-btn">Yellow Mode</a></li>
                    </div>

                </ul>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <h2 class="title">{{ $note->title }}</h2>
            <p class="desc">{{ $note->description }}</p>
            <p class="content">{{ $note->content }}</p>
        </div>

        <div class="container">
            <p>Word Count: {{str_word_count($note->content)}}</p>
            <p>Date Created: {{$note->created_at}}</p>
        </div>
    </main>
</body>
</html>
