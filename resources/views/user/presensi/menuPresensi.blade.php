@extends('layouts.app')

@section('main')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="{{ route('presensidatang') }}">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Presensi</p>
                        <p class="font-weight-bolder mb-0">
                            DATANG
                        </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </a>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        @foreach ($data as $item)
        <a href="{{ route('presensiistirahat', $item->id) }}">
        @endforeach
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Presensi</p>
                        <p class="font-weight-bolder mb-0">
                            ISTIRAHAT
                        </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </a>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        @foreach ($data as $item)
        <a href="{{ route('presensikembali', $item->id) }}">
        @endforeach
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Presensi</p>
                        <p class="font-weight-bolder mb-0">
                            KEMBALI
                        </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </a>
      </div>
      <div class="col-xl-3 col-sm-6">
        @foreach ($data as $item)
        <a href="{{ route('presensipulang', $item->id) }}">
        @endforeach
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Presensi</p>
                        <p class="font-weight-bolder mb-0">
                            PULANG
                        </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
