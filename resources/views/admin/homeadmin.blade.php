@extends('admin.adminheader')
@section('konten')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <a href="{{ url('/kegiatan')}}" class="mm-active">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div  class="widget-heading">kegiatan yang masuk</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-primary"><span>9</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <a href="{{ url('/kegiatan')}}" class="mm-active">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">kegiatan yang diterima</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-primary"><span>9</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <a href="{{ url('/kegiatan')}}" class="mm-active">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Kegiatan yang ditolak</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>0</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

       
    </div>
    @endsection
