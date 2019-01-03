<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mail</title>
</head>
<body>
  <pre>
    Hi,

    The user : {{$contact['name']}} with email {{$contact['email']}},

    send you a message: {{$contact['message']}}

    Thanks for watching! Bye!
  </pre>
</body>
</html>