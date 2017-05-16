<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
      <title>Najem ucilnic</title>
      <link rel="stylesheet" href="/css/main.css">
      <style>
        .fc-day-header{
          background-color:rgba(157,137,186,1);
        }
        .fc-event{
          border-color:rgba(157,137,186,1);
          background-color:rgba(157,137,186,1);
        }
        .fc-left{
          margin-bottom:10px;
        }
        .fc-day-grid-event .fc-time {
          font-weight: normal;
        }
      </style>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/sl.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key={!! env('GOOGLE_MAPS_KEY')!!}&callback=myMap"></script>
    </body>
</html>
