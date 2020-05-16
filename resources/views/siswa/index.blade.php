@extends('template')

@section('main')
<div id="siswa">
    <h2>Siswa</h2>

    @if(!empty($siswa_list))
    <table class="table">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa_list as $siswa) : ?>
                <tr>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ link_to('siswa/'.$siswa->id,'Detail',['class' => 'btn btn-success btn-sm']) }}</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @else
    <p>Tidak ada data</p>
    @endif
    <div class="table-bottom">
        <div class="float-left">
            <strong>Jumlah Siswa : {{$jumlah_siswa}}</strong>
        </div>
        <div class="float-right">
            Pagination
        </div>
    </div>
    <div class="bottom-nav float-right">
        <div>
            <a href="siswa/create" class="btn btn-primary">
                Tambah Siswa
            </a>
        </div>
    </div>
</div>

@stop

@section('footer')
<div id="footer">
    <p>&copy; 2020 Data Siswa</p>
</div>
@stop