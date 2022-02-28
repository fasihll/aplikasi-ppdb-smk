@extends('backend.template')
@section('title', 'Detail Raport')
@section('content')
    <h2>Detail Raport <small style="font-size: 15px">Master / Data Raport / Detail</small></h2>
    <h4 class="text-capitalize text-center">..::{{ $nama }}::..</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="container mb-5">

                <h4 class="border-bottom border-primary">Semester 1</h4>
                @foreach ($raport as $m)
                    <div class="form-group row">
                        <label for="{{ $m->nama_mapel }}1" class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                        <div class="col-sm-8">

                            <input type="number" class="form-control" name="{{ $m->nama_mapel }}1"
                                id="{{ $m->nama_mapel }}1" @if ($raport) value="{{ $m->semester1 }}" disabled @endif>

                        </div>
                    </div>
                @endforeach

                <h4 class="border-bottom border-primary">Semester 2</h4>
                @foreach ($raport as $m)
                    <div class="form-group row">
                        <label for="{{ $m->nama_mapel }}2" class="col-sm-4 col-form-label">{{ $m->nama_mapel }}</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="{{ $m->nama_mapel }}2"
                                id="{{ $m->nama_mapel }}2" @if ($raport) value="{{ $m->semester2 }}" disabled @endif>
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
                                id="{{ $m->nama_mapel }}3" @if ($raport) value="{{ $m->semester3 }}" disabled @endif>
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
                                id="{{ $m->nama_mapel }}4" @if ($raport) value="{{ $m->semester4 }}" disabled @endif>
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
                                id="{{ $m->nama_mapel }}5" @if ($raport) value="{{ $m->semester5 }}" disabled @endif>
                        </div>
                    </div>
                @endforeach

                <a href="{{ route('dataRaport') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>



@endsection
