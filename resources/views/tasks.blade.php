<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskFlow | Tasks</title>
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">

    <!-- FlatIcon CDN -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="body">
    <nav class="sidebar">
        <div class="header">
            <h1 class="logo">Task<span>Flow</span></h1>
        </div>

        <div class="seperator"></div>

        <div class="tabs">
            <a href="{{ url('/home') }}"><i class="fi fi-rr-house-blank"></i>Home</a>
            <a href="{{ url('/tasks') }}"><i class="fi fi-rr-notes"></i>My Tasks</a>
            <a href=""><i class="fi fi-rr-calendar-clock"></i>Schedule</a>
            <a href=""><i class="fi fi-rr-settings"></i>Settings</a>
        </div>

        <div class="seperator"></div>

        <div class="user">
            <div class="credentials">
                <h2>Username</h2>
                <p>username@gmail.com</p>
            </div>
            <a href="" class="logout"><i class="fi fi-rr-exit"></i></a>
        </div>
    </nav>

    <section class="tasks">
        <header>
            <h1>My Tasks</h1>
            <div class="search">
                <input type="text" placeholder="Search Here">
                <button><i class="fi fi-rr-search"></i></button>
            </div>
            <div class="nowsec" id="nowsec">
                <p><i class="fi fi-rr-temperature-high"></i></p>
                <span id="temp"></span>
                <p class="advice" id="advice"></p>
                <button class="create"><i class="fi fi-br-plus"></i>Create</button>
            </div>
        </header>
        <div class="today">
            <div class="header">
                <h1>Today</h1>
                <div class="selector">
                    <select>
                        <option value="" disabled selected>Organize</option>
                        <option value="">A - Z</option>
                        <option value="">Z - A</option>
                        <option value="">Time</option>
                        <option value="">Priority</option>
                    </select>
                    <i class="fi fi-br-bars-staggered"></i>
                </div>
            </div>
            <div class="task-container">
                <div class="task">
                    <div class="left">
                        <div class="strip"></div>
                        <div class="top">
                            <h1>Task Name</h1>
                            <p>10.00 AM - 1.00 PM</p>
                        </div>
                    </div>
                    <button class="pop"><i class="fi fi-br-menu-dots-vertical"></i></button>
                    <div class="popup">
                        <ul>
                            <li><button><i class="fi fi-rr-check-circle"></i>Done</button></li>
                            <li><button><i class="fi fi-rr-cross-circle"></i>Failed</button></li>
                            <li><button><i class="fi fi-rr-edit"></i>Edit</button></li>
                            <li><button><i class="fi fi-rr-trash"></i>Delete</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
