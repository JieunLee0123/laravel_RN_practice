<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사용자 등록폼</title>
</head>
<body>
  <form name="registform" action="/register" method="post" id="registform">
    {{ csrf_field() }}
    <ul>
      <li>
        <label>
          <b>이름 : </b>
          <input type="text" name="name" size="30" />
          <span>{{ $errors->first('name') }}</span>
        </label>
      </li>
      <li>
        <label>
          <b>메일주소 : </b>
          <input type="text" name="email" size="30" />
          <span>{{ $errors->first('email') }}</span>
        </label>
      </li>
      <li>
        <label>
          <b>비밀번호 : </b>
          <input type="password" name="password" size="30" />
          <span>{{ $errors->first('password') }}</span>
        </label>
      </li>
      <li>
        <label>
          <b>비밀번호( 확인 ) : </b>
          <input type="password" name="password_confirmation" size="30" />
          <span>{{ $errors->first('password_confirmation') }}</span>
        </label>
      </li>
    </ul>

    <button type="submit" name="action" value="send">보내기</button>
  </form>
</body>
</html>