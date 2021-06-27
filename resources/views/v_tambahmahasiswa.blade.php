@extends('layout.v_template')
@section('title','')
@section('head')
@section('content')
    <form action="/mahasiswa/tambahkan" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Halaman Tambah Data Mahasiswa</h3>
                            </div>
                            <div class="card-body">
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="">NPM</label> 
                                <input name="npm" class="form-control" value="{{old('npm')}}">  
                                <div class="text-danger">
                                    @error ('npm')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Nama Mahasiswa</label> 
                                <input name="nama_mahasiswa" class="form-control" value="{{old('nama_mahasiswa')}}">
                                <div class="text-danger">
                                    @error ('nama_mahasiswa')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group" >
                                <label for="">Kelas</label> 
                                <select name="kelas" id="" class="form-control mr-2 " >
                                <option selected disabled>-- Pilih Kelas --</option>
                                <option value="IF A">IF A</option>
                                <option value="IF B">IF B</option>
                                <option value="IF C">IF C</option>
                                </select>
                                <div class="text-danger">
                                    @error ('kelas')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group">
                                <label for="">Angkatan</label> 
                                <select name="angkatan" id="" class="form-control">
                                <option selected disabled>-- Pilih Angkatan --</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                 </select>
                                <div class="text-danger">
                                    @error ('angkatan')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="">Matakuliah</label> 
                                <input name="matakuliah" class="form-control " value="{{old('matakuliah')}}">
                                <div class="text-danger">
                                    @error ('matakuliah')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>     
                            <!-- <div class="form-group">
                                <label>Matakuliah</label>
                                <select class="js-example-basic-multiple" multiple="multiple" name="matkul[]"
                                data-placeholder="Pilih Matakuliah" style="width: 100%;">                 
                                <option value="Data Mining">Data Mining</option>
                                <option value="Sistem Pendukung Keputusan">Sistem Pendukung Keputusan</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemodelan dan Simulasi">Pemodelan dan Simulasi</option>
                                </select>
                            </div> -->
                               

                            <div class="form-group" align="right">
                                <a href="/mahasiswa/" class="btn btn-default ">Batal</a>
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                            <div class="col-md-4"></div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
@endsection

<!-- <script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script> -->