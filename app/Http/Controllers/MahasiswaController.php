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
    public function form_profil(){
        return view('form-profil');
    }
    public function proses_form_profil(Request $request){

        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'tempat_lahir' => '',
            'tanggal_lahir' => 'required',
            'email' => 'required|email',
            'alamat'=> '',
            'sex'=>'required|in:P,L',
            'hp'=> 'required|min:10|max:13',
            'angkatan' => 'required',
            'piljur1' => 'required|min:2',
            'piljur2'=>'required|min:2',
            'univ'=>'required|min:2',
            'un'=>'required',
            'foto'=>'required|mimes:jpeg,png,jpg,svg|max:4096'
        ]);

        $imgName =   $request->foto->getClientOriginalName().'-'.time().'.'.$request->foto->extension();
        $request->foto->move(public_path('img'),$imgName);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->tempat_lahir = $validateData['tempat_lahir'];
        $mahasiswa->tanggal_lahir = $validateData['tanggal_lahir'];
        $mahasiswa->email = $validateData['email'];
        $mahasiswa->alamat = $validateData['alamat'];
        $mahasiswa->sex = $validateData['sex'];
        $mahasiswa->hp = $validateData['hp'];
        $mahasiswa->angkatan = $validateData['angkatan'];
        $mahasiswa->piljur1 = $validateData['piljur1'];
        $mahasiswa->piljur2 = $validateData['piljur2'];
        $mahasiswa->univ = $validateData['univ'];
        $mahasiswa->un = $validateData['un'];
        $mahasiswa->foto = $imgName;
        $mahasiswa->save();

        return redirect('/')->with ('success', 'Data berhasil ditambahkan');

    }
    // eloquent
    public function insert(){
        // $result = Mahasiswa::create (

        //     [
        //         "nim" => "19053364",
        //         "nama" => "Wiji Dwi Prasetyo",
        //         "tanggal_lahir"=> "2000-11-05",
        //         "jurusan" => "pendidikan teknik informatika",
        //         "ipk" => 3.5

        //     ]
        // );
        // $result = Mahasiswa::create (
        //     [
        //         "nim" => "19053365",
        //         "nama" => "Agus salim",
        //         "tanggal_lahir"=> "2000-11-05",
        //         "jurusan" => "pendidikan teknik otomotif",
        //         "ipk" => 3.9
        //     ]
        // );
        // $result = Mahasiswa::create (
        //     [
        //         "nim" => "19053363",
        //         "nama" => "Edwin salim",
        //         "tanggal_lahir"=> "2000-11-05",
        //         "jurusan" => "pendidikan teknik sipil",
        //         "ipk" => 3.2
        //     ]
        // );


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
    public function sortByUn()
    {
        $result = DB::select("select * from mahasiswas order by un desc");
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
