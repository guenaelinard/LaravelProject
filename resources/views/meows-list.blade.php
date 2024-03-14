<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
<h1>Liste des Meowssages</h1>
<ul>
    @foreach($meows as $meow)
        <div>
            <li>{{ $meow->content }}</li>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="meow_id" value="{{ $meow->id }}">
                <input type="text" name="content" placeholder="Your comment">
                <button type="submit">Submit</button>
            </form>
        </div>
@endforeach
</body>
</html>
