<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modern Theme</title>
</head>
<body style="background: linear-gradient(to right, #ece9e6, #ffffff); color: #333;">
    <h1 style="font-size: 2rem;">🔵 Modern Theme</h1>
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
