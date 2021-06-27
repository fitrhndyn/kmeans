@extends('layout.v_template')
@section('title','')
@section('content')
<form action="/profil/perbaharui/{{ $profil->id_profil }}" method="POST" enctype="multipart/form-data">  
    @csrf
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Halaman Ubah Data Profil Dosen</h3>
                            </div>
                            <div class="card-body">
                            <div class="col-sm-6"></div>

                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="">NIDN</label> 
                                <input name="nidn" class="form-control" value="{{$profil->nidn}}">  
                                <div class="text-danger">
                                    @error ('nidn')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Nama</label> 
                                <input name="nama_profil" class="form-control" value="{{$profil->nama_profil}}">
                                <div class="text-danger">
                                    @error ('nama_profil')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="">Matakuliah</label> 
                                <input name="matakuliah" class="form-control" value="{{$profil->matakuliah}}">
                                <div class="text-danger">
                                    @error ('matakuliah')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label> 
                                <select name="jenis_kelamin" class="form-control " id="jenis_kelamin" value="{{$profil->jenis_kelamin}}" data-placeholder="Pilih Jenis Kelamin">
                                    <option value="{{ $profil->jenis_kelamin }}">{{ $profil->jenis_kelamin}} </option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="text-danger">
                                    @error ('jenis_kelamin')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group">
                                <label for="">Email</label> 
                                <input name="email" class="form-control " value="{{$profil->email}}">
                                <div class="text-danger">
                                    @error ('email')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="">Ubah Kata Sandi</label>
                                <input name="password" class="form-control " value="{{$profil->password}}">
                                <div class="text-danger">
                                    @error ('password')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label> 
                                <textarea class="form-control" name="alamat" >{{$profil->alamat}} </textarea>
                                <div class="text-danger">
                                    @error ('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group" align="right" >
                                    <a href="/profil/" class="btn btn-default btn-sm">Batal</a>
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