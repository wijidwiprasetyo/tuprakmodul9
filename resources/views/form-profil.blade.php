<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <div class="container text-center p-4">
        <h1>Data Mahasiswa</h1>
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline my-2 my-lg-0 float-right" action="/search" method="GET">
                    <input class="form-control mr-sm-2" type="text" name="search" value="{{old('search')}}" placeholder="Search">
                    <span class="input-group-btn">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>Search</button>
                        </span>
                    </span>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 p-3 text-center">
                <div class="container btn-group-vertical">
                    <a type="a" class="btn btn-primary mt-2" href="/">Home</a>
                    <a type="a" class="btn btn-primary mt-2" href="/insert">Insert Data</a>
                    <a type="a" class="btn btn-primary mt-2" href="/delete">Delete Data</a>
                    <a type="a" class="btn btn-primary mt-2" href="/sort/nama">Sort by Nama</a>
                    <a type="a" class="btn btn-primary mt-2" href="/sort/ipk">Sort by IPK</a>
                </div>
            </div>
            <div class="col p-3">
                <div class="m-auuto">
                    {{-- isi konten  --}}
                    <div class="row">
                        <div class="col-md-8 col-xl-6">
                            <h3>Isi Data Siswa</h3>
                            <hr>
                            <form action="{{url('/proses_form_profil')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama')}}">
                                    @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{old('tempat_lahir')}}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" value="{{old('tanggal_lahir')}}" >
                                    @error('tanggal_lahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"> {{old('alamat')}}</textarea>
                                </div>
                                <div class="form-group mt-1">
                                    <label for="sex">Jenis Kelamin</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="sex" id="sex" value="L" {{old('sex')=='L'?'checked':''}}>
                                        <label for="laki-laki" class="form-check-label">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="sex" id="sex" value="P" {{old('sex')=='P'?'checked':''}}>
                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor HP</label>
                                    <input type="number" class="form-control @error('hp') is-invalid @enderror" name="hp" id="hp" value="{{old('hp')}}">
                                    @error('hp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="angkatan">Tahun angkatan</label>
                                    <input type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" id="angkatan" value="{{old('angkatan')}}">
                                    @error('angkatan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="piljur1">Pilihan jurusan 1</label>
                                    <input type="text" class="form-control @error('piljur1') is-invalid @enderror" name="piljur1" id="piljur1" value="{{old('piljur1')}}">
                                    @error('piljur1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="piljur2">Pilihan jurusan 2</label>
                                    <input type="text" class="form-control  @error('piljur2') is-invalid @enderror" name="piljur2" id="piljur2" value="{{old('piljur2')}}">
                                    @error('piljur2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="univ">Universitas Tujuan</label>
                                    <input type="text" class="form-control  @error('univ') is-invalid @enderror" name="univ" id="univ" value="{{old('univ')}}">
                                    @error('univ')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="un">Nilai UN</label>
                                    <input type="text" class="form-control  @error('un') is-invalid @enderror" name="un" id="un" value="{{old('un')}}">
                                    @error('un')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto diri</label>
                                    <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto" id="foto" value="{{old('foto')}}">
                                    @error('foto')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <input type="submit" class="btn btn-primary mt-2" value="submit">
                                @csrf
                            </form>
                        </div>
                    </div>
                    {{-- akhir konten --}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>

