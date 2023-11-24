<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist App</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-template-rows: auto 1fr auto;
            grid-template-areas:
                "sidebar header"
                "sidebar main"
                "sidebar footer";
            min-height: 100vh;
        }

        header, main, footer {
            padding: 20px;
            box-sizing: border-box;
        }

        header {
            grid-area: header;
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav {
            grid-area: sidebar;
            background-color: #555;
            color: white;
            padding: 20px;
            box-sizing: border-box;
        }

        main {
            grid-area: main;
        }

        footer {
            grid-area: footer;
            background-color: #333;
            color: white;
            text-align: center;
        }

        /* Song list styling */
        .song-list {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 10px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .song-header {
            font-weight: bold;
            border-bottom: 1px solid #ddd;
            padding: 10px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .song {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }

        /* Form styling */
        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .link-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Some additional styling for clarity */
        h1, h2 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <header>
        <h1>Playlist Name</h1>
        <div>
            <a href="#" class="link-button" id="editPlaylistButton">Edit Playlist</a>
            <a href="#" class="link-button" id="newPlaylistButton">New Playlist</a>
        </div>
    </header>

    <nav>
        <h2>Saved Playlists</h2>
        <ul>
            <li><a href="#">Playlist 1</a></li>
            <li><a href="#">Playlist 2</a></li>
            <li><a href="#">Playlist 3</a></li>
            <!-- Add more playlists as needed -->
        </ul>
    </nav>

    <main id="mainContent">
        <!-- Default content (song list) -->
        <h2>List of Songs</h2>
        <div class="song-list">
            <div class="song-header"> <!-- Table header -->
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            <!-- Song 1 -->
            <div class="song">
                <div>1</div>
                <div>Song Title 1</div>
                <div>Artist 1</div>
                <div>Album 1</div>
                <div>3:30</div>
            </div>
            <!-- Song 2 -->
            <div class="song">
                <div>2</div>
                <div>Song Title 2</div>
                <div>Artist 2</div>
                <div>Album 2</div>
                <div>4:15</div>
            </div>
            <!-- Add more songs as needed -->
        </div>

        <!-- Form for creating a new playlist (initially hidden) -->
        <form id="playlistForm" style="display: none;">
            <label for="playlist-name">Playlist Name:</label>
            <input type="text" id="playlist-name" name="playlist-name" required>

            <label for="song-selection">Select Song:</label>
            <select id="song-selection" name="song-selection" required>
                <option value="" disabled selected>Select a song</option>
                <option value="song1">Song Title 1 - Artist 1</option>
                <option value="song2">Song Title 2 - Artist 2</option>
                <!-- Add more song options as needed -->
            </select>

            <a href="#" class="link-button" id="savePlaylistButton">Save</a>
        </form>
    </main>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Terms</a></p>
    </footer>

    <script>
        // JavaScript to toggle between song list and form for creating a new playlist
        document.getElementById('newPlaylistButton').addEventListener('click', function() {
            document.getElementById('mainContent').innerHTML = document.getElementById('playlistForm').outerHTML;
            document.getElementById('playlistForm').style.display = 'grid';
        });

        document.getElementById('editPlaylistButton').addEventListener('click', function() {
            // Add logic for editing a playlist here
            alert('Edit Playlist functionality goes here.');
        });

        // Add event listener for save playlist button
        document.getElementById('savePlaylistButton').addEventListener('click', function() {
            // Add logic for saving the playlist here
            alert('Playlist saved!');
        });
    </script>
</body>
</html>

