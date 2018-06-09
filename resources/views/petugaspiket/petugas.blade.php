@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Petugas Piket
					<div class="panel-title pull-right">
						<a class="btn btn-primary" href="{{route('petugaspiket.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Petugas</th>
										<th>Hari</th>
										<th>Tanggal</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($petugaspikets as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nama_petugas }}</td>
										<td>{{ $data->hari }}</td>
										<td>{{ $data->tanggal }}</td>
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