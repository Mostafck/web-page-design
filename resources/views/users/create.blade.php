<!DOCTYPE html>
<html>
<head>
    <title> new users</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>new user</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label>name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>emale:</label><br>
        <input type="email" name="email" required><br><br>

        <label> password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">enter </button>
    </form>
</body>
</html>
