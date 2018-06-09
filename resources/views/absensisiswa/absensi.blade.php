@extends('layouts.admin')
@section('content')
<div class="col-md-4">
	<form action="absensisiswa.index", method="GET">
	<div class="input-group custom-sreach-form">
		<input type="text" class="form-control" name="cari" placeholder="Search...">
		<span class="input-group-btn">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>Cari</button>
			</span>
		</span>
	</div>
	<Form::close()>
</div>
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<br>
					<div class="panel-heading">Absensi Siswa
					<div class="panel-title pull-right">
						<a class="btn btn-primary" href="{{route('absensisiswa.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>kelas</th>
										<th>Tanggal</th>
										<th>Petugas Piket</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($absensisiswas as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td><p>{{ $data->siswa->nama }}</p></td>
										<td><p>{{ $data->kelas->nama_kelas }}</p></td>
										<td>{{ $data->tanggal }}</td>
										<td><p>{{ $data->petugaspiket->nama_petugas }}</p></td>
										<td>{{ $data->keterangan }}</td>
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