<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Message</title>
</head>
<body>
  <h3>Вы зарегистрировались на забег</h3>
  <p>Время забега - {{ $data->event->starts_at }}</p>
  <p>Название - {{ $data->display_name }}</p>
  <p>Место проведения - {{ $data->address }}</p>
</body>
</html>