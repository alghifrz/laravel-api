<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Club</title>
</head>
<body>
    <h1>Delete Club: {{ $club->name }}</h1>
    
    <form action="{{ url('/api/club/' . $club->id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <p>Are you sure you want to delete this club?</p>
        <button type="submit">Yes, Delete</button>
    </form>
    
    <a href="{{ url('/clubs') }}">Cancel</a>
</body>
</html>
