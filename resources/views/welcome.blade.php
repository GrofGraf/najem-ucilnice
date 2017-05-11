<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
      <title>Najem ucilnic</title>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:400,700&&subset=latin,latin-ext">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
      @include('partials.navbar')
      <div class="main-image">
        <div class="image-overlay">
          <div class="container" align="middle">
            <h1>NAJEM UČILNICE</h1>
            <div class="triangle-outer">
              <div class="triangle-inner"></div>
            </div>
          </div>
        </div>
      </div>
      <div align="center" id="opis-storitve">
        @include('partials.opis-storitve')
      </div>
      <div class="container">
        @include("partials.kontaktni-obrazec")
      </div>
      <div id="cenik">
        @include('partials.cenik')
      </div>
      <div id="slike">
        @include('partials.slike')
      </div>
      <div id="koledar">
        @include('partials.koledar')
      </div>
      <div id="o-nas">
        @include('partials.kontaktne-informacije')
      </div>
      @include('partials.footer')
      @include('partials.image-modal')

      <script src="/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key={!! env('GOOGLE_MAPS_KEY')!!}&callback=myMap"></script>
    </body>
</html>
