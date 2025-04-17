<div>
    <form action="{{route('ceo.update')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$tugas->id}}">
        <table>
            <tr>
                <td>
                    judul
                </td>
                <td>
                    <input type="text" name="judul" id="judul" value="{{$tugas->judul}}">
                </td>
            </tr>
            <tr>
                <td>
                    deskripsi
                </td>
                <td>
                    <input type="text" name="deskripsi" id="deskripsi" value="{{$tugas->deskripsi}}">
                </td>
            </tr>
            <tr>
                <td>
                    penugas
                </td>
                <td>
                    <select name="penugas" id="penugas">
                        <option value="" disabled>Pilih Penugas</option>
                        @forelse ($penugas as $v)
                        <option value="{{$v->id}}" {{ $v->id == $tugas->id_penugas ? 'selected' : '' }}>{{ $v->nama }}</option>
                        @empty
                        <option value="">Tidak ada</option>
                        @endforelse
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    pelaksana
                </td>
                <td>
                    <select name="pelaksana" id="pelaksana">
                        <option value="" disabled>Pilih Pelaksana</option>
                        @forelse ($pelaksana as $v)
                        <option value="{{$v->id}}" {{$v->id == $tugas->id_pelaksana ? 'selected' : ''}}>{{ $v->nama }}</option>
                        @empty
                        <option value="">Tidak ada</option>
                        @endforelse
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Status
                </td>
                <td>
                    <select name="status" id="status">
                        <option value="" selected disabled>Pilih Status</option>
                        <option value="1" {{$tugas->hasil->status == 1 ? 'selected' : ''}}>DiTugaskan</option>
                        <option value="2" {{$tugas->hasil->status == 2 ? 'selected' : ''}}>DiKerjakan</option>
                        <option value="3" {{$tugas->hasil->status == 3 ? 'selected' : ''}}>Selesai</option>
                        <option value="4" {{$tugas->hasil->status == 4 ? 'selected' : ''}}>DiTolak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</div>
