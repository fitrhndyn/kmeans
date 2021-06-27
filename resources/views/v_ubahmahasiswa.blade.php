@extends('layout.v_template')
@section('title','')
@section('content')
<form action="/mahasiswa/perbaharui/{{ $mahasiswa->id_mahasiswa }}" method="POST" enctype="multipart/form-data">  
    @csrf
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Halaman Ubah Data Mahasiswa</h3>
                            </div>
                            <div class="card-body">
                            <div class="col-sm-6"></div>
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">

                            <div class="form-group">
                                <label for="">NPM</label> 
                                <input name="npm" class="form-control" value="{{$mahasiswa->npm}}">  
                                <div class="text-danger">
                                    @error ('npm')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Nama Mahasiswa</label> 
                                <input name="nama_mahasiswa" class="form-control" value="{{$mahasiswa->nama_mahasiswa}}">
                                <div class="text-danger">
                                    @error ('nama_mahasiswa')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="form-group" >
                                <label for="">Kelas</label> 
                                <select name="kelas" id="" class="form-control mr-2 " value="{{$mahasiswa->kelas}}" >
                                <option selected disabled>{{$mahasiswa->kelas}}</option>
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
                                <select name="angkatan" id="" class="form-control"value="{{$mahasiswa->angkatan}}">
                                <option selected disabled>{{$mahasiswa->angkatan}}</option>
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
                                <input name="matakuliah" class="form-control "value="{{$mahasiswa->matakuliah}}" >
                                <div class="text-danger">
                                    @error ('matakuliah')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>                                   
                            <div class="col-sm-12">
                                <div class="form-group" align="right" >
                                    <a href="/mahasiswa/" class="btn btn-default btn-sm">Batal</a>
                                    <button class="btn btn-primary btn-sm">Ubah</button>
                                </div>
                            </div>
</div>
<div class="col-md-4"></div>
</div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection

<!-- readonly -->