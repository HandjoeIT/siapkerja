@extends('layouts.app')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Rekap Surat Izin</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Data Pegawai</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tipe Izin</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Perihal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        @if ($data->permission_type == 'tidak masuk sakit')
                                                            <img src="{{ asset('storage') }}/permission/tidakmasuksakit/{{ $data->documentation }}"
                                                                class="avatar avatar-sm me-3" alt="Docs">
                                                        @elseif ($data->permission_type == 'tidak masuk keperluan')
                                                            <img src="{{ asset('storage') }}/permission/tidakmasukkeperluan/{{ $data->documentation }}"
                                                                class="avatar avatar-sm me-3" alt="Docs">
                                                        @elseif ($data->permission_type == 'setengah hari sakit')
                                                            <img src="{{ asset('storage') }}/permission/setengahharisakit/{{ $data->documentation }}"
                                                                class="avatar avatar-sm me-3" alt="Docs">
                                                        @elseif ($data->permission_type == 'setengah hari keperluan')
                                                            <img src="{{ asset('storage') }}/permission/setengahharikeperluan/{{ $data->documentation }}"
                                                                class="avatar avatar-sm me-3" alt="Docs">
                                                        @endif
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $data->user->name }}</h6>
                                                        @foreach ($data->user->userJobDetails as $item)
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{ $item->position }} {{ $item->division }}</p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex flex-column justify-content-center">
                                                    @if ($data->permission_date->isoFormat('dddd, D MMMM Y') == now())
                                                        <h6 class="mb-0 text-sm">Hari ini</h6>
                                                    @else
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $data->permission_date->isoFormat('dddd, D MMMM Y') }}
                                                        </h6>
                                                    @endif

                                                    @if ($data->permission_type == 'setengah hari sakit')
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ $data->from->format('H:i') }} s/d
                                                            {{ $data->up_to->format('H:i') }}</p>
                                                    @elseif ($data->permission_type == 'setengah hari keperluan')
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ $data->from->format('H:i') }} s/d
                                                            {{ $data->up_to->format('H:i') }}</p>
                                                    @elseif ($data->permission_type == 'tidak masuk sakit')
                                                        <p class="text-xs text-secondary mb-0">
                                                            Satu hari</p>
                                                    @elseif ($data->permission_type == 'tidak masuk keperluan')
                                                        <p class="text-xs text-secondary mb-0">
                                                            Satu hari</p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->permission_type }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->description }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($data->status == 'approved')
                                                    <span class="badge badge-sm bg-gradient-success">DISETUJU</span>
                                                @elseif ($data->status == 'not approved')
                                                    <span class="badge badge-sm bg-gradient-danger">TIDAK DISETUJU</span>
                                                @elseif ($data->status == 'on process')
                                                    <span class="badge badge-sm bg-gradient-info">DALAM PROSES</span>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('permission.edit', $data->id) }}">
                                                    <i class="fas fa-eye btn-outline-primary" title="Lihat"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
