{{-- <!DOCTYPE html>
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
      </tr>
    
      @foreach ($rek1 as $key =>$rek)
      <tr>
        <td>{{$rek->kd_rek_1}}</td>
        <td>{{$rek->nm_rek_1}}</td>
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
          
            <form action="/rekening1/create" method="get">
              {{ csrf_token() }}
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
  </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </tbody>
</body>
</html> --}}