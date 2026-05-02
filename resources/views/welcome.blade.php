<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirps App</title>
</head>
<body>

```
<h1>Daftar Chirps</h1>

<ul>
    @foreach ($chirps as $chirp)
        <li>{{ $chirp }}</li>
    @endforeach
</ul>
```

</body>
</html>
