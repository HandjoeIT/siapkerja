@extends('layouts.app')

@section('main')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Rekap Presensi Hari ini</h6>
            <a class="btn btn-primary text-xxs" href="">Lihat semua</a>
            <button class="btn btn-secondary text-xxs">Download</button>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" id="printAbsen">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pegawai</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lokasi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Masuk</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Istirahat</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kembali</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pulang</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)  
                  <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('storage') }}/presensi/datang/{{ $item->check_in_photo }}" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <span class="mb-0 text-sm"><strong>{{ $item->user->name }}</strong></span>
                                <p class="text-xs text-secondary mb-0">{{ $item->link_check_in }}</p>
                            </div>
                            </div>
                        </td>
                        <td>
                          <span class="text-secondary text-xs font-weight-bold">{{ $item->location_check_in }}</span>
                        </td>
                        <td class="align-middle text-center">
                          @if ($item->check_in != NULL)
                            <span class="text-secondary text-xs font-weight-bold">{{ $item->check_in->format("H:i:s") }}</span>  
                          @else
                            <span class="text-secondary text-xs font-weight-bold">---</span>  
                          @endif
                        </td>
                        <td class="align-middle text-center">
                          @if ($item->break != NULL)
                            <span class="text-secondary text-xs font-weight-bold">{{ $item->break->format("H:i:s") }}</span>
                          @else
                            <span class="text-secondary text-xs font-weight-bold">---</span>
                          @endif
                        </td>
                        <td class="align-middle text-center">
                          @if ($item->back != NULL)
                            <span class="text-secondary text-xs font-weight-bold">{{ $item->back->format("H:i:s") }}</span>  
                          @else
                            <span class="text-secondary text-xs font-weight-bold">---</span>  
                          @endif
                        </td>
                        <td class="align-middle text-center">
                          @if ($item->check_out != NULL)
                            <span class="text-secondary text-xs font-weight-bold">{{ $item->check_out->format("H:i:s") }}</span>  
                          @else
                            <span class="text-secondary text-xs font-weight-bold">---</span>  
                          @endif
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">{{ $item->description }}</span>
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
    function printData()
  {
    var divToPrint=document.getElementById("printAbsen");
    newWin = window.open('', '', 'height=700,width=700');
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
  }

    $('button').on('click',function(){
    printData();
    })
  </script>
@endpush