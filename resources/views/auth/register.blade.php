<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Kullanıcı Giriş</title>


    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">

<form class="form-signin" action="" method="POST">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Lütfen Kayıt Olun</h1>


    <label for="inputName" class="sr-only">İsim Soyisim</label>
    <input type="text" id="inputName" name="name" class="form-control" placeholder="isim soyisim girin" required autofocus>

    <label for="inputEmail" class="sr-only">Email addres</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email addresinizi girin" required >

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Şifrenizi girin" required>

    <label for="inputPasswordConfirmation" class="sr-only">Password Tekrar</label>
    <input type="password" id="inputPasswordConfirmation" name="password_confirmation" class="form-control" placeholder="Şifrenizi tekrar girin" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Beni hatırla
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
    <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>
</form>


</body>
</html>
