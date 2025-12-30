@extends('layouts.kaprodi')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Dashboard </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="bi bi-house-door fs-6"></i></a></li>
        </ul>
    </div>

    <div class="row">

        <div class="">
            <div class="widget-small warning coloured-icon"><i style="color: black" class="icon bi bi-chat-right-quote fs-1"></i>
                <div class="info">
                    <h1>Selamat Datang, Di Menu KaProdi {{ Auth::user()->nm_lengkap }}!</h1>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="widget-small success coloured-icon"><i class="icon bi bi-award fs-1"></i>
                <div class="info">
                    <a href="{{ route('kegiatan_mhs') }}">
                        <p class="btn btn-light">Kegiatan Mahasiswa</p>
                    </a></br>

                </div>
            </div>
        </div>
    </div>
@endsection
