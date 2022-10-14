<div class="container mt-5">

    <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-title"><i><?= $data['mhs']['nrp']; ?></i></h6>
            <p class="card-text"> <?= $data['mhs']['jurusan']; ?></p>
            <p class="card-text">E-mail : <?= $data['mhs']['email']; ?></p>
            <a href="<?= BASEURL ?>/mahasiswa" class="stretched-link text-info">Kembali</a>
            
        </div>
    </div>

</div>