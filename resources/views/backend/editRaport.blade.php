@extends('backend.template')
@section('title', 'Edit Raport')
@section('content')
    <h2>Edit Nilai Raport</h2>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="container mb-5">
                <form action="/editRaport/{{ session('id_user') }}" method="post">
                    @csrf
                    <h4 class="border-bottom border-primary">Semester 1</h4>
                    @foreach ($raport as $m)
                        <div class="form-group row">
                            <label for="{{ $m->nama_mapel }}1"
                                class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" name="{{ $m->nama_mapel }}1"
                                    id="{{ $m->nama_mapel }}1" @if ($raport) value="{{ $m->semester1 }}" @endif>

                            </div>
                        </div>
                    @endforeach

                    <h4 class="border-bottom border-primary">Semester 2</h4>
                    @foreach ($raport as $m)
                        <div class="form-group row">
                            <label for="{{ $m->nama_mapel }}2"
                                class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="{{ $m->nama_mapel }}2"
                                    id="{{ $m->nama_mapel }}2" @if ($raport) value="{{ $m->semester2 }}" @endif>
                            </div>
                        </div>
                    @endforeach

                    <h4 class="border-bottom border-primary">Semester 3</h4>
                    @foreach ($raport as $m)
                        <div class="form-group row">
                            <label for="{{ $m->nama_mapel }}3"
                                class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="{{ $m->nama_mapel }}3"
                                    id="{{ $m->nama_mapel }}3" @if ($raport) value="{{ $m->semester3 }}" @endif>
                            </div>
                        </div>
                    @endforeach

                    <h4 class="border-bottom border-primary">Semester 4</h4>
                    @foreach ($raport as $m)
                        <div class="form-group row">
                            <label for="{{ $m->nama_mapel }}4"
                                class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="{{ $m->nama_mapel }}4"
                                    id="{{ $m->nama_mapel }}4" @if ($raport) value="{{ $m->semester4 }}" @endif>
                            </div>
                        </div>
                    @endforeach

                    <h4 class="border-bottom border-primary">Semester 5</h4>
                    @foreach ($raport as $m)
                        <div class="form-group row">
                            <label for="{{ $m->nama_mapel }}5"
                                class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="{{ $m->nama_mapel }}5"
                                    id="{{ $m->nama_mapel }}5" @if ($raport) value="{{ $m->semester5 }}" @endif>
                            </div>
                        </div>
                    @endforeach

                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('raport') }}" class="btn btn-danger"><span class="fa fa-caret-left"></span>
                        Back</a>
                </form>
            </div>
        </div>
    </div>



@endsection
