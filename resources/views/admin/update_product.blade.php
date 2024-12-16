<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update|Product</title>
</head>
<body>
    <div>
     <!--bagian awal table--> 
     <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container-fluid bg-dark text-light" style="width: 100%; padding-bottom: 40px; ">
        <div class="row align-items-center justify-content: center; display:flex;">
          <h2 style="text-align: center; font-family: times new roman; margin-top: 20px; margin-bottom: 30px">--UPDATE PRODUCT--</h2>
          <h1 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-pencil-fill"></i></h1>
          <div class="col-12 text-center justify-content: center; display:flex;">
           
          </div>
       </div>
    
       <div class="container bg-warning text-dark shadow-lg" style=" padding: 30px; border-radius: 20px;">

        <div class="row" style="text-align: center; padding-left: 20px; padding-right: 20px;">
    
          <div class="card mt-4 shadow-lg" style="border-radius: 20px;">
            <div class="card-header bg-dark text-light shadow-lg mt-3" style="border-radius: 20px; font-family: times new roman; margin-bottom:10px">
                <h2>FORM UPDATE PRODUCT</h2>

                <form method="POST" action="{{ route('productupdate', ['jenis' => $user->jenis]) }}">
                    @csrf
                        @if(session('success'))
                      <div class="alert alert-success">
                         {{ session('success') }}
                      </div>
                        @endif
               
                </div>
              
                 
                  <div class="mb-3 ">
                    <input  value="{{ $user->jenis }}" name="jenis" type="text" class="form-control shadow-lg" id="name" aria-describedby="name" placeholder="Jenis Product">
                  </div>
                  <div class="mb-3">
                    <input value="{{ $user->penawaran }}" name="penawaran" type="text" class="form-control shadow-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penawaran Product">
                  </div>
                  <div class="mb-3 ">
                    <input value="{{ $user->harga }}"  name="harga" type="text" class="form-control shadow-lg" id="name" aria-describedby="name" placeholder="Harga Product">
                  </div>
                  <div class="mb-3">
                    <select name="kategori" class="form-select form-select-md" aria-label="Small select example">
                        <option selected disabled>Kategori Product</option>
                        <option value="Paket Wisuda" {{ $user->kategori == 'Paket Wisuda' ? 'selected' : '' }}>Paket Wisuda</option>
                        <option value="Paket Studio" {{ $user->kategori == 'Paket Studio' ? 'selected' : '' }}>Paket Studio</option>
                        <option value="Paket Wedding" {{ $user->kategori == 'Paket Wedding' ? 'selected' : '' }}>Paket Wedding</option>
                    </select>
                </div>
                
                  <div>
                    <button value="Tambah" name="tombol" type="submit" class="btn btn-danger shadow-lg" style="margin-bottom: 20px; width: 20%;">Update</button>
                  </div>
                 
                </form>
            </div>
           
               
            </div>
            </div>
            
    
          </div>
    
          
         
          
        </div>
        </div>
    <!--bagian akhir table-->
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>