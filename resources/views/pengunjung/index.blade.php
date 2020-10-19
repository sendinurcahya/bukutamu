<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>DATA PENGUNJUNG</h1>   
                </div>
                <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right btm-sm" data-toggle="modal" data-target="#exampleModal">
                DAFTAR
                </button>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>NAMA</th>
                        <th>KONTAK\</th>
                        <th>ASAL</th>
                        <th>TUJUAN</th>
                        <th>DESKRIPSI</th>
                    </tr>
                    @foreach($data_pengunjung as $pengunjung)
                    <tr>
                        <th>{{ $pengunjung->nama }}</th>
                        <th>{{ $pengunjung->kontak }}</th>
                        <th>{{ $pengunjung->asal }}</th>
                        <th>{{ $pengunjung->tujuan }}</th>
                        <th>{{ $pengunjung->deskripsi }}</th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                            <div class="modal-body">
                            <form action="/pengunjung/create" method="post">
                            {{csrf_field()}}    
                            <div class="form-group">
                            <label for="exampleInputEmail1">namas</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">kontak</label>
                            <input name="kontak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kontak">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">asal</label>
                            <input name="asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asal">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">tujuan</label>
                            <select name="tujuan" class="form-control" id="exampleFormControlSelect1">
                                <option value="kepsek">kepsek</option>
                                <option value="tu">tu</option>
                                <option value="kesiswan">kesiswan</option>
                                <option value="kurikulum">kurikulum</option>
                                <option value="humas">humas</option>
                                <option value="kajur">kajur</option>
                                <option value="wali kelas">wali kelas</option>
                            </select>
                          </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                                <button type="daftar" class="btn btn-primary">daftar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>   
            

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>