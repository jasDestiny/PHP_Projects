<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Apply E-Pass Online</title>
</head>
<body>
<h3>D.Vishal 18MIS0218</h3>
<form action="processit.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name</label>
      <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="Eg Mark" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Age</label>
      <input name="age" type="text" class="form-control" id="validationDefault02" placeholder="Eg 20" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Sex</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input name="sex" type="text" class="form-control" id="validationDefaultUsername" placeholder="Male / Female / TG / Genderless / I don't wish to specify" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Place from</label>
      <input name="from" type="text" class="form-control" id="validationDefault03" placeholder="Eg Chennai" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Place to</label>
      <input name="to" type="text" class="form-control" id="validationDefault03" placeholder="Eg Pondicherry" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Purpose</label>
      <input name="purpose" type="textarea" class="form-control" id="validationDefault04" placeholder="Purpose" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Return date</label>
      <input name="date" type="text" class="form-control" id="validationDefault05" placeholder="format dd/mm/yyyy" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Upload Proof</label>
      <input name="file" type="file" placeholder="Select file" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Accompanying members</label>
      <input name="members" type="text" class="form-control" id="validationDefault05" placeholder="Members count" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>