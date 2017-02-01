@extends('guru.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Olah Data ruangan </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Olah Data Ruangan  </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
    
      
      </div>
      <div class="row" style="padding:15px">
      <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Detail Ruangan</h3>
          </div>
          <div class="box-body">
            <table class="table table-striped">
              <tr>
              <td>NIS Penanggung Jawab</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->pj_prasarana }}</td>
              </tr>
              <tr>
              <td>Nama Penanggung Jawab</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->namaguru }}</td>
              </tr>
              <tr>
              <td>Kode Ppasarana</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->kode_prasarana }}</td>
              </tr>
              <tr>
              <td>Nama Prasarana</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->nama_prasarana }}</td>
              </tr>
              <tr>
              <td>Nama Ruangan</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->ruangan }}</td>
              </tr>
              <tr>
              <td>Status Prasarana</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->prasarana_status }}</td>
              </tr>
              <tr>
              <td>Kondisi Prasarana</td>
              <td><b> : </b></td>
              <td>{{ $prasarana->kondisi }}</td>
              </tr>
              <tr>
              <td>Keterangan Prasarana</td>
              <td><b> : </b></td>
              <td>
              @if(empty($prasarana->keterangan))
              -
              @else
              {{ $prasarana->keterangan }}  
              @endif
              
              </td>
              </tr>
              <tr>
              
                <td colspan="3">
                <a href="/guru/prasarana/ruangan"><button class="btn btn-success">Kembali Ke halaman Olah Prasarana</button> </a>
                <a href="/guru/prasarana/ruangan/{{ $prasarana->id }}/edit"><button class="btn btn-primary">Update Data</button> </a>
              </td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->


@stop



<!-- Bootstrap 3.3.6 -->

<!-- page script -->

