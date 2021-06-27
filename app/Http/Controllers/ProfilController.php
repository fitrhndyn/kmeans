<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilModel;
use Illuminate\Support\Facades\DB;
use Session;

class ProfilController extends Controller
{
  

    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
    }

    public function index()
    {
        if(Session::get('login') != null){
            $data = [
                'profil' => $this->ProfilModel->allData(),
            ];
            return view('v_profil',$data);
        }else{
            return redirect()->route('landing');
        }
        
    }

    public function login_dosen(Request $req){
        $users = DB::table('profil')
                ->where('nidn', '=', $req->username)
                ->where('password', '=', md5($req->password))
                ->get();

        $user = $users->count();

        if($user == 1){
            foreach ($users as $users) 
            {
                $name = $users->nama_profil;
            }
            Session::put('nama',$name);
            Session::put('login', '1');
            return redirect()->route('halamanutama');
        }else{
            return redirect()->route('landing');
        }
    }

    public function login_mahasiswa(Request $req){
        $users = DB::table('mahasiswa')
                ->where('npm', '=', $req->username)
                ->where('password', '=', md5($req->password))
                ->get();

        $user = $users->count();
        if($user == 1){
            foreach ($users as $users) 
            {
                $name = $users->nama_mahasiswa;
            }
            Session::put('login', '2');
            Session::put('npm', $req->username);
            Session::put('nama',$name);
            return redirect()->route('halamanutama');
        }else{
            return redirect()->route('landing');
        }
    }

    public function detail($id_profil)
    {        if (!$this->ProfilModel->detailData($id_profil)){
        abort(404);
         }
        $data = [
            'profil' => $this->ProfilModel->detailData($id_profil),
        ];
        return view('v_detailprofil',$data);
    }

    public function tambah()
    {
        return view('v_tambahprofil');
    }

    public function tambahkan()
    {
        Request()->validate([
            'nidn' => 'required|unique:profil,nidn|min:10|max:12',
            'nama_profil' => 'required',
            'matakuliah' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            // 'level' => 'required',
            // 'password' => 'required',
            
        ],[
            'nidn.required'=>'NIDN harus diisi.',
            'nidn.unique'=>'NIDN sudah ada.',
            'nidn.min'=>'NIDN minimal 10 angka.',
            'nidn.max'=>'NIDN maksimal 12 angka.',
            'nama_profil.required'=>'Nama harus diisi.',
            'nama_profil.max'=>'Nama maksimal 60 huruf.',
            'jenis_kelamin.required'=>'Pilih salah satu.',
            'email.required'=>'Email harus diisi.',
            'alamat.required'=>'Alamat harus diisi.',
            'alamat.max'=>'Nama maksimal 255 huruf.',
        ]);

        $data = [
            'nidn'=> Request()->nidn,
            'nama_profil'=>Request()->nama_profil,
            'matakuliah'=> Request()->matakuliah,
            'jenis_kelamin'=>Request()->jenis_kelamin,
            'email'=>Request()->email,
            'alamat'=>Request()->alamat,
            'level'=>'1',
            'password'=>md5('123456')
        ];
        $this->ProfilModel->tambahData($data);
        return redirect()->route('profil')->with('pesan','Data berhasil ditambahkan.');
    }

    public function ubah($id_profil)
    {   
        if (!$this->ProfilModel->detailData($id_profil)){
            abort(404);
        }
        
        $data = [
            'profil'=> $this->ProfilModel->detailData($id_profil),
        ];

        return view('v_ubahprofil', $data);
    }

    public function perbaharui($id_profil)
    {
        Request()->validate([
            'nidn' => 'required|min:10|max:12',
            'nama_profil' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            
        ],[
            'nidn.required'=>'NIDN harus diisi.',
            'nidn.unique'=>'NIDN sudah ada.',
            'nidn.min'=>'NIDN minimal 10 angka.',
            'nidn.max'=>'NIDN maksimal 12 angka.',
            'nama_profil.required'=>'Nama harus diisi.',
            'nama_profil.max'=>'Nama maksimal 60 huruf.',
            'jenis_kelamin.required'=>'Pilih salah satu.',
            'email.required'=>'Email harus diisi.',
            'alamat.required'=>'Alamat harus diisi.',
            'alamat.max'=>'Alamat maksimal 255 huruf.',

        ]);

        $data = [
            'nidn'=> Request()->nidn,
            'nama_profil'=>Request()->nama_profil,
            'matakuliah'=> Request()->matakuliah,
            'jenis_kelamin'=>Request()->jenis_kelamin,
            'email'=>Request()->email,
            // 'password'=>Request()->password,
            'password'=>md5(Request()->password),
            'alamat'=>Request()->alamat,
           
            
        ];
        $this->ProfilModel->ubahData($id_profil, $data);
        return redirect()->route('profil')->with('pesan','Data berhasil diubah.');
    }

    public function hapus($id_profil)
    {
        $this->ProfilModel->hapusData($id_profil);
        return redirect()->route('profil')->with('pesan','Data berhasil dihapus.'); 
    }

    public function logout(){
        Session::forget('login');
        Session::forget('npm');
        Session::forget('nama');
        return redirect()->route('landing');
    }
}
