@extends('headerfoother')
@section('konten')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <img class="gambar1" src="{!!('img/images.png')!!}">
                    </div>
                    <div>Pengajuan Kegiatan
                        <div class="page-title-subheading">Silakan ajukan kegiatan kalian disini.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Isi seluruh form yang ada.</span>
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-12 card">
                    <center>
                        <div class="card-body">
                            <form method="POST" action="/pengajuan" enytpe="multipart/form">
                            @csrf
                                <h5 class="card-title">Pengajuan Kegiatan</h5>

                                <div class="col-lg-20">
                                    <div class="main-card lg-12 card">
                                        <div class="position-relative form-group"><label for="examplenama11">
                                                <b>
                                                    <div class="position-relative form-group"><label for="examplenama"
                                                            class="">Nama Kegiatan</label><input style="width:700px;"
                                                            name="namakegiatan" id="examplenama" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <div class="position-relative form-group"><label
                                                            for="examplePassword">
                                                            <div class="position-relative form-group"><label
                                                                    for="examplenama" class="">Ketua
                                                                    Pelaksana</label><input style="width:700px;"
                                                                    name="ketuapelaksana" id="examplenama" type="text"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleAddress" class="">Waktu
                                                                    Pelaksanaan</label><input style="width:700px;"
                                                                    name="waktu" id="exampleAddress" type="text"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleAddress2" class="">Tempat
                                                                    Kegiatan</label><input style="width:700px;"
                                                                    name="lokasi" id="exampleAddress2" type="text"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleAddress2" class="">Nomor Yang Bisa
                                                                    Dihubungi</label><input style="width:700px;"
                                                                    name="nomertelp" id="exampleAddress2" type="text"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleAddress2" class="">Upload
                                                                    Kak</label></div>
                                                                    <div><label for="myfile">Select a file:</label>
                                                                <input type="file" id="myfile" name="kak">

                                                                
                                                            </div>


                                                </b>
                                        </div>
                                        <button class="mt-2 btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                    </center>

                </div>
            </div>
        </div>
    </div>



    @endsection
