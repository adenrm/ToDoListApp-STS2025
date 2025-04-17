<div>
    <span>Selamat datang di pelaksana page!</span><span  style="position:relative;left:119vh"><a href="{{route('login')}}">Logout</a></span>

    <table border="1px" style="width: 1200px; height: 100px">
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
                <form action="{{route('pelaksana.edit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$v->id}}">
                    <input type="submit" value="Edit">
                </form>
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
</div>
