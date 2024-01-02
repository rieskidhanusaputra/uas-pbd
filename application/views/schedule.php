<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturer Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo site_url('assets/logoamikom.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body style="font-family: roboto;">

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #7430a9;">
        <div class="container-fluid">
            <div class="p-2">
                <a class="p-2" href="#"><img src="<?php echo site_url('assets/amikom.png'); ?>" alt="" style="width: 34px;"></a>
                <a class="navbar-brand px-2" href="#" style="font-size: 16px;">UNIVERSITAS AMIKOM YOGYAKARTA</a>
            </div>
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
                    <a href="<?php echo base_url('dosen/listSchedule'); ?>" class="bg-primary text-decoration-none text-light p-2">Lecturer Schedule</a>
                    <a href="<?php echo base_url('dosen/listMidterm'); ?>" class="text-decoration-none text-dark my-2">Midterm Exam</a>
                    <a href="<?php echo base_url('dosen/listFinalexam'); ?>" class="text-decoration-none text-dark my-2">Final Exams</a>
                    <a href="<?php echo base_url('home/create'); ?>" class="text-decoration-none text-dark my-2">Create RPS</a>
                    <a href="<?php echo base_url('rps/index'); ?>" class="text-decoration-none text-dark my-2">List RPS</a>
                </div>
            </div>
            <div class="col bg-dark-subtle">
                <div class="row mt-4 ms-4">
                    <div class="col-6">
                        <h3>Lecturer Schedule</h3>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary border" href="<?php echo base_url('dosen/addschedule/'); ?>"><i class="bi bi-plus-circle"></i> Add Schedule</a>
                    </div>
                </div>
                <div class="bg-light mx-4 mt-2 p-3">
                    <table class="table table-hover table-bordered border-dark">
                        <thead class="table-primary border-dark">
                            <tr>
                                <th>No</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>Program Studi</th>
                                <th>Tanggal Mengajar</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dataschedule as $mhs) : ?>
                                <tr>
                                    <td scope="row"><?= $no++; ?></td>
                                    <td><?= $mhs['kode_matkul']; ?></td>
                                    <td><?= $mhs['nama_matkul']; ?></td>
                                    <td><?= $mhs['program_studi']; ?></td>
                                    <td><?= $mhs['tgl_mengajar']; ?></td>
                                    <td><?= $mhs['kelas']; ?></td>
                                    <td>
                                        <a class="btn btn-warning border" href="<?php echo base_url('dosen/editschedule/') . $mhs['id']; ?>"><i class="bi bi-pencil-fill"></i></a>
                                        <a class="btn btn-danger border" href="<?php echo base_url('dosen/deleteschedule/') . $mhs['id']; ?>" onclick="return confirm('Delete Schedule?')"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>