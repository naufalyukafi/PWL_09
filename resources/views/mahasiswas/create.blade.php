@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header">Tambah Mahasiswa</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm">
    @csrf
        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" name="nim" class="form-control" id="nim" aria-describedby="nim" >
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="name" name="name" class="form-control" id="name" aria-describedby="name" >
        </div>
        <div class="form-group">
            <label for="e_mail">E-mail</label>
            <input type="text" name="e_mail" class="form-control" id="e_mail" ariadescribedby="e_mail" >
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" ariadescribedby="tgl_lahir" >
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="kelas" name="kelas" class="form-control" id="kelas" aria-describedby="password" >
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="jurusan" name="jurusan" class="form-control" id="jurusan" aria-describedby="jurusan" >
        </div>
        <div class="form-group">
            <label for="no_handphone">No_Handphone</label>
            <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone" aria-describedby="no_handphone" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
</div>
@endsection