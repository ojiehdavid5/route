<!-- resources/views/greet.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <h1>Hello, {{ $name }}!</h1>
    <a href="{{ route('dashboard') }}">Go to Dashboard</a>

</body>
</html>

