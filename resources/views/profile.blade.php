@foreach($pegawai as $as)
Crypt::decrypt($as->password);
<p>{{$as->password}}</p>

@endforeach