@extends('layout.master')

@section('content')
    
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Hover Row</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		
@endsection


{{-- @section('content')
    
@if (session('success'))
<div class="alert alert-info" role="alert">
    {{ session ('success') }}
</div>
@endif

<div class="row">
  <div class="col-6">
      <h1>Rekening 1</h1><br>
  </div>
  <div class="col-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-right mt-4" data-toggle="modal" data-target="#exampleModal">
        Add Data
      </button>
      
            
  </div>

<table class="table table-hover">
  <tr>
    <th>Kode Rekening</th>
    <th>Nama Rekening</th>
    <th>Update</th>
    <th>AKSI</th>
  </tr>

  @foreach ($rek1 as $key =>$rek1)
  <tr>
    <td>{{$rek1->kd_rek_1}}</td>
    <td>{{$rek1->nm_rek_1}}</td>
    <td>{{$rek1->updated_at}}</td>
    <td>
      <a href="/rekening1/{{$rek1->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/rekening1/{{$rek1->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data!!')">Delete</a>
    </td>
  </tr>
  @endforeach
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add Data Rekening 1</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      
        <form action="/rekening1/create" method="post">
          @csrf
          <div class="form-group">
              <label for="exampleInputEmail1">Kode Rekening</label>
              <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Rekening</label>
              <input type="text" name="nm_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Rekening">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@endsection --}}