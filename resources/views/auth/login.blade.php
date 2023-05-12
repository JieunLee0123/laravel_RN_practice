<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 폼</title>
</head>
<body>
  @isset($errors)
    <p>{{ $errors->first('message') }}</p>
  @endisset

  <form name="loginform" action="/login" method="post" id="loginform">
    {{ csrf_field() }}

    <ul>
      <li>
        <label>
          <b>메일주소 : </b>
          <input type="text" name="email" size="30" value="{{ old('email') }}"/>
        </label>
      </li>
      <li>
        <label>
          <b>비밀번호 : </b>
          <input type="password" name="password" size="30" />
        </label>
      </li>
    </ul>

    <button type="submit" name="action" value="send">보내기</button>
  </form>
</body>
</html>