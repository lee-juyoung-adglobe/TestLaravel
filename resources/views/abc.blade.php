<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    新規route テスト
    what2
    @forelse($hello_array as $ha)
        <p>{{ $ha }}</p>
    @empty
    <p>ha is empty</p>
    @endforelse

    {{-- {{ $hello_array[2] }} --}}
    
</body>
</html>