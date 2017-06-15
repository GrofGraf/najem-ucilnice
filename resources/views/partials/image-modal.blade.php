<div id="image-modal" class="modal fade" role="dialog">
  <span type="button" class="close" data-dismiss="modal">&times;</span>
  <div class="modal-dialog">
    <img class="modal-content" id="image">
    <div id="caption">
      <div onclick="selectImage(this, 0)">
        <img src="{!! env('STATIC_URL') !!}/images/thumbnails/najem-ucilnice-tabla.jpg">
      </div>
      <div onclick="selectImage(this, 1)">
        <img src="{!! env('STATIC_URL') !!}/images/thumbnails/najem-ucilnice-od-zadaj.jpg">
      </div>
      <div onclick="selectImage(this, 2)">
        <img src="{!! env('STATIC_URL') !!}/images/thumbnails/najem-ucilnice-od-spredaj.jpg">
      </div>
    </div>
  </div>
</div>
