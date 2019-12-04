@extends('layouts.home')
@section('title','Detail Kamar')
@section('content')
<!-- Bootstrap slider card start -->
<div class="card">
    <div class="card-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid w-100" src="..\files\assets\images\slider\slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="..\files\assets\images\slider\slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="..\files\assets\images\slider\slide3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="..\files\assets\images\slider\slide4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- Bootstrap slider card end -->

{{-- Start Detail Kamar --}}
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-body">
                <label class="label badge-success">Khusus {{$detail->jenis_kamar}}</label>
                <h5 class="mt-2 mb-1 font-weight-bold" style="color:red">{{$detail->nama_kamar}}</h5>  
                <button type="submit" class="btn btn-default">Simpan</button>
                <button type="submit" class="btn btn-default">Bagikan</button>
                {{-- Start Luas Kamar --}}
                <h6 class="mt-5 font-weight-bold">Luas Kamar</h6>
                <span>{{$detail->luas_kamar}}</span>


                {{-- Start Fasilitas Kamar --}}
                <h6 class="mt-5 font-weight-bold">Fasilitas Kamar</h6>
                <span>
                    {{$detail->fkamar_name}}
                </span>

                {{-- Start Fasilitas Kamar Mandi--}}
                <h6 class="mt-5 font-weight-bold">Fasilitas Kamar Mandi</h6>
                <span>
                    {{$detail->fkamar_mandi}}
                </span>

                {{-- Start Fasilitas Bersama--}}
                <h6 class="mt-5 font-weight-bold">Fasilitas Bersama</h6>
                <span>
                    {{$detail->fbersama_name}}
                </span>

                {{-- Start Fasilitas Parkir--}}
                <h6 class="mt-5 font-weight-bold">Fasilitas Parkir</h6>
                <span>
                    {{$detail->fparkir_name}}
                </span>

                {{-- Start Fasilitas Area Lingkungan--}}
                <h6 class="mt-5 font-weight-bold">Fasilitas Area Lingkungan</h6>
                <span>
                    {{$detail->area_name}}
                </span>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
               
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <label class="label badge-info label-lg">Tersisa {{$detail->stok_kamar}} Kamar</label>
                <div class="job-meta-data mt-2">Update {{$detail->updated_at->format('d-m-y')}}</div>
                <div class="job-meta-data mt-2"><span style="color:red">Data bisa berubah sewaktu-waktu </span></div>
                <h6 class="font-weight-bold mt-5">Rp. 800.000 / Bulan</h6>
                <p style="font-size:8pt">
                    Tidak Termasuk Listrik <br>
                    Tidak Ada Minimal Pembayaran
                </p>
                <a href="" class="btn btn-primary">Sewa Kos</a>
                <a href="" class="btn btn-danger">Booking</a>
            </div>
        </div>
    </div>
</div>
{{-- End Detail Kamar --}}
@endsection