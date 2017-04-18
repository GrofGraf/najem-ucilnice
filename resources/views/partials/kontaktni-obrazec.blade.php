<form id="form" onsubmit="event.preventDefault()">
  <input type="hidden" id="token" value="{!! csrf_token() !!}">
  <div>
    <label for="name">Ime in priimek</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div>
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div>
    <label for="type">Vrsta najema</label>
    <select class="form-control" name="type" required>
      <option value="Poldnevni najem učilnice">Poldnevni najem</option>
      <option value="Celodnevni najem učilnice">Celodnevni najem</option>
      <option value="Večdnevni najem učilnice">Večdnevni najem</option>
      <option value="Dolgoročni najem učilnice">Dolgoročni najem</option>
    </select>
  </div>
  <div>
    <label for="message">Sporočilo</label>
    <textarea class="form-control" name="message" rows="10" required></textarea>
  </div>
  <div>
    <button type="submit" class="btn btn-primary btn-block btn-lg" id="kontakt" onclick="sendEnquiry()">Kontakt</button>
  </div>
</form>

<div id="success-message" class="success-message not-visible hidden-opacity">
  <h1>Uspelo nam je!!</h1>
</div>
