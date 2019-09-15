<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rekening 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <h1>Edit Data</h1>
    @if (session('success'))
    <div class="alert alert-info" role="alert">
        {{ session ('success') }}
    </div>
    @endif
    <div class="row">
      <div class="col-lg-12">
      <form action="/rekening1/{{$rek1}}" method="PATCH">
        @method('POST')
        @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Rekening</label>
            <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening" value="{{$rek1->kd_rek_1}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Rekening</label>
              <input type="text" name="nm_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Rekening" value="{{$rek1->nm_rek_1}}">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</tbody>
</body>
</html>