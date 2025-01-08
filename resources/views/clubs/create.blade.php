<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Club</title>
</head>
<body>
    <h1>Create New Club</h1>
    
    <form action="{{ url('/api/club') }}" method="POST">
        @csrf
        <label for="name">Club Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country" required><br><br>
        
        <label for="established">Year Established:</label><br>
        <input type="number" id="established" name="established" required><br><br>
        
        <button type="submit">Create Club</button>
    </form>
</body>
</html>
