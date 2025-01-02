
<section class="bg-dark text-light py-5 text-center">
    <div class="container">
      <h1 class="display-4 fw-bold ">My Partener</h1>
      <p class="lead ">Meet our amazing partners who have been with us on our journey.</p>
    </div>
</section>

<div class="container dark" style="width: 50%;">
  <?= Flasher::flash() ;?>
</div>

<div class="container dark" style="width: 50%;">
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insert">
      New Devloper 
    </button>

    <ol class="list-group ">
        <?php foreach($data["partner"] as $partner ) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-start bg-dark text-light mt-1">
            <span><?= $partner["name"] ;?> | <b><?= $partner["devloper"] ;?></b></span>
            <div>
            <a href="<?= BASEURL ;?>/partner/detail/<?= $partner["id"] ;?>"><span class="badge bg-primary rounded-pill">detail</span></a>
            <a onclick="deleteConfirm(event, '<?= BASEURL ;?>/partner/delete/<?= $partner['id'] ;?>')" href="#"><span class="badge bg-danger rounded-pill">delete</span></a>
            </div>
        </li>
        <?php endforeach; ?>
    </ol>
</div>

<!-- Modal -->
<div class="modal fade" id="insert" tabindex="-1" aria-labelledby="insertLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-light border border-light ">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertLabel">Insert Devloper Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL ;?>/partner/insert" method="post">
        <div class="modal-body ">
          <div class="input-group mb-3">
            <span class="input-group-text">First and last name</span>
            <input name="firstName" type="text" aria-label="First name" class="form-control">
            <input name="lastName" type="text" aria-label="Last name" class="form-control">
          </div>
          <div class="mb-3">
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
          </div>
          <div class="mb-3">
            <input name="address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address">
          </div>
          <select name="devloper" class="form-select" aria-label="Default select example">
            <option value="Front End">Front End</option>
            <option value="Back End">Back End</option>
            <option value="Fullstack">Fullstack</option>
          </select>
          <div class="input-group mt-3">
            <span class="input-group-text">Story</span>
            <textarea name="story" class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Insert</button>
        </div>
      </form>
    </div>
  </div>
</div>
