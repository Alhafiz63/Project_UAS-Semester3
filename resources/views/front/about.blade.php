<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <div class="container">
        <h2>About Personal Programmer</h2>
        @foreach($programmers as $programmer)
            <div>
                <h3>{{ $programmer->name }}</h3>
                <p>Email: {{ $programmer->email }}</p>
                <p>{{ $programmer->bio }}</p>
                @if($programmer->avatar)
                    <img src="{{ Storage::url($programmer->avatar) }}" alt="Avatar" width="100">
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
