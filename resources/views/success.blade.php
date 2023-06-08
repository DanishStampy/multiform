<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration success</title>
</head>
<body>
    <div>
        {{-- thanks for the {{ request()->name }} and {{ request()->email }} --}}
        {{ request()->data['name'] }}
    </div>
</body>
</html>
