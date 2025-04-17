<body style="background-image: url({{asset('img/background.jpg')}}); height: 100vh">
    <div style="background-color: white; height:100vh" class="container">
    <div>
        <style>
            .table {
                width: 190vh;
                height: 10px
            }
            .container {
                padding-top: 30px;
                padding-left: 20px;
                padding-right: 20px;
                margin-top: 70px;
                margin-left: 10px;
                margin-right: 10px;
                border-radius: 10px;    
            }
            .btnDelete {
                align-content
            }
            </style>
        
        <span>Selamat datang di admin page!</span><span style="position:relative;left:119vh"><a href="{{route('login')}}">Logout</a></span>
        <table class="table" border="1px">
            <tr>
                <td>
                    <a href="{{route('admin.create')}}">Buat</a>
                </td>
            </tr>
            <tr>
                <td>
                    No
                </td>
                <td>
                    Judul
                </td>
                <td>
                    Penugas
                </td>
                <td>
                    Pelaksana
                </td>
                <td>
                    Status
                </td>
                <td>
                    Aksi
                </td>
            </tr>
            @if ($tugas)
            @foreach ($tugas as $v)
            <tr>
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    {{ $v->judul }}
                </td>
                <td>
                    {{ $v->penugas->nama }}
                </td>
                <td>
                    {{ $v->pelaksana->nama }}
                </td>
                <td>
                    @if ($v->hasil->status == 1)
                    <span style="color: blue">Ditugaskan</span>
                    @elseif ($v->hasil->status == 2)
                    <span style="color: yellow">Dikerjakan</span>
                    @elseif ($v->hasil->status == 3)
                    <span style="color: green">Selesai</span>
                    @elseif ($v->hasil->status == 4)
                    <span style="color: red">Ditolak</span>
                    @else
                    None
                    @endif
                </td>
                <td>
                    <span>
                        <form id="deleteButton" onsubmit="confirmDelete()" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$v->id}}">
                            <input class="btnDelete" type="submit" value="Hapus">
                        </form>
                    </span>
                    <span>
                        <form action="{{route('admin.edit')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$v->id}}">
                            <input class="btnEdit" type="submit" value="Edit">
                        </form>
                    </span>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>
                    Tidak ada
                </td>
            </tr>
            @endif
        </table>
        <script>
            function confirmDelete(){
                var $bool = confirm("Yakin ingin menghapus ini??")
                if ($bool){
                    document.getElementById('deleteButton').action = "{{route('admin.destroy')}}"
                } else {
                    document.getElementById('deleteButton').method = "GET"
                    document.getElementById('deleteButton').action = "{{route('admin')}}"
                }
            }
            </script>
    </div>
 </div>
</body>