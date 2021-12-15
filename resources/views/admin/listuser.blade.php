@extends('admin.adminheader')
@section('konten')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <img class="gambar1" src="{!!('img/images.png')!!}">
                    </div>
                    <div>List User
                        <div class="page-title-subheading">List user Sinpro
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">


        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">List User</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Nama</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listuser as $lu)
                                <tr>
                                    <td class="text-center text-muted"></td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle"
                                                            src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$lu->name}}</div>
                                                    <div class="widget-subheading opacity-7">{{$lu->email}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="/edituser/{{$lu->id}}" type="button" id="PopoverCustomT-1"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="/hapususer/{{$lu->id}}" type="button   " id="PopoverCustomT-1"
                                            class="btn btn-primary btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <nav class="" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                        aria-label="Previous"><span aria-hidden="true">«</span><span
                                            class="sr-only">Previous</span></a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                        aria-label="Next"><span aria-hidden="true">»</span><span
                                            class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

            </div>
        </div>
    </div>

    @endsection
