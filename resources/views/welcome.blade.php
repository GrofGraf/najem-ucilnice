<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Najem ucilnic</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
      @include('partials.navbar')
      <div class="main-image">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              @include('partials.opis-storitve')
            </div>
            <div class="col-md-6">
              @include('partials.kontaktni-obrazec')
            </div>
          </div>
        </div>
        @include('partials.image-overlay')
      </div>
      <div id="cenik">
        @include('partials.cenik')
      </div>
      <div id="slike" style="position:relative;">
        <!--div align="middle" style="position:absolute;z-index:1;width:100%;">
          <div class="triangle-down inverse"></div>
        </div>-->
        @include('partials.slike')
        @include('partials.image-overlay')
      </div>
      <div id="koledar">
        @include('partials.koledar')
      </div>
      <div id="o-nas" style="position:relative;background-color:green;">
        <!--<div align="middle" style="position:relative;z-index:1;">
          <div class="triangle-down inverse"></div>
        </div>-->
        @include('partials.kontaktne-informacije')
        @include('partials.google-map')
      </div>
      @include('partials.footer')
      @include('partials.image-modal')

      <script src="/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key={!! env('GOOGLE_MAPS_KEY')!!}&callback=myMap"></script>
    </body>
</html>
