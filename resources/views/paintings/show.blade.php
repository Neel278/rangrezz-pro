<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>{{ $painting->title }}</li>
        <li>{{ $painting->subtitle }}</li>
        <li>{{ $painting->description }}</li>
        <li>{{ $painting->painting_pic }}</li>
        <li>{{ $painting->starting_price }}</li>
        <li>{{ $painting->ending_date }}</li>
    </ul>
</body>

</html>