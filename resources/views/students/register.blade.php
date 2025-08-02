<!DOCTYPE html>
<html>
<head>
    <title>Register Student</title>
</head>
<body>
    <h2>Register a New Student</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/register" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age') }}"><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
