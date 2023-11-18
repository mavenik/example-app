<html>
<title>Songs Page</title>
<body>
<h2>Song - Blade Template</h2>

<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
</table>
</body>
</html>
