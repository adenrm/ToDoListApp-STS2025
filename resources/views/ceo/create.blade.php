<div>
    <form action="{{route('ceo.store')}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>
                    judul
                </td>
                <td>
                    <input type="text" name="judul" id="judul">
                </td>
            </tr>
            <tr>
                <td>
                    deskripsi
                </td>
                <td>
                    <input type="text" name="deskripsi" id="deskripsi">
                </td>
            </tr>
            <tr>
                <td>
                    penugas
                </td>
                <td>
                    <select name="penugas" id="penugas">
                        <option value="" selected disabled>Pilih Penugas</option>
                        @forelse ($penugas as $v)
                        <option value="{{$v->id}}">{{ $v->nama }}</option>
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
                        <option value="" selected disabled>Pilih Pelaksana</option>
                        @forelse ($pelaksana as $v)
                        <option value="{{$v->id}}">{{ $v->nama }}</option>
                        @empty
                        <option value="">Tidak ada</option>
                        @endforelse
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
