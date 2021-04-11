<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // eloquent
    public function home(){
        $result = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    // eloquent
    public function insert(){
        $result = Mahasiswa::create (

            [
                "nim" => "19053364",
                "nama" => "Wiji Dwi Prasetyo",
                "tanggal_lahir"=> "2000-11-05",
                "jurusan" => "pendidikan teknik informatika",
                "ipk" => 3.5

            ]
        );
        $result = Mahasiswa::create (
            [
                "nim" => "19053365",
                "nama" => "Agus salim",
                "tanggal_lahir"=> "2000-11-05",
                "jurusan" => "pendidikan teknik otomotif",
                "ipk" => 3.9
            ]
        );
        $result = Mahasiswa::create (
            [
                "nim" => "19053363",
                "nama" => "Edwin salim",
                "tanggal_lahir"=> "2000-11-05",
                "jurusan" => "pendidikan teknik sipil",
                "ipk" => 3.2
            ]
        );
        return redirect('/')->with ('success', 'Data berhasil ditambahkan');
    }

    // query builder
    public function delete(){
        $result = DB::table("mahasiswas")->delete();
        return redirect('/')->with('warning','Data berhasil dihapus');
    }

    // dbfacade
    public function sortByNama(){
        $result = DB::select("select * from mahasiswas order by nama asc");
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    // dbfacade
    public function sortByIPK()
    {
        $result = DB::select("select * from mahasiswas order by ipk desc");
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }

    // query builder
    public function search(Request $request){
        $search = $request->search;
        $result = DB::table('mahasiswas')->where('nama', 'like', "%".$search."%")->paginate();
        return view('tampil-mahasiswa', ['mahasiswas'=>$result]);
    }

    //hapus eloquent
    public function hapus($id){
        $result = Mahasiswa::find($id);
        $result->delete();
        return redirect('/');
    }

    //detail query builder
    public function detail($id){
        $result = DB::table('mahasiswas')->find($id);
        return view('wiji', ['mahasiswas'=>$result]);
    }

}
