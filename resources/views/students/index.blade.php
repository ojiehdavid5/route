<!-- resources/views/students/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
</head>
<body>
    <h1>All Students</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} - {{ $student->email }} - {{ $student->age }}</li>
        @endforeach
    </ul>
</body>
</html>
