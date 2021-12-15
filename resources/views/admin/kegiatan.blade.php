@extends('admin.adminheader')
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

                <!-- <form action="/pegawai/cari" method="GET"> -->

                <!-- </form> -->
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



            <table border="1" cellpadding="10">
            
                <th>
                    <td>Baris 1 kolom 1</td>
                    <td>baris 1 kolom 2</td>
                    <td>baris 1 kolom 2</td>
                    <td>baris 1 kolom 2</td>
                    <td>baris 1 kolom 2</td>
                    <td>baris 1 kolom 2</td>
                    <td>baris 1 kolom 2</td>
                    <td>baris 1 kolom 2</td>
                </th>
                <tr>
                    <td>Baris 2 kolom 1</td>
                    <td>baris 2 kolom 2</td>
                    <td>baris 2 kolom 2</td>
                    <td>baris 2 kolom 2</td>
                    <td>baris 2 kolom 2</td>
                    <td>baris 2 kolom 2</td>
                    <td>baris 2 kolom 2</td>
                    <td>baris 2 kolom 2</td>
                </tr>
            </table>

            </body>


            </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
