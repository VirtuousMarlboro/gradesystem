<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student management system</title>
</head>
<body>
@include("navbar")

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://www.thoughtco.com/thmb/JzwcamBvoIaZFA8sfairpmhMo1k=/4368x2912/filters:fill(auto,1)/an-up-close-picture-of-report-card-grades-172413295-1f645705a5634485bf7eb1505f431977.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Masukkan Data Untuk Menghitung Nilai Akhir</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NIM</label>
                                <input name="NIM" type="text" class="form-control"  placeholder="Masukkan NIM">
                            </div>
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Masukkan Nama Depan">
                            </div>
                            <div class="form-group">
                                <label>Nama Belakang</label>
                                <input name="lastName" type="text" class="form-control"  placeholder="Masukkan Nama Belakang">
                            </div>
                            
                            <div class="form-group">
                                <label>Nilai Quiz</label>
                                <input name="quiz" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Nilai Tugas</label>
                                <input name="tugas" type="text" class="form-control"  placeholder="Nilai Tugas">
                            </div>
                            <div class="form-group">
                                <label>Nilai Absensi</label>
                                <input name="absensi" type="text" class="form-control"  placeholder="Nilai Absensi">
                            </div>
                            <div class="form-group">
                                <label>Nilai Praktik</label>
                                <input name="praktik" type="text" class="form-control"  placeholder="Nilai Praktik">
                            </div>
                            <div class="form-group">
                                <label>Nilai UAS</label>
                                <input name="uas" type="text" class="form-control"  placeholder="Nilai UAS">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://www.thoughtco.com/thmb/JzwcamBvoIaZFA8sfairpmhMo1k=/4368x2912/filters:fill(auto,1)/an-up-close-picture-of-report-card-grades-172413295-1f645705a5634485bf7eb1505f431977.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NIM</label>
                                <input name="NIM" type="text" class="form-control"  placeholder="Masukkan NIM">
                            </div>
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Masukkan Nama Depan">
                            </div>
                            <div class="form-group">
                                <label>Nama Belakang</label>
                                <input name="lastName" type="text" class="form-control"  placeholder="Masukkan Nama Belakang">
                            </div>
                            
                            <div class="form-group">
                                <label>Nilai Quiz</label>
                                <input name="quiz" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Nilai Tugas</label>
                                <input name="tugas" type="text" class="form-control"  placeholder="Nilai Tugas">
                            </div>
                            <div class="form-group">
                                <label>Nilai Absensi</label>
                                <input name="absensi" type="text" class="form-control"  placeholder="Nilai Absensi">
                            </div>
                            <div class="form-group">
                                <label>Nilai Praktik</label>
                                <input name="praktik" type="text" class="form-control"  placeholder="Nilai Praktik">
                            </div>
                            <div class="form-group">
                                <label>Nilai UAS</label>
                                <input name="uas" type="text" class="form-control"  placeholder="Nilai UAS">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>