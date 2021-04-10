@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-3">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="text-center my-3">
                <h2>KARTU HASIL STUDI (KHS)</h2>    
            </div>
            <div>
                <h4><span class="text-bold">Nama:</span>Yukafi</h4>
                <h4><span class="text-bold">Nim:</span>1941720040</h4>
                <h4><span class="text-bold">Kelas:</span>TI 2A</h4>
            </div>
        </div>
    </div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
<tr>
    <th>Matakuliah</th>
    <th>SKS</th>
    <th>Semester</th>
    <th>Nilai</th>
</tr>

    {{-- @foreach ($paginate as $Mahasiswa) --}}

    <tr>
        <td>PBO</td>
        <td>3</td>
        <td>4</td>
        <td>A</td>
    </tr>
    
    {{-- @endforeach --}}

</table>
@endsection