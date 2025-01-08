<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Club</title>
</head>
<body>
    <h1>Edit Club: {{ $club->name }}</h1>
    
    <form action="{{ url('/api/club/' . $club->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Club Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $club->name }}" required><br><br>
        
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country" value="{{ $club->country }}" required><br><br>
        
        <label for="established">Year Established:</label><br>
        <input type="number" id="established" name="established" value="{{ $club->established }}" required><br><br>
        
        <button type="submit">Update Club</button>
    </form>
</body>
</html>
