<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
    <h2>News Page </h2>
    @if (count($news) >0)
<table border="1">
    <tr>
        <th>S/N</th>
        <th>Title</th>
        <th>Picture</th>
        <th>Author</th>
    </tr>
    @php
        $sn=1
    @endphp
    @foreach ($news as $new)
    <tr>
        <td>{{ $sn ++ }}</td>
        <td>{{ $new->title }}</td>
        <td> <img src="{{ $new->picture}}" alt=""></td>
        <td>{{ $new->author}}</td>
    </tr>
    @endforeach
</table>
@else
<p> No news available 
@endif

</body>
</html>