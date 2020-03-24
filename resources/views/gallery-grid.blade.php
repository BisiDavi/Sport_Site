<div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
  <div class="col-md-4 col-sm-6 col-lg-3">
    <img class="w-50" src="assets/img/banner9.jpg" alt="" data-target="#carouselExample" data-slide-to="0">
  </div>
  <div class="col-md-4 col-sm-6 col-lg-3">
    <img class="w-50" src="assets/img/banner7.jpg" alt="" data-target="#carouselExample" data-slide-to="1">
  </div>
  <div class="col-md-4 col-sm-6 col-lg-3">
    <img class="w-50" src="assets/img/Banner1.png" alt="" data-target="#carouselExample" data-slide-to="2">
  </div>
</div>

<!-- modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-50" src="assets/img/banner9.jpg">
            </div>
            <div class="carousel-item">
              <img src="assets/img/banner7.jpg" alt="" class="d-block w-50">
            </div>
            <div class="carousel-item">
              <img src="assets/img/Banner1.png" alt="" class="d-block w-50">
            </div>
          </div>
          <a href="#carouselExample" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#carouselExample" class="carousel-control-next" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
    <!-- carousel markup -->
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">
        close
      </button>
    </div>
    </div>
  </div>
</div>