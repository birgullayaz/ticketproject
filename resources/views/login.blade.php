<!DOCTYPE html>

<html>

<head></head>

<body>
	
<form method="POST" action="/ticket/public/logincheck">
    @csrf
    <!-- Equivalent to... -->
   Email= <input type="text" name="email" value="" />
   Şifre= <input type="text" name="password" value="" />

   <input type="submit" value="Giriş Yap">
</form>

</body>


</html>