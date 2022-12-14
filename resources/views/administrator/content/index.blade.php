@extends('administrator.layouts.app2')

@section('title', 'Dashboard ')

@section('dashboard', 'active')

@section ('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Selamat Datang di Halaman Dashboard!</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-12">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3></h3>

                <p>Data Training</p>
              </div>
              <div class="icon">
                
              </div>
            </div>
          </div>
          <!-- ./col -->
      

          <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-chart-pie"></i> Tentang Sidax</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                Sidax adalah untuk mendeteksi suatu berita mengenai COVID-19 apakah itu hoax atau fakta 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
