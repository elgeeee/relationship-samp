<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users and Courses</title>
</head>
<body>
    <header>
        <h1>Users and Courses</h1>
    </header>

    <main>
        <section>
            <h2>All Users</h2>
            <ul>
                @foreach ($users as $user)
                        {{ $user->name }} ({{ $user->email }})
                        <ul>
                            @foreach ($user->courses as $course)
                                <li>{{ $course->course_name }}</li>
                            @endforeach
                        </ul>
                @endforeach
            </ul>
        </section>

        <hr>

        <section>
            <h2>Courses</h2>
            <ul>
                @foreach ($courses as $course)
                    <li>
                        <a href="/course/{{ $course->id }}">{{ $course->course_name }}</a>
                    </li>
                @endforeach
            </ul>
        </section>
        
    </main>
</body>
</html>