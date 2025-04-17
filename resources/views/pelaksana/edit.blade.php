<div>
    <style>
        .form {
            margin: 250px
        }
    </style>
    <form class="form" action="{{route('pelaksana.update')}}" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="id" value="{{$tugas->id}}">
        <table>
            <tr>
                <td>
                    judul
                </td>
                <td>
                    :
                </td>
                <td>
                    {{$tugas->judul}}
                </td>
            </tr>
            <tr>
                <td>
                    deskripsi
                </td>
                <td>
                    :
                </td>
                <td>
                    {{$tugas->deskripsi}}
                </td>
            </tr>
            <tr>
                <td>
                    penugas
                </td>
                <td>
                    :
                </td>
                <td>
                    {{$tugas->penugas->nama}}
                </td>
            </tr>
            <tr>
                <td>
                    pelaksana 
                </td>
                <td>
                    :
                </td>
                <td>
                   {{$tugas->pelaksana->nama}}
                </td>
            </tr>
            <tr>
                <td>
                    Status
                </td>
                <td>
                    :
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
