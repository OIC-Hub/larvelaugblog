<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Edit News</title>
</head>
<body>
    <h2> Edit News </h2>
    <form action="{{ route('news.post') }}" method="post">
        @csrf
   <p>Title <br><input type="text" name="title" id=""></p>
   <p>Body<br> <textarea name="body"  cols="30" rows="10"></textarea></p>
   <p>Author<br><input type="text" name="author" id=""></p>
   <p> Picture <br><input type="text" name="picture" id=""></p>
   <input type="submit" value="Add News">
    </form>
</body>
</html>