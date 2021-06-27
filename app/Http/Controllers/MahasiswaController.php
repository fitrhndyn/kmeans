<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
use Session;
class MahasiswaController extends Controller
{

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        if(Session::get('login') != null){
            $data = [
                'mahasiswa' => $this->MahasiswaModel->allData(),
            ];
            
            return view('v_mahasiswa',$data);
        }else{
            return redirect()->route('landing');
        }

    }

    public function detail($id_mahasiswa)
    {        if (!$this->MahasiswaModel->detailData($id_mahasiswa)){
        abort(404);
         }
        $data = [
            'mahasiswa' => $this->MahasiswaModel->detailData($id_mahasiswa),
        ];
        return view('v_detailmahasiswa',$data);
    }

    public function tambah()
    {
        return view('v_tambahmahasiswa');
    }

    public function tambahkan()
    {
        Request()->validate([
            'npm' => 'required|unique:mahasiswa,npm|min:10|max:12',
            'nama_mahasiswa' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'matakuliah' => 'required',
        ],[
            'npm.required'=>'NPM harus diisi.',
            'npm.unique'=>'NPM sudah ada.',
            'npm.min'=>'NPM minimal 10 angka.',
            'npm.max'=>'NPM maksimal 12 angka.',
            'nama_mahasiswa.required'=>'Nama mahasiswa harus diisi.',
            'nama_mahasiswa.max'=>'NPM maksimal 60 huruf.',
            'kelas.required'=>'Kelas harus dipilih.',
            'angkatan.required'=>'Angkatan harus dipilih.',
            'matakuliah.required'=>'Matakuliah harus dipilih.',
        ]);

        $data = [
            'npm'=> Request()->npm,
            'nama_mahasiswa'=>Request()->nama_mahasiswa,
            'kelas'=>Request()->kelas,
            'level'=>'2',
            'password'=>md5('if2021'),
            'angkatan'=>Request()->angkatan,
            'matakuliah'=>Request()->matakuliah
        ];
        $this->MahasiswaModel->tambahData($data);
        return redirect()->route('mahasiswa')->with('pesan','Data berhasil ditambahkan.');
    }

    public function ubah($id_mahasiswa)
    {   
        if (!$this->MahasiswaModel->detailData($id_mahasiswa)){
            abort(404);
        }
        
        $data = [
            'mahasiswa'=> $this->MahasiswaModel->detailData($id_mahasiswa),
        ];

        return view('v_ubahmahasiswa', $data);
    }

    public function perbaharui($id_mahasiswa)
    {
        Request()->validate([
            'npm' => 'required|min:10|max:12',
            'nama_mahasiswa' => 'required',
            'kelas' => 'required',
        ],[
            'npm.required'=>'NPM harus diisi.',
            'npm.min'=>'NPM minimal 10 angka.',
            'npm.max'=>'NPM maksimal 12 angka.',
            'nama_mahasiswa.required'=>'Nama mahasiswa harus diisi.',
            'nama_mahasiswa.max'=>'NPM maksimal 60 huruf.',
            'kelas.required'=>'Kelas harus diisi.',
        ]);

        $data = [
            'npm'=> Request()->npm,
            'nama_mahasiswa'=>Request()->nama_mahasiswa,
            'kelas'=>Request()->kelas,
            'angkatan'=>Request()->angkatan,
            'matakuliah'=>Request()->matakuliah
        ];
        $this->MahasiswaModel->ubahData($id_mahasiswa, $data);
        return redirect()->route('mahasiswa')->with('pesan','Data berhasil diubah.');
    }

    public function hapus($id_mahasiswa)
    {
        $this->MahasiswaModel->hapusData($id_mahasiswa);
        return redirect()->route('mahasiswa')->with('pesan','Data berhasil dihapus.'); 
    }
}
