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
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">IPK</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                    <td>
                                        {{$mahasiswa->nim}}
                                    </td>
                                    <td>
                                        {{$mahasiswa->nama}}
                                    </td>
                                    <td>
                                        {{$mahasiswa->tanggal_lahir}}
                                    </td>
                                    <td>
                                        {{$mahasiswa->jurusan}}
                                    </td>
                                    <td>
                                        {{$mahasiswa->ipk}}
                                    </td>
                                    <td>
                                        <a href="/detail/{{{$mahasiswa->id}}}" class="btn btn-success">detail</a>
                                        <a href="/hapus/{{{$mahasiswa->id}}}" class="btn btn-danger">Hapus</a>
                                    </td>
                                <tr>
                                @empty
                                @endforelse
                            </tr>
                            @if(session()->get('success'))
                            <div class="alert alert-primary alert-dimissible fade show" role="alert">
                                <strong>{{session()->get('success')}};</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close">x</button>
                            </div>
                            @endif
                            @if(session()->get('warning'))
                            <div class="alert alert-warning alert-dimissible fade show" role="alert">
                                <strong>{{session()->get('warning')}};</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close">x</button>
                            </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

