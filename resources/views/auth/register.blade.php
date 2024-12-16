<?php
// include 'koneksi.php';

// if (isset($_POST['submit'])){

//         $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
//         $email = mysqli_real_escape_string($koneksi, $_POST['email']);
//         $password = mysqli_real_escape_string($koneksi, md5($_POST['password']));
//         $cpassword = mysqli_real_escape_string($koneksi, md5($_POST['cpassword']));
//         $image = $_FILES['image']['name'];
//         $image_size = $_FILES['image']['size'];
//         $image_tmp_name = $_FILES['image']['tmp_name'];
//         $image_folder = 'upload_img/'.$image;

//         $select = mysqli_query($koneksi, "SELECT * FROM tbl_registrasi WHERE email = '$email' AND nama = '$nama' ") or die('query failed');

//         if(mysqli_num_rows($select) > 0){
//             $message[] = 'user alredy existe';
//         }else{
            
//             if($password != $cpassword){
//                 $message[] = 'password not matched!';
//             }elseif($image_size > 20000000 ){
//                 $message[] = 'image size is to large!!!';
//             }else{
              
//               $insert = mysqli_query($koneksi, "INSERT INTO tbl_registrasi (nama, email, password, image) VALUES ('$nama', '$email', '$password','$image')") or die('query failed');

//               if($insert){
//                   move_uploaded_file($image_tmp_name, $image_folder);
//                   // $message[] = 'registered successfully';
//                   echo "<script>
//                         alert('Anda Berhasil Registrasi!!');
//                         document.location = '../class/index.php'
//                         </script>";
//                   // header('Location:../class/index.php'  );
//               }else{
//                   $message[] = 'Registered failed!';
//               }
//           }
//         }

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
    <link rel="stylesheet" href="../css_login/style_registrasi.css">
    <title>Registrasi</title>
    <style>
        .message {
            font-family: 'Times New Roman';
            margin: 5px 0;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            padding:10px;
            background-color: red;
            border-radius: 5px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
            color: var(--white);
            font-size: 40px;
            text-align: center;
            color: rgb(245, 239, 231);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <!--layout 1 awal-->
    <div class="container-fluid" style="justify-content; width: 30%; height: 100%; border: 2px solid white;
                                         border-radius:20px; box-shadow:20px 20px 20px rgba(0,0,0,0.8);
                                         margin-top: 7%; padding-top: 10px; padding-bottom: 10px; margin-bottom: 50px">

        <div class="col" style="justify-content;">
            <div class="top-header">
                <header>Registrasi</header>
            </div>

            <div class="input-field shadow-lg">
              @if(session('success'))
               <div class="alert alert-success">
                {{ session('success') }}
               </div>
              @endif
    
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form method="POST" action="{{ route('register') }}" class="container" enctype="multipart/form-data">
                    @csrf
                    @if (isset($message))
                        @foreach ($message as $msg)
                            <div class="message">{{ $msg }}</div>
                        @endforeach
                    @endif
                    <center><p style="border-bottom: 4px solid white; width: 100%;"></p></center>
                    <input name="name" type="text" class="input" placeholder="Enter Username" required autofocus><br>
                    <input name="email" type="email" class="input" placeholder="Enter Email" required><br>
                    <input name="password" type="password" class="input" placeholder="Enter password" required><br>
                    <input name="password_confirmation" type="password" class="input" placeholder="Confrim password" required><br>
                    <input type="file" name="image" class="input" accept="image/jpg, image/jpeg, image/png"><br>
                    <a href="#"><input type="submit" name="submit" class="submit" value="Registrasi"></a>
                    <div class="bottom">
                        <div class="left">
                            <label for="check">Already have an account?</label>
                        </div>
                        <div class="right">
                            <label><a href="{{ route('login') }}">Login now</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--layout 1 akhir-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
