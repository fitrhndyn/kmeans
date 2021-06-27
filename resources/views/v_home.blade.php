@extends('layout.v_template')
@section('title','')
@section('content')
<div class="container-fluid">
    <div class="alert alert-secondary" role="alert">
        <h4 align="center" class="alert-heading">Selamat datang di Aplikasi Data Mining Menggunakan Algoritma K-Means Clustering Untuk Mengelompokan Mahasiswa Berdasarkan Gaya Belajar Menurut DePorter 
        <br> Teknik Informatika Universitas Suryakancana Cianjur
        </h4>
        <hr>
        <div class="container">
                <div class="row">
                            <div class="col-md-4 px-0"> 
                            <img src="{{asset('template')}}/dist/img/home.png" class="img-fluid">
                            </div>
                            <div class="col-md-8 px-0">
                            <ol>
                                <P>Aplikasi Data Mining Menggunakan Algoritma K-Means Clustering 
                                Untuk Mengelompokan Gaya Belajar Mahasiswa dengan harapan dapat mempermudah 
                                mengelompokan gaya belajar mahasiswa berdasarkan gaya belajarnya dan memudahkan para dosen untuk 
                                mengetahui metode pembelajaran yang sesuai dengan gaya belajar mahasiswa.
                                </P>
                            </ol>
                            </div> 
                </div>
            </div>
        </div>
</div>
@endsection