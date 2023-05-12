<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>등록 완료</title>
</head>
<body>
  {{ $user->name }} 님을 등록했습니다.<br>
  메일주소 : {{ $user->email }}<br>
  비밀번호 : {{ $user->password }}
</body>
</html>