
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css_sebelum_login/style2.css">
    <link rel="stylesheet" href="../css_setelah_login/style_harga.css">
    <title>Paket Page</title>
</head>
<body>
      <!--layout 1 awal-->
   <div class="container-fluid bg-dark text-light" style="height: 50vh;">
    <div class="row align-items-center">
      <div class="col-12 text-center">
       
      </div>
   </div>
   
   
    <!--layout 1 akhir--> 

    
    <div class="container bg-light text-dark shadow-lg" style="height: 110vh; width: 800px; border-radius: 20px; margin-top: 100px;">
    <div class="row" style="text-align: center; padding-left: 20px; padding-right: 20px;">
      <h1 style="text-align: center; font-family: Times New Roman; padding-top: 30px;">Form Pemesanan Tiket</h1>
    </div>

    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" style="margin: 50px">
        @csrf
        @if(session('message'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    @endif

        <div class="form-group">
            <label for="kupon" style="margin-bottom: 8px;">Pilih Tiket</label ><br>
            <select name="kupon_id" id="kupon" class="form-select" required>
                @foreach($kupons as $kupon)
                    <option value="{{ $kupon->id }}">{{ $kupon->nama }} - {{ $kupon->harga }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="user_name" style="margin-bottom: 8px;">Nama</label>
            <input type="text" name="user_name" id="user_name" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="user_email" style="margin-bottom: 8px;">Email</label>
            <input type="email" name="user_email" id="user_email" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="user_phone" style="margin-bottom: 8px;">No HP</label>
            <input type="text" name="user_phone" id="user_phone" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label for="payment_proof" style="margin-bottom: 8px;">Upload Bukti Pembayaran</label>
            <input type="file" name="payment_proof" id="payment_proof" class="form-control">
        </div>
        <br>
        <div class="d-flex justify-content-center " style="margin-top: 20px">
            <a href="../setelah_login/event"><button type="button" class="btn btn-success me-2">Kembali</button></a>
            <a href="#gb1">
                <div class="animasi" id="gb1">
                 <a href="../gambar/QRIS.png"><button type="button" class="btn btn-primary me-2">Bayar</button></a>
                </div>
             </a> 
            <button type="submit" class="btn btn-danger me-2">Pesan</button>
        </div>
        
    </form>

    </div>  

    <div>
      <br><br>
      <!--footer-->
    <footer>
        <div class="footer-content">
            <div>
            <p>PAGE</p>
            <hr>
            <br>
            <div class="footer-text">
                <P>Event</P>
                <p>Poster</p>
                <p>Kontak</p>
                <br><br>
            </div>
            </div>
            <div>
            <p>GET SOCIAL </p>
            <hr>
            <br>
            <div class="footer-text">
                <P>+62-123-146</P>
                <p>KebudayaanIndonesia@gmail.com</p>
                <p>@kebudayaan_Indonesia</p>
                <br><br>
            </div>
            </div>
            <div>
            AUTHOR
            <hr>
            <br>
            <div class="footer-text">
                <P>@Muhammad Yusuf Abdurrahman</P>
                <p>@Rizam Hakiki</p>
                <p>@Lifio Syifa Kurniawan</p>
                <br><br>
            </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
  
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>