<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between 
                    align-items-center list-group-item list-group-item-action list-group-item-secondary text-dark">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-dark text-white">Detail</a>
                        
                    </li>
                    
                <?php endforeach; ?>
            </ul>
            <a class="btn btn-dark bg-dark text-white" href="<?= BASEURL ?>/home" role="button">Home</a>
        </div>
    </div>
</div>