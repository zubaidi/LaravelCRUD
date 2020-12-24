<!DOCTYPE html>
<html>
    <head>
        <title>Profil Saya</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="/js/popper.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Tambah Data Siswa</h3><hr>
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('status')}}
                                </div>
                            @endif
                            <form action="/siswa/store" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>ID Siswa</label>
                                    <input type="text" class="form-control" name="id">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <label>Nama Lengkap Siswa</label>
                                    <input type="text" class="form-control" name="nama_siswa">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas"><br>
                                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                                    <a href="/siswa" class="btn btn-primary btn-sm">Kembali</a><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        window.setTimeout(function(){
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
    </script>
</html>