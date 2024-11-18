  <!-- Hero Section -->
  <section class="bg-light py-5 text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Welcome to My Website</h1>
      <p class="lead">
        Hello World, My Name is <b><?= $data["name"] ;?></b><br/>
        <?= $data["email"];?>
      </p>
      <a href="#" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="container py-5">
    <div class="row text-center">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://source.unsplash.com/300x200/?service" class="card-img-top" alt="Service 1">
          <div class="card-body">
            <h5 class="card-title">Service One</h5>
            <p class="card-text">Professional and reliable service that meets your needs.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://source.unsplash.com/300x200/?quality" class="card-img-top" alt="Service 2">
          <div class="card-body">
            <h5 class="card-title">Service Two</h5>
            <p class="card-text">Exceptional quality guaranteed in every interaction.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://source.unsplash.com/300x200/?support" class="card-img-top" alt="Service 3">
          <div class="card-body">
            <h5 class="card-title">Service Three</h5>
            <p class="card-text">24/7 support to help you anytime, anywhere.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h2 class="mb-5">What Our Clients Say</h2>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Absolutely fantastic service, highly recommend!"</p>
            <footer class="blockquote-footer">Client 1</footer>
          </blockquote>
        </div>
        <div class="col-lg-4 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"A seamless experience from start to finish."</p>
            <footer class="blockquote-footer">Client 2</footer>
          </blockquote>
        </div>
        <div class="col-lg-4 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"The team went above and beyond for us."</p>
            <footer class="blockquote-footer">Client 3</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="text-center py-5 bg-primary text-white">
    <div class="container">
      <h2>Ready to make the most of our services?</h2>
      <a href="#" class="btn btn-light btn-lg mt-3">Contact Us</a>
    </div>
  </section>