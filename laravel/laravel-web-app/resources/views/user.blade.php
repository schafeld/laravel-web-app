<!DOCTYPE html>
@php
    $id = strtoupper($id);
@endphp
<html>
<head>
    <title>User: {{ $id }}</title>
</head>
<body>
    <h1>User: {{ $id }}</h1>
    <p>User name: {{ $user->name }}</p>
</body>
</html>
