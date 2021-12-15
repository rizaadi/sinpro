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
                    <div>Tambah User
                        <div class="page-title-subheading">Silakan tambah user kalian disini.
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
                        <h5 class="card-title">Tambah User</h5>
                        <form method="POST" action="/tambahuserproses" enytpe="multipart/form">
                            {{ csrf_field() }}
                            <div class="position-relative form-group"><label for="name" class=""></label>
                                <input name="name" id="name" placeholder="Name" type="text" class="form-control">

                            </div>
                            <div class="position-relative form-group">
                                <label for="email" class=""></label><input name="email" id="email" placeholder="Email"
                                    type="email" class="form-control">

                            </div>
                            <div class="position-relative form-group">
                                <label for="examplePassword" class=""></label><input name="password" id="password"
                                    placeholder="Password" type="password" class="form-control">

                            </div>
                            <div class="position-relative form-group"><label for="exampleSelect" class="">Select
                                    Role</label><select name="role" id="role" class="form-control">
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                </select></div>
                            <button class="mt-1 btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
