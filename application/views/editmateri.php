<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Materi RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo site_url('assets/logoamikom.png'); ?>" type="image/x-icon">
</head>

<body style="font-family: roboto;">

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #7430a9;">
        <div class="container-fluid">
            <div class="p-2">
                <a class="p-2" href="#"><img src="<?php echo site_url('assets/amikom.png'); ?>" alt="" style="width: 34px;"></a>
                <a class="navbar-brand px-2" href="#" style="font-size: 16px;">UNIVERSITAS AMIKOM YOGYAKARTA</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="<?php echo site_url('login/logout'); ?>" type="button" class="btn btn-danger px-3 py-1 mx-2">Logout</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row" style="min-height: 100vh;">
            <div class="col-3 m-0 p-0 bg-body-secondary">
                <div class=" text-center">
                    <img src="<?php echo base_url('assets/Dhanu.png'); ?>" alt="" width="130px" class="my-3 rounded-circle">
                    <h6><?php echo $this->session->userdata('name'); ?></h6>
                    <h6>22.01.4918</h6>
                    <!-- <a href="#" class="btn btn-warning text-light mb-3">LIHAT PROFIL</a>
                    <a href="#" class="btn btn-primary mb-3">FOTO PROFIL</a> -->
                </div>
                <div class="nav nav-item flex-column text-center my-3">
                    <a href="<?php echo base_url('home/index'); ?>" class="text-decoration-none text-dark my-2">Dashboard</a>
                    <a href="<?php echo base_url('dosen/listSchedule'); ?>" class="text-decoration-none text-dark my-2">Lecturer Schedule</a>
                    <a href="<?php echo base_url('dosen/listMidterm'); ?>" class="text-decoration-none text-dark my-2">Midterm Exam</a>
                    <a href="<?php echo base_url('dosen/listFinalexam'); ?>" class="text-decoration-none text-dark my-2">Final Exams</a>
                    <a href="<?php echo base_url('home/create'); ?>" class="text-decoration-none text-dark my-2">Create RPS</a>
                    <a href="<?php echo base_url('rps/index'); ?>" class="bg-primary text-decoration-none text-light p-2">List RPS</a>
                </div>
            </div>
            <div class="col bg-dark-subtle">
                <div class="container m-4">
                    <h3 class="mt-3">EDIT MATERI RPS</h3>
                    <!-- Tab panes -->
                    <form action="<?php echo base_url('rps/editmateri/') . $datamateri['id_materi']; ?>" method="POST">
                        <div class="tab-content">
                            <div id="headerrps" class="container tab-pane active"><br>
                                <div class="container">
                                    <div class="card">
                                        <!-- <div class="card-header">
                                            <h5 class="card-title">ADD MATERI RPS</h5>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Minggu / Pertemuan</label>
                                                <input type="text" class="form-control" id="text1" name="pertemuan" value="<?= $datamateri['pertemuan']; ?>">
                                            </div>
                                            <!-- <label for="sel1">Minggu / Pertemuan :</label>
                                            <select class="form-control mb-3" id="sel1" name="pertemuan" value="<?= $datamateri['pertemuan']; ?>">
                                                <option>Pertemuan 1</option>
                                                <option>Pertemuan 2</option>
                                                <option>Pertemuan 3</option>
                                                <option>Pertemuan 4</option>
                                                <option>Pertemuan 5</option>
                                                <option>Pertemuan 6</option>
                                                <option>Pertemuan 7</option>
                                                <option>Pertemuan 8</option>
                                                <option>Pertemuan 9</option>
                                                <option>Pertemuan 10</option>
                                                <option>Pertemuan 11</option>
                                                <option>Pertemuan 12</option>
                                                <option>Pertemuan 13</option>
                                                <option>Pertemuan 14</option>
                                            </select> -->
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Kemampuan Akhir yang Diharapkan</label>
                                                <input type="text" class="form-control" id="text1" name="kemampuan_akhir" value="<?= $datamateri['kemampuan_akhir']; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="text1" class="form-label">Indikator</label>
                                                <input type="text" class="form-control" id="text2" name="indikator" value="<?= $datamateri['indikator']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text1" class="form-label">Topik dan Sub Topik</label>
                                                <input type="text" class="form-control" id="text1" name="topik" value="<?= $datamateri['topik']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Aktivitas dan Strategi Pembelajaran</label>
                                                <input type="text" class="form-control" id="text4" name="aktivitas" value="<?= $datamateri['aktivitas']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text3" class="form-label">Waktu</label>
                                                <input type="text" class="form-control" id="text3" name="waktu" value="<?= $datamateri['waktu']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text3" class="form-label">Penilaian</label>
                                                <input type="text" class="form-control" id="text3" name="penilaian" value="<?= $datamateri['penilaian']; ?>">
                                            </div>
                                            <input class="btn btn-primary" type="submit" value="Edit Materi" name="edit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>