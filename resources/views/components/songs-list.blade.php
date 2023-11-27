<h2>List of Songs</h2>
<div class="song-list">
  <div class="song-header"> <!-- Table header -->
    <div>Serial No</div>
    <div>Song Title</div>
    <div>Artist Name</div>
    <div>Album Name</div>
    <div>Duration</div>
  </div>
@foreach($songs as $song)
  <!-- Song 1 -->
  <div class="song">
    <div>{{ $song->id }}</div>
    <div>{{ $song->title }}</div>
    <div>{{ $song->artist }}</div>
    <div>Album 1</div>
    <div>3:30</div>
  </div>
@endforeach
</div>

