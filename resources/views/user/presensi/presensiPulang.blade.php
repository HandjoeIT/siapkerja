@extends('layouts.app')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Mari pulang, Sampai jumpa besok!</p>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body" style="text-align:center;">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Menampilkan Hari, Bulan dan Tahun -->
                        <b style="font-size:18px;">
                            <script type='text/javascript'>
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                    thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;
                                document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                            </script>
                        </b>
                        <br/>
                        @include('layouts.clock')
                        
                        @foreach ($checkout as $item)
                        <form method="POST" novalidate="novalidate" id="absen" action="{{ route('presensipulang.update', $item->id) }}" enctype="multipart/form-data">
                        @csrf
                            <div>
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <input type="hidden" name="id_workers" value="{{ $item->id_workers }}">
                                <input type="hidden" name="check_in" value="{{ $item->check_in }}">
                                <input type="hidden" name="check_in_photo" value="{{ $item->check_in_photo }}">
                                <input type="hidden" name="location_check_in" value="{{ $item->location_check_in }}">
                                <input type="hidden" name="link_check_in" value="{{ $item->link_check_in }}">
                                <input type="hidden" name="break" value="{{ $item->break }}">
                                <input type="hidden" name="back" value="{{ $item->back }}">
                            </div>
                        @endforeach
                    </div>
                    <br/>
                    <div class="col-md-6">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{ asset('dashboard') }}/assets/img/gohome.jpg" alt="...">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-md">Check!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush