<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Clubs</title>
</head>
<body>
    <h1>All Clubs</h1>
    
    <a href="{{ url('/clubs/create') }}">Create New Club</a>
    
    <ul>
        @foreach($clubs as $club)
            <li>
                <h3>{{ $club->name }}</h3>
                <p>Country: {{ $club->country }}</p>
                <p>Established: {{ $club->established }}</p>
                <a href="{{ url('/clubs/show/' . $club->id) }}">View Details</a>
                <a href="{{ url('/clubs/edit/' . $club->id) }}">Edit</a>
                <a href="{{ url('/clubs/delete/' . $club->id) }}">Delete</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
