<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Club</title>
</head>
<body>
    <h1>Club Details</h1>
    
    <h2>{{ $club->name }}</h2>
    <p>Country: {{ $club->country }}</p>
    <p>Year Established: {{ $club->established }}</p>
    
    <a href="{{ url('/api/club') }}">Back to All Clubs</a>
</body>
</html>
