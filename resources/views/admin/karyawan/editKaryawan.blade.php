@extends('layouts.app')
@section('main')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="multisteps-form mb-5">
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-10 m-auto">
                            <form class="multisteps-form__form mb-8" novalidate="novalidate" method="POST"
                                action="{{ route('pegawai.update', $pegawai->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Edit Pegawai</h5>
                                    <p class="mb-0 text-sm">Identitas Diri</p>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="fileinput fileinput-new text-center d-block"
                                                data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('storage/karyawan/avatar/' . $pegawai->photo) }}"
                                                        alt="{{ $pegawai->photo }}">
                                                </div>
                                                <div><strong>Ganti Thumbnail</strong></div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-primary btn-link  btn-file">
                                                        <span class="fileinput-new">Pilih Gambar</span>
                                                        <span class="fileinput-exists">Ganti</span>
                                                        <input type="file" name="thumbnail" maxsize="2"
                                                            extension="jpg|gif|png|jpeg" id="thumbnail">
                                                    </span>
                                                    <a class="btn btn-danger btn-link fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Nama Lengkap</label>
                                                <input class="multisteps-form__input form-control" name="name"
                                                    value="{{ $pegawai->name }}" type="text"
                                                    placeholder="Masukkan Nama" />
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Tempat Tanggal Lahir</label>
                                                <input class="multisteps-form__input form-control" name="ttl"
                                                    value="{{ $pegawai->ttl }}" type="date" placeholder="01/01/1999" />
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <label>Jenis Kelamin</label>
                                                <select class="multisteps-form__input form-control" name="gender">
                                                    <option value="{{ $pegawai->gender }}" selected>
                                                        {{ $pegawai->gender }}</option>
                                                    <option value="laki laki">Laki laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Nomor Telepon</label>
                                                <input class="multisteps-form__input form-control" name="phone_number"
                                                    type="text" value="{{ $pegawai->phone_number }}"
                                                    placeholder="Masukkan Nomor Telepon" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Email</label>
                                                <input class="multisteps-form__input form-control" name="email"
                                                    value="{{ $pegawai->email }}" type="email"
                                                    placeholder="Masukkan Email Aktif" />
                                            </div>
                                            <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                                                <label>Alamat</label>
                                                <textarea class="multisteps-form__input form-control" name="address"
                                                    cols="30" rows="10">{{ $pegawai->address }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!--single form panel-->
                                    <br />
                                    <h5 class="font-weight-bolder">Pekerjaan</h5>
                                    <div class="multisteps-form__content">
                                        @foreach ($pegawai->userJobDetails as $item)
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label>Jabatan</label>
                                                    <select class="multisteps-form__input form-control" name="position[]"
                                                        id="position">
                                                        <option value="{{ $item->position }}" selected>
                                                            {{ $item->position }}</option>
                                                        <option value="packing">Packing</option>
                                                        <option value="marketing">Marketing</option>
                                                        <option value="tim kreatif">Tim Kreatif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label>Divisi</label>
                                                    <select class="multisteps-form__input form-control" name="division[]"
                                                        id="division">
                                                        <option value="{{ $item->division }}" selected>
                                                            {{ $item->division }}</option>
                                                        <option value="joemen">JOEMEN</option>
                                                        <option value="hipzo">HIPZO</option>
                                                        <option value="alope">ALOPE</option>
                                                        <option value="import">IMPORT</option>
                                                        <option value="tim kreatif">TIM KREATIF</option>
                                                        <option value="management">MANAGEMENT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label>Koordinator</label>
                                                    <select class="multisteps-form__input form-control" name="koordinator[]"
                                                        id="koordinator">
                                                        <option value="{{ $item->koordinator }}" selected>
                                                            {{ $item->koordinator }}</option>
                                                        <option value="joemen">JOEMEN</option>
                                                        <option value="hipzo">HIPZO</option>
                                                        <option value="alope">ALOPE</option>
                                                        <option value="import">IMPORT</option>
                                                        <option value="tim kreatif">TIM KREATIF</option>
                                                    </select>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="button-row d-flex mt-4">
                                            <a class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Batal"
                                                href="{{ URL::previous() }}">Batal</a>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"
                                                title="Simpan">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
