<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->name }}'s Profile</title>
</head>
<body>
    <header>
        <h1>{{ $user->name }}'s Profile</h1>
        <p>Email: {{ $user->email }}</p>
        <p>Bio: {{ $user->profile->bio ?? 'No bio available' }}</p>
    </header>

    <main>
        <h2>Enrolled Courses</h2>
        <ul>
            @foreach ($user->courses as $course)
                <li>{{ $course->course_name }}</li>
            @endforeach
        </ul>

        <a href="{{ route('users') }}">Back to Users</a>
    </main>
</body>
</html>
