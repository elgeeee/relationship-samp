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
        <section>
            <h2>Course Information</h2>
            <p><strong>Title:</strong> {{ $course->course_name }}</p>
            <p><strong>Description:</strong> {{ $course->description ?? 'No description available' }}</p>
        </section>

        <section>
            <h2>Enrolled Users</h2>
            @if($course->users->isEmpty())
                <p>No users are enrolled in this course yet.</p>
            @else
                @foreach ($course->users as $user)
                    {{ $user->name }} ({{ $user->email }})
                @endforeach
            @endif
        </section>

    </main>
</body>
</html>
