@extends('headerfoother')
@section('konten')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
        
        <div class="tab-content">

            <div class="row">
                <div class="col-lg-4">
                    <div class="main-card lg-4 card">
                        <a href="/form">
                            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"></i>PENGAJUAN KEGIATAN
                            

                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                        <img class="gambarhome" src="{!!('img/images.png')!!}">

                                    </div>

                                </div>
                            </div>

                        </a>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="main-card lg-4 card">
                        <a href="/tanggal">
                            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"></i>JADWAL KEGIATAN
                                
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                        <img class="gambarhome" src="{!!('img/jadwal.png')!!}">
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="main-card lg-4 card">
                        <a href="/cari">
                            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"></i>CARI KEGIATAN
                                
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                        <img class="gambarhome" src="{!!('img/cari.png')!!}">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>





    @endsection
