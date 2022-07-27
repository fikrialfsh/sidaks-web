@extends('layouts.homelay')
@section('content')
<div class="container" data-aos="fade-up">
          <div class="col-lg-12 col-md-6">
            <div class="section-title text-center">
              <h2>Laporkan Berita</h2>
              <p>Laporkan Berita Yang Belum Teridentifikasi</p>
            </div>
            <div class="form">
              <form action="/laporan" method="POST" role="form" >
                @csrf
                <div class="form-group">
                  <input type="username" name="username" class="form-control" id="username" placeholder="username" data-rule="minlen:5" data-msg="Masukkan paling sedikit 5 karakter" />
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Tuliskan isi tweet anda di sini..." placeholder="masukkan isi berita"></textarea>
                </div>
                <div class="mb-3">
                  <a class='resetbutton btn btn-primary' style='display: none' href='/'>Refresh / Deteksi Ulang</a>
                </div>
                <div class="text-center"><button class="btn btn-success" type="submit">Laporkan</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection


