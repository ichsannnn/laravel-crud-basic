@extends('templates.skeleton')

@section('title')
  Tambah Data
@endsection

@section('content')
  
@if(count($errors) > 0)
<div class="row">
  <div class="col s12">
    <div class="card red darken-1">
      <div class="card-content white-text">
        <span class="card-title">Error With Input</span>
        @foreach($errors->all() as $error)
          <ul>
            <li>- {{$error}}</li>
          </ul>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endif

<div class="row">
  <form class="col s12" action="{{url('siswa/create')}}" method="post">
    {!! csrf_field() !!}
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="nis" class="{{ $errors->first('nis') ? " invalid" : "" }}" id="nis" data-success="complete">
        <label for="nis">NIS</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="nama" class="{{ $errors->first('nama') ? " invalid" : "" }}" id="nama">
        <label for="nama">Nama</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="kelas" class="{{ $errors->first('kelas') ? " invalid" : "" }}" id="kelas">
        <label for="kelas">Kelas</label>
      </div>
      <div class="input-field col s12">
        <button type="submit" class="btn">Simpan</button>
        <a href="{{url('siswa')}}" class="btn grey">Kembali</a>
      </div>
    </div>
  </form>
</div>
@endsection
