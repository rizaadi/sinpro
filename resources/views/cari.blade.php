@extends('headerfoother')
@section('konten')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                    <img class="gambar1" src="{!!('img/cari.png')!!}">
                    </div>
                    <div>Cari Kegiatan
                        <div class="page-title-subheading">Cari kegiatan kalian disini.
                        </div>
                    </div>
                </div>
                <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                </div>
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Form</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Nama Kegiatan</li>
                            <li class="list-group-item">Nama Ketua Pelaksana</li>
                            <li class="list-group-item">No Hp</li>
                            <li class="list-group-item">Waktu Pelaksanaan</li>
                            <li class="list-group-item">Nama Tempat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
