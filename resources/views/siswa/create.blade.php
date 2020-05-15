@extends('template')

@section('main')
<div id="siswa">
    <h2>Tambah Siswa</h2>

    <form action="{{url('siswa')}}" method="POST">
        <div class="form-group">
            <label for="nisn" class="control-label"></label>
            <input type="text" id="nisn" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_siswa" class="control-label"></label>
            <input type="text" id="nama_siswa" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir" class="control-label"></label>
            <input type="date" id="tanggal_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin" class="control-label"></label>
            <div class="radio">
                <label>
                    <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">
                    Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">
                    Perempuan
                </label>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" value="Tambah Siswa">
        </div>
    </form>
</div>

@stop

@section('footer')
<div id="footer">
    <p>&copy; 2020 Data Siswa</p>
</div>
@stop