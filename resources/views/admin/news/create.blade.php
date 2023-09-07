<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Post News</title>
</head>
<body>
    <h2> Add News </h2>
    @if($errors->any())
    <div @style(['color:red; width:200px'])>
         @foreach ($errors->all() as $error)
             
           <p>{{ $error }}</p>
         @endforeach
         
       
      </div>
    @endif
      
    <form action="{{ route('news.post') }}" method="post">
        @csrf
   <p>Title <br><input type="text"class="invalid" name="title" id=""></p>
      @error('title') <p> {{ $message }} </p>   @enderror
   <p>Body<br> <textarea name="body"  cols="30" rows="10"></textarea></p>
   @error('body') <p> {{ $message }} </p>   @enderror
   <p>Author<br><input type="text" name="author" id=""></p>
   @error('author') <p> {{ $message }} </p>   @enderror
   <p> Picture <br><input type="text" name="picture" id=""></p>
   @error('picture') <p> {{ $message }} </p>   @enderror
   <input type="submit" value="Add News">
    </form>
</body>
</html>