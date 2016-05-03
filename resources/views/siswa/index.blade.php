@extends('templates.skeleton')

@section('title')
  Data Siswa
@endsection

@section('content')
  <table class="striped">
    <thead>
      <th class="center">No</th>
      <th class="center">NIS</th>
      <th class="center">Nama</th>
      <th class="center">Kelas</th>
      <th class="center">Action</th>
    </thead>
    <tbody>
      @foreach($siswa as $key => $data)
      <tr>
        <td class="center">{{$key+1}}</td>
        <td class="center">{{$data->nis}}</td>
        <td class="center">{{$data->nama}}</td>
        <td class="center">{{$data->kelas}}</td>
        <td class="center">
          <a href="{{url('siswa/edit/'.$data->id)}}" class="green-text">Edit</a>
          <a href="{{url('siswa/delete/'.$data->id)}}" class="red-text" onclick="return confirm('Hapus data ?')">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
