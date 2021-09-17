@extends('layouts.app')
@section('main')
    {{-- <style>
        #camera {
            width: 350px;
            height: 350px;
            border: 1px solid black;
        }

    </style> --}}
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-3">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Cek Kedatangan</p>
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
                                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                                        'November', 'Desember'
                                    ];
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
                            <br />
                            @include('layouts.clock')

                            <form method="POST" novalidate="novalidate" id="absen"
                                action="{{ route('presensipresensi.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <input type="hidden" name="id_workers" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="link_check_in" id="linkLoc">
                                    <input type="hidden" name="location_check_in" id="checkLoc">
                                </div>
                                <div class="location-container" style="text-align: center">
                                    <p style="font-size: 14px;" id="seeLoc"></p>
                                </div>
                        </div>
                        <br />
                        <div class="col-md-6">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div id="results" class="fileinput-new thumbnail">
                                    <img src="{{ asset('dashboard') }}/assets/img/img_selfie.png" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Pilih Gambar</span>
                                        <span class="fileinput-exists">Ganti</span>
                                        <input type="file" accept="image/*" name="check_in_photo" capture="camera"
                                            required="true">
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Hapus</a>
                                </div>
                            </div>
                            @error('check_in_photo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div>
                                <button type="button" class="btn btn-secondary btn-md" onclick="tampilLokasi()">Set
                                    Lokasi</button>
                                &nbsp;
                                <button type="submit" class="btn btn-primary btn-md">Check!</button>
                                {{-- <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal"
                                    data-bs-target="#ambilFoto">
                                    Ambil Foto
                                </button> --}}
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        {{-- <div class="modal fade" id="ambilFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ambil Foto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="camera"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-md" onclick="take_snapshot()">Ambil
                            Gambar!</button>
                    </div>
                </div>
            </div>
        </div> --}}
    @endsection
    @push('js')
        <script type="text/javascript">
            $(document).ready(function() {
                navigator.geolocation.getCurrentPosition(function(position) {
                    tampilLokasi(position);
                }, function(e) {
                    alert('Aktif dan Izinkan sistem untuk mengakses Lokasi');
                }, {
                    enableHighAccuracy: true
                });
            });
            $('#absen').on('submit', function(event) {
                event.preventDefault();
                var formData = new FormData();
                formData.append("check_in_photo", $('[name="check_in_photo"]').val());
                $.post("{{ route('presensipresensi.store') }}", formData,
                    function(data, textStatus, jqXHR) {

                    },
                    "json"
                );
            })

            function tampilLokasi(posisi) {
                // console.log(posisi);
                var latitude = posisi.coords.latitude;
                var longitude = posisi.coords.longitude;

                var inputLoc = document.getElementById("linkLoc");
                inputLoc.value = "https://www.google.com/maps?q=" + latitude + "," + longitude;

                var seeLoc = document.getElementById("linkLoc").value;
                if (seeLoc === "https://www.google.com/maps?q=-7.5343702,112.4304608") {
                    document.getElementById("seeLoc").innerHTML = "<b> Lokasi Anda : Gudang Joemen </b>";
                    document.getElementById("checkLoc").value = "Area Gudang Joemen";
                } else if (seeLoc === "https://www.google.com/maps?q=-7.5231144,112.4194255") {
                    document.getElementById("seeLoc").innerHTML = "<b> Lokasi Anda : Kantor IT </b>";
                    document.getElementById("checkLoc").value = "Area Kantor IT";
                } else if (seeLoc) {
                    document.getElementById("seeLoc").innerHTML = "<b> <i class=" + "'" + "fas fa-map-marker-alt" + "'" +
                        " ></i> " + seeLoc + "</b>";
                    document.getElementById("checkLoc").value = "Area tidak terdaftar";
                }
            }
        </script>
        {{-- <script type="text/javascript" src="{{ asset('dashboard/assets/js/plugins/webcamjs-master/webcam.min.js') }}">
        </script> --}}
        {{-- <script language="JavaScript">
            Webcam.set({
                width: 320,
                height: 240,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
            Webcam.attach('#camera');

            function take_snapshot() {
                // take snapshot and get image data
                Webcam.snap(function(data_uri) {
                    // display results in page
                    document.getElementById('results').innerHTML =
                        '<img src="' + data_uri + '"/>';
                });
            }
        </script> --}}
    @endpush
