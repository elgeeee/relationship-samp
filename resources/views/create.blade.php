<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <header>
        <h1>Create a New User</h1>
    </header>

    <main>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <fieldset>
                <legend>Personal Information</legend>
                
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <div>
                    <label for="bio">Bio:</label>
                    <textarea name="bio" id="bio" required></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Course Selection</legend>
                
                <div>
                    <label for="courses">Select Courses:</label>
                    <select name="courses[]" id="courses" multiple required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>
            </fieldset>

            <fieldset>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
            </fieldset>

            <button type="submit">Save</button>
        </form>
    </main>
</body>
</html>
