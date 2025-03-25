<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Default Theme</title>
</head>
<body style="background-color: #f9fafb; color: #1a202c;">
    <h1 style="font-size: 2rem;">🟢 Default Theme</h1>
    <p>Active Theme: {{ $activeTheme }}</p>

    <form action="{{ route('theme.change') }}" method="POST">
        @csrf
        <select name="theme" onchange="this.form.submit()">
            <option value="default" {{ $activeTheme === 'default' ? 'selected' : '' }}>Default</option>
            <option value="modern" {{ $activeTheme === 'modern' ? 'selected' : '' }}>Modern</option>
        </select>
    </form>
</body>
</html>
