@extends('layouts.app')

@section('main')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Pegawai</h6>
                        <a class="btn btn-primary text-xxs" href="{{ route('pegawai.create') }}">Pegawai Baru</a>
                        <button class="btn btn-secondary text-xxs">Download</button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="printAbsen">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Pegawai</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Posisi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor Telepon</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Dibuat Pada</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('storage') }}/karyawan/avatar/{{ $item->photo }}"
                                                            class="avatar avatar-sm me-3" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0"><a
                                                                href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="c4aeabacaa84a7b6a1a5b0adb2a1e9b0ada9eaa7aba9">{{ $item->email }}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @foreach ($item->userJobDetails as $detail)
                                                    <p class="text-xs font-weight-bold mb-0">{{ $detail->position }}</p>
                                                    <p class="text-xs text-secondary mb-0">{{ $detail->division }}</p>
                                                @endforeach
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm bg-gradient-success">{{ $item->phone_number }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <ul class="nav-item dropdown">
                                                    <a class="nav-link" id="navbarDropdownMenuLink"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-bars"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="navbarDropdownMenuLink">
                                                        <a class="dropdown-item"
                                                            href="{{ route('pegawai.edit', $item->id) }}">
                                                            <strong>Detail</strong>
                                                        </a>
                                                        <form class="d-inline-block" action="" method="POST">
                                                            <a class="dropdown-item" type="button" onclick="">
                                                                <strong>Hapus!</strong>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </ul>
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
@push('js')
    <script>
        function printData() {
            var divToPrint = document.getElementById("printAbsen");
            newWin = window.open('', '', 'height=700,width=700');
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

        $('button').on('click', function() {
            printData();
        })
    </script>
@endpush
