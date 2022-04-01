@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Edit Transaksi</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Edit Transaksi</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateTransaksi', ['id' => $transaksi->id])}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="integer" name="id_barang" id="id_barang" class="form-control" required="required" placeholder="Masukan Nama Barang">
                    </div>

                    <div class="form-group">
                        <label for="nama">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal" class="form-control" required="required" placeholder="Masukan Tanggal Transaksi">
                    </div>

                    <div class="form-group">
                        <label for="nama">Total Pesanan</label>
                        <input type="integer" name="total_pesanan" id="total_pesanan" class="form-control" required="required" placeholder="Masukan Total Pesanan">
                    </div>

                    <div class="form-group">
                        <label for="nama">Jumlah</label>
                        <input type="integer" name="jumlah" id="jumlah" class="form-control" required="required" placeholder="Masukan Jumlah">
                    </div>

                    <div class="text-right">
                        <a href="{{ route('daftarTransaksi') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

<div class="content">
	<div class="container-fluid">
		{{-- main content here --}}
        
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection