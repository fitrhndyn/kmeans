@extends('layout.v_template')
@section('title','')
@section('content')
<div class="container">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">PERHITUNGAN <i>K-MEANS CLUSTERING</i></h3>
          </div>
          <div class="card-body">
          <form action="{{route('hitung')}}" method="post">
            @csrf
            @method('POST')
            <div class="row">
            <div class="col-md-5">
          <div class="form-group">
            <label>Pilih Kelas :</label>
            <div class="input-group">
              <select name="kelas" id="" class="form-control mr-2">
                <option selected disabled>Pilih Kelas --</option>
                <option value="IF A">IF A</option>
                <option value="IF B">IF B</option>
                <option value="IF C">IF C</option>
              </select>
              <select name="angkatan" id="" class="form-control">
                <option selected disabled>Pilih Angkatan --</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </div>
            </div>
          </div>
          <div class="col-5 pt-4 mt-2">
          <button type="submit" class="btn btn-success" >Hitung</button>
          <a href="/perhitungan" class="btn btn-info" >Segarkan</a>
        </div>
      </div>
    </form>

            <table id="tabel_id" class="table table-bordered table-striped">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Visual</th>
                  <th>Auditori</th>
                  <th>Kinestetik</th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1?>
              @foreach($users as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->npm}}</td>
                  <td class="text-center">{{$data->nama_mahasiswa}}</td>
                  <td class="text-center">{{$data->kelas}}</td>
                  <td class="text-center">{{$data->jumlahVisual}}</td>
                  <td class="text-center">{{$data->jumlahAuditorial}}</td>
                  <td class="text-center">{{$data->jumlahKinestetik}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection