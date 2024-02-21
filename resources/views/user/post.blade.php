<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Post Form</h1>
    <form action="{{ route('post.save') }}" method="post">
        @csrf
        
        <input type="hidden" id="title" name="title" value="Token Number is :"><br>

        <label for="">Token Number:</label>
        <input type="text" id="author" name="author" value="{{ auth()->user()->id }}"><br>

        <button type="submit">Create post</button>

    </form>
</body>
</html>