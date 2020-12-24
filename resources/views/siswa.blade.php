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
                <div class="col-sm"><h3>Data Akun Siswa</h3><p>Belajar Laravel</p></div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Cari Data Siswa"/>
                </div>
                <div class="col">
                    <a href="/siswa/tambah-data" class="btn btn-primary float-right">Tambah Data Siswa</a>
                </div>
            </div>
            <br>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                {{ session()->get('status')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <tr class="bg-secondary text-center text-white">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $item -> id }}</td>
                        <td>{{ $item -> username }}</td>
                        <td>{{ $item -> password }}</td>
                        <td>{{ $item -> nama_siswa }}</td>
                        <td>{{ $item -> kelas }}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning" style="width:35%;">Edit</button>
                            <button class="btn btn-sm btn-danger" style="width:35%;">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="row">
                <div class="col-8">
                    <p>Halaman : {{ $siswa->currentPage() }}</p>
                </div>
                <div class="col">
                    <span class="float-right">{{ $siswa->links() }}</span>
                </div>
                
            </div>
        </div>
    </body>
    <script>
        $(document).ready({
            window.setTimeout(function(){
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 5000);
        });
    </script>
</html>