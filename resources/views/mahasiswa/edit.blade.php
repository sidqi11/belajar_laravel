@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data</div>

                <div class="card-body">
                    <form method="post" action="/mahasiswa/{{$mahasiswa->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">nama</label>
                            <input type="text" value="{{$mahasiswa->nama}}" name=nama class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">email</label>
                            <input type="text" value="{{$mahasiswa->email}}" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                       
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">kelas</label>
                            <select name="kelas" id="" class="form-control">
                                <option value="{{ $mahasiswa->kelas }}">{{$mahasiswa->kelas}}</option>
                                <option value="ips">ips</option>
                                <option value="ipa">ipa</option>
                                <option value="bahasa indo">bahasa indo</option>
                                <option value="matematika">matematika</option>
                            </select>
                        </div>
                         <div class="mb-3">
                            <label for="no_hhp" class="form-label">no_hhp</label>
                            <input type="text" name="no_hhp" value="{{ $mahasiswa->no_hhp }}" class="form-control" id="no_hhp">
                           <placeholder ="08xxxxxxx" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="alamat" name="alamat" value="{{$mahasiswa->alamat}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection