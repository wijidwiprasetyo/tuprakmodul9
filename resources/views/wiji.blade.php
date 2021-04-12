<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pendaftar Mahasiswa</title>
</head>
<body>
    <h1>Data Pendaftar Mahasiswa</h1>
    <img src="/img/{{$mahasiswas->foto}}" alt=""> <br>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{$mahasiswas->nama}}</td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>: {{$mahasiswas->tempat_lahir}}</td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td> :
                {{$mahasiswas->tanggal_lahir}}
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:
                {{$mahasiswas->alamat}}
            </td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>:
                {{$mahasiswas->email}}
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:
                {{$mahasiswas->sex}}
            </td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>:
                {{$mahasiswas->hp}}
            </td>
        </tr>
        <tr>
            <td>Pilihan Jurusan 1</td>
            <td>:
                {{$mahasiswas->piljur1}}
            </td>
        </tr>
        <tr>
            <td>Pilihan Jurusan 2</td>
            <td>:
                {{$mahasiswas->piljur2}}
            </td>
        </tr>
        <tr>
            <td>Pilihan Universitas</td>
            <td>:
                {{$mahasiswas->univ}}
            </td>
        </tr>
        <tr>
            <td>Nilai UN</td>
            <td>:
                {{$mahasiswas->un}}
            </td>
        </tr>

    </table>
    {{-- <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="row">Nama</th>
                <th scope="row">Tempat lahir</th>
                <th scope="row">Tanggal Lahir</th>
                <th scope="row">E-mail</th>
                <th scope="row">Alamat</th>
                <th scope="row">Jenis Kelamin</th>
                <th scope="row">No Handphone</th>
                <th scope="row">Pilihan Jurusan 1</th>
                <th scope="row">Pilihan Jurusan 2</th>
                <th scope="row">Pilihan Universitas</th>
                <th scope="row">Nilai UN</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    <td>
                        {{$mahasiswas->nama}}
                    </td>
                    <td>
                        {{$mahasiswas->tempat_lahir}}
                    </td>
                    <td>
                        {{$mahasiswas->tanggal_lahir}}
                    </td>
                    <td>
                        {{$mahasiswas->alamat}}
                    </td>
                    <td>
                        {{$mahasiswas->email}}
                    </td>
                    <td>
                        {{$mahasiswas->sex}}
                    </td>
                    <td>
                        {{$mahasiswas->hp}}
                    </td>
                    <td>
                        {{$mahasiswas->piljur1}}
                    </td>
                    <td>
                        {{$mahasiswas->piljur2}}
                    </td>
                    <td>
                        {{$mahasiswas->univ}}
                    </td>
                    <td>
                        {{$mahasiswas->un}}
                    </td>
            </tr>
        </tbody>
    </table> --}}
</body>
</html>
