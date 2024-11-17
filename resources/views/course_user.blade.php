<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->course_name }} - Enrolled Users</title>
</head>
<body>
    <header>
        <h1>Users Enrolled in {{ $course->course_name }}</h1>
    </header>

    <main>
        @if ($course->users->isEmpty())
            <p>No users are enrolled in this course yet.</p>
        @else
            <ul>
                @foreach ($course->users as $user)
                    <li>{{ $user->name }} (Email: {{ $user->email }})</li>
                @endforeach
            </ul>
        @endif
    </main>
</body>
</html>
