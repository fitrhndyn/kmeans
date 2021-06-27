    @extends('layout.v_template')
    @section('title','')
    @section('content') 
    <form action="/kuesioner/hasil_kuesioner" method="POST">
    @csrf
    @method('POST')
    <div class="container">
    <div class="content">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="text-center">Halaman Pengisian Kuesioner</h3>
            </div>
            <div class="card-body">
            
            @foreach($kuesioner as $mhs)
            <table align="center" border="0.5" style="width:100%" >
            <tr>
                <td style="width:10%"><span style="font-family: Arial;font-size:large;"><b>NPM</b></span></td>
                <td style="width:2%"><span style="font-family: Arial;font-size:large;"><b>:</b></span></td>
                <td style="width:47%"><span style="font-family: Arial;font-size:large;"><b>{{$mhs->npm}}</b></span></td>
                <td style="width:25%"><span style="font-family: Arial;font-size:large;"><b></b></span></td>
            </tr>
            </table>
            <table align="center" border="0.5" style="width:100%" >
            <tr>
                <td style="width:10%"><span style="font-family: Arial;font-size:large;"><b>Nama</b></span></td>
                <td style="width:2%"><span style="font-family: Arial;font-size:large;"><b>:</b></span></td>
                <td style="width:47%"><span style="font-family: Arial;font-size:large;"><b>{{$mhs->nama_mahasiswa}}</b></span></td>
                <td style="width:25%"><span style="font-family: Arial;font-size:large;"><b></b></span></td>
            </tr>
            </table>
            <table align="center" border="0.5" style="width:100%" >
            <tr>
                <td style="width:10%"><span style="font-family: Arial;font-size:large;"><b>Kelas</b></span></td>
                <td style="width:2%"><span style="font-family: Arial;font-size:large;"><b>:</b></span></td>
                <td style="width:47%"><span style="font-family: Arial;font-size:large;"><b>{{$mhs->kelas}}</b></span></td>
                <td style="width:25%"><span style="font-family: Arial;font-size:large;"><b></b></span></td>
            </tr>
            </table>
            <table align="center" border="0.5" style="width:100%" >
            <tr>
                <td style="width:10%"><span style="font-family: Arial;font-size:large;"><b>Angkatan</b></span></td>
                <td style="width:2%"><span style="font-family: Arial;font-size:large;"><b>:</b></span></td>
                <td style="width:47%"><span style="font-family: Arial;font-size:large;"><b>{{$mhs->angkatan}}</b></span></td>
                <td style="width:25%"><span style="font-family: Arial;font-size:large;"><b></b></span></td>
            </tr>
            </table>
         <br> 
            <?php
                $val_id = $mhs->id_mahasiswa;
            ?>
            @endforeach
            <input type="text" hidden name="mhs_id" value="{{$val_id}}">
                @if (session('pesan'))
                <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sukses.</h5>
                            {{ session('pesan') }}
                </div>
                @endif
                
                <table class="table table-hover text-nowrap" id="table_id" style="width:100%">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th></th>
                            <th>Jawaban</th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php $no = 1?>
                    <tr>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda rapi dan teratur ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda berbicara dengan cepat ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda perencana dan pengatur jangka panjang yang baik ? </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda pengeja yang baik dan dapatkah Anda melihat kata-kata dalam pikiran Anda?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih ingat apa yang dilihat daripada yang didengar?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda menghafal hanya dengan melihat saja ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda sulit mengingat perintah lisan kecuali jika dituliskan, dan apakah Anda sering menyuruh orang mengulang ucapannya ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih suka membaca daripada dibacakan ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda suka mencoret-coret saat menelpon/rapat ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih suka melakukan demonstrasi daripada berpidato ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih suka seni rupa daripada musik ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda tahu apa yang harus dikatakan tetapi tidak terpikir kata yang tepat ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda berbicara pada diri sendiri saat bekerja ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda mudah terganggu keributan ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda menggerakkan bibir saat membaca ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda suka membaca keras-keras dan mendengarkan ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Dapatkah Anda mengulang dan menirukan nada, perubahan, dan warna suara ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda merasa menulis itu sulit, tetapi pandai bercerita ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda berbicara dengan pola berirama ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah menurut Anda, Anda adalah pembicara yang fasih ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih menyuka musik daripada seni rupa ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda belajar melalui mendengar dan mengingat apa yang didiskusikan daripada yang dilihat ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda banyak bicara, suka berdiskusi dan menjelaskan panjang lebar ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih baik mengeja keras-keras daripada menuliskannya ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda berbicara dengan lambat ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda menyentuh orang untuk mendapatkan perhatiannya ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda berdiri dekat-dekat saat berbicara dengan orang ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah sering melakukan kegiatan fisik / banyak bergerak ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda lebih bisa belajar dengan praktek ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda belajar dengan berjalan dan melihat ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda menggunakan jari untuk menunjuk saat membaca ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda banyak menggunakan isyarat tubuh ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda tak bisa duduk tenang untuk waktu yang lama ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda membuat keputusan berdasarkan perasaan ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda mengetuk-ngetuk pena, menggerakkkan jari atau kaki saat mendengarkan ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    <tr>
                    <?php $no++?>
                                <td align="center">{{$no}}</td>
                                <td>Apakah Anda meluangkan waktu untuk berolahraga dan kegiatan fisik lainnya ?</td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="2" required>
                                    <label class="form-check-label">Sering</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="1">
                                    <label class="form-check-label">Kadang-kadang</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="v{{$no}}a" value="0">
                                    <label class="form-check-label">Jarang</label>
                                    </div>
                                </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <div class="form-group" align="right">
                    <a href="#" class="btn btn-default ">Batal</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    @endsection