
<?php

// include 'koneksi2.php';

  // session_start();
  

  // if (isset($_POST['login'])){

  //   $email = mysqli_real_escape_string($koneksi, $_POST['email']);
  //   $password = mysqli_real_escape_string($koneksi, md5($_POST['password'])); 

  //   $select = mysqli_query($koneksi, "SELECT * FROM tbl_registrasi WHERE email = '$email'
  //   AND password = '$password'") or die('query failed');

  //   if(mysqli_num_rows($select) > 0 ) {
  //     $row = mysqli_fetch_assoc($select);
  //     $_SESSION['user_id'] = $row ['id'];
  //     $_SESSION['status']="login";
  //     header('Location: ../home/index.php');
  //   }else{
  //     $message = 'incorect email or password';
  //   }

  //   $error = true;

  // }


  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_login/style.css">
    <title>Login</title>
</head>
<body>
    <!--bagian awal navigasi bar--> 
    <nav class="navbar navbar-expand-lg navbar-dark  text-light sticky-top " style="background-color: #3c3d3ee8">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
      <!--layout 1 awal-->
      <div class="box">
        <div class="container"  style="border: 2px solid white; width: 30%; height: 30%; border-radius: 20px;  box-shadow:20px 20px 20px rgba(0,0,0,0.8);">
          <div class="top-header" style="padding-top:15px;">
            
            @if(session('success'))
            <div class="alert alert-succes alert-dismissible fade show" role="alert">
                 {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('loginerror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('loginerror') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
            @endif

          
            <header>Login</header>
            {{-- @if($loginResult === 'sukses')
            <div class="alert alert-success">
                Login berhasil.
            </div>
            @elseif($loginResult === 'gagal')
            <div class="alert alert-danger">
                Login gagal. Periksa email dan password.
            </div>
            @endif --}}
            <?php if(isset($error)) : ?>
                <h3 style="font-style:italic; color:rgb(245, 239, 231); text-align:center">Username / Password salah</h3>
            <?php endif; ?>
            <center><p style="border-bottom: 4px solid white; width: 100%;"></p></center>
          </div>

          <form method="POST" action="{{ route('login') }}" class="container" enctype="multipart/form-data">
            @csrf
          <div class="input-field">
            <input name="email" type="text" class="input @error('email') is-invalid @enderror" placeholder="Email Addres" required autofocus value="{{ old('email') }}">
            <i class="bi bi-person"></i>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            
          </div>
          <div class="input-field">
            <input name="password" type="password" class="input" placeholder="password" required>
            <i class="bi bi-lock"></i>
          </div>  
          <div class="input-field">
           <input name="login" type="submit" class="submit" value="Login">
          </div>
          <div class="bottom">
            <div class="left">
              <label for="check">Don't have an account? </label>
            <div class="right">
              <label><a href="{{ route('register') }}"> Registrasi now</a></label><br><br><br>
            </div>
          </div>
          </form>
    

         
        </div>
        <div class="right" style="text-align: center; padding-bottom: 15px;">
              <label><a href="../login/login_admin"> Login Sebagai Admin?</a></label><br><br>
            </div>
      </div>
      </div>
     
    
    <!--layout 1 akhir--> 

   
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>