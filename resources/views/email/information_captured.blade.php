<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
</head>
<body>
    {{ $person->first_name }} {{ $person->last_name }} your details was captured by {{ config('app.name') }}
</body>
</html>
