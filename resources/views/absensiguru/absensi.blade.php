@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Absensi Guru
					<div class="panel-title pull-right">
						<a href="{{route('absensiguru.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Keahlian Bidang Studi</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($absensigurus as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td><p>{{ $data->guru->nama }}</p></td>
										<td><p>{{ $data->guru->keahlian_bidang_studi }}</p></td>
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