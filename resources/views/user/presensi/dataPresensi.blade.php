@extends('layouts.app')
@section('main')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Rekap Kehadiran</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Datang</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Istirahat</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kembali</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pulang</th>
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
                                                        <img src="{{ asset('storage') }}/presensi/datang/{{ $data->check_in_photo }}"
                                                            class="avatar avatar-sm me-3" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        @if ($data->created_at->isoFormat('dddd, D MMMM Y') == now())
                                                            <h6 class="mb-0 text-sm">Hari ini</h6>
                                                        @else
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $data->created_at->isoFormat('dddd, D MMMM Y') }}</h6>
                                                        @endif
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ $data->location_check_in }} <br>(
                                                            {{ $data->link_check_in }} )</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($data->check_in != null)
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $data->check_in->format('H:i:s') }}</span>
                                                @else
                                                    <span class="text-secondary text-xs font-weight-bold">---</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($data->break != null)
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $data->break->format('H:i:s') }}</span>
                                                @else
                                                    <span class="text-secondary text-xs font-weight-bold">---</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($data->back != null)
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $data->back->format('H:i:s') }}</span>
                                                @else
                                                    <span class="text-secondary text-xs font-weight-bold">---</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($data->check_out != null)
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $data->check_out->format('H:i:s') }}</span>
                                                @else
                                                    <span class="text-secondary text-xs font-weight-bold">---</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm bg-gradient-success">{{ $data->description }}</span>
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
