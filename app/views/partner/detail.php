
  <div class="container mt-3 " style="width: 80%;">
  <div class="card bg-transparent text-light border border-white"">
  <img style="height: 300px; object-fit: cover;" src="<?= $data["img"] ;?>" class="card-img-top" alt="...">
    <div class="card-body">
      <div class="d-flex d-flex align-items-start"><h2 class="card-title"><?= $data["partner"]["name"] ;?> |</h2><h3><?= $data["partner"]["devloper"] ;?></h3></div>
      <h6 class="card-subtitle mb-4"><?= $data["partner"]["email"] ;?></h6>
      <p class="card-text"><?= $data["partner"]["story"] ;?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>
  <img src="img/men.jpeg" alt="">