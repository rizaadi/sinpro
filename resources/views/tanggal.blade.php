@extends('headerfoother')
@section('konten')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                    <img class="gambar1" src="{!!('img/jadwal.png')!!}">
                    </div>
                    <div>Jadwal Kegiatan
                    </div>
                </div>
              
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div id='calendar-list'></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div id="calendar-bg-events"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    @endsection
