<div id="carousel" class="carousel slide" data-interval="false">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{!! env('STATIC_URL') !!}/images/inter-es-najem-ucilnice-1.jpg" alt="Najem ucilnice z magnetno tablo in računalnikom." onclick="showImageModal(this.src);" data-toggle="modal" data-target="#image-modal">
    </div>
    <div class="item">
      <img src="{!! env('STATIC_URL') !!}/images/inter-es-najem-ucilnice-2.jpg" alt="Najem učilnice s 45 sedeži." onclick="showImageModal(this.src);" data-toggle="modal" data-target="#image-modal">
    </div>
    <div class="item">
      <img src="{!! env('STATIC_URL') !!}/images/inter-es-najem-ucilnice-3.jpg" alt="Najem učilnice s projektorjem in platnom." onclick="showImageModal(this.src);" data-toggle="modal" data-target="#image-modal">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span aria-hidden="true">
      <div class="triangle-outer left-triangle">
        <div class="triangle-inner"></div>
      </div>
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span aria-hidden="true">
      <div class="triangle-outer right-triangle">
        <div class="triangle-inner"></div>
      </div>
    </span>
    <span class="sr-only">Next</span>
  </a>
</div>
