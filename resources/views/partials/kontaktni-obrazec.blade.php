<div id="kontakt">
  <div align="middle">
      <h1>NAJEM</h1>
      <p>Ob dolgoročnem najemu se cena določi posebej. Glede na predvideno število ur najema, se priznavajo določeni popusti.</p>
      <p>Pošljite povpraševanje.</p>
    <div class="triangle-outer">
      <div class="triangle-inner"></div>
    </div>
  </div>
  <div id="kontakt-container">
    <form id="form" onsubmit="event.preventDefault()">
      <input type="hidden" id="token" value="{!! csrf_token() !!}">
      <div class="row">
        <div class="col-md-6">
          <div>
            <label for="name">IME in PRIIMEK</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div>
            <label for="email">E-MAIL</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div>
            <label for="type">VRSTA NAJEMA</label>
            <select class="form-control" name="type" required>
              <option value="Poldnevni najem učilnice">Poldnevni najem</option>
              <option value="Celodnevni najem učilnice">Celodnevni najem</option>
              <option value="Večdnevni najem učilnice">Večdnevni najem</option>
              <option value="Dolgoročni najem učilnice">Dolgoročni najem</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <label for="message">SPOROČILO</label>
          <textarea class="form-control" name="message" required></textarea>
        </div>
      </div>
      <div align="middle">
        <button type="submit" class="btn btn-primary btn-lg" onclick="sendEnquiry()">KONTAKT</button>
      </div>
    </form>

    <div id="success-message" class="success-message not-visible hidden-opacity" align="middle">
      <h1>Hvala za vaše sporočilo <br> <small>Odgovorili vam bomo v najkrajšem možnem času.</small></h1>
      <button type="submit" class="btn btn-primary btn-lg" onclick="backToContact()">NAZAJ</button>
    </div>
  </div>
</div>
