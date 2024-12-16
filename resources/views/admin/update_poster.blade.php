<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update | Kupon</title>
</head>
<body>
    <div>
        <!-- Bagian awal table --> 
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container-fluid " style="width: 100%; padding-bottom: 40px;">
            <div class="row align-items-center justify-content: center; display:flex;">
            </div>

            <div class="container" style=" padding: 30px; border-radius: 20px;">
                <div class="row" style="text-align: center; padding-left: 20px; padding-right: 20px;">
                    <div class="card mt-4 shadow-lg" style="border-radius: 20px;  border: 3px solid">
                        <div class="card-header bg-dark text-light shadow-lg mt-3" style="border-radius: 20px; font-family: times new roman; margin-bottom:10px">
                            <h2>FORM UPDATE POSTER</h2>
                        </div>
                            <!-- Form untuk update kupon -->
                            <form method="POST" action="{{ route('posterupdate', ['nama' => $user->nama]) }}">
                                @csrf
                                @method('PUT') <!-- Gunakan PUT untuk update -->
                                
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <div class="mb-3">
                                    <input value="{{ $user->nama }}" name="nama" type="text" class="form-control shadow-lg" id="nama" placeholder="Nama Acara" required>
                                </div>

                                <div class="mb-3">
                                    <textarea name="deskripsi" class="form-control shadow-lg" id="deskripsi" rows="4" placeholder="Deskripsi Acara" required>{{ $user->deskripsi }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <input name="image" type="file" class="form-control shadow-lg" id="gambar">
                                </div>
                                
                                <div>
                                    <button value="Update" name="tombol" type="submit" class="btn btn-danger shadow-lg" style="margin-bottom: 20px; width: 20%;">Update</button>
                                </div>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian akhir table -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
