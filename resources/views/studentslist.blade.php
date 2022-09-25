<div class="card mb-3">
    <img src="https://s35691.pcdn.co/wp-content/uploads/2016/06/iStock_000021242706_Medium.160613.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Data Nilai Mahasiswa</h5>
        <p class="card-text">Berikut Adalah Nilai Dari Masing-Masing Mahasiswa</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Quiz</th>
                <th scope="col">Tugas</th>
                <th scope="col">Absensi</th>
                <th scope="col">Praktik</th>
                <th scope="col">UAS</th>
                <th scope="col">Nilai Akhir</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->NIM }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                    <td>{{ $student->quiz }}</td>
                    <td>{{ $student->tugas }}</td>
                    <td>{{ $student->absensi }}</td>
                    <td>{{ $student->praktik }}</td>
                    <td>{{ $student->uas }}</td>
                    <td>{{ $student->final}}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
