<?php include 'head.php'; ?>
<?php include 'view\nav.php'; ?>
   <h1 class=" text-center fs-2"> <strong>add your buses  </strong> </h1>
<div class="container    bg-success-subtle mt-5">
<form action="index.php?action=insert_buses" method="POST"  class="row g-3">
  <div class="col-md-6">
    <label for="busnumber" class="form-label">bus number</label>
    <input type="number" class="form-control" id="busnumber" name="busnumber">
  </div>
  <div class="col-md-6">
    <label for="licenseplate" class="form-label">licenseplate</label>
    <input type="text" class="form-control" id="licenseplate" name="licenseplate">
  </div>
  <div class="col-6">
    <label for="capacity" class="form-label">capacity</label>
    <input type="number" class="form-control" id="capacity" placeholder="capacity" name="capacity">
  </div>
  
  <div class="col-md-6">
    <label for="companyname" class="form-label">company name</label>
    <input type="text" class="form-control" id="companyname" name="companyname">
  </div>
  
  
  <button type="submit" class="btn btn-success">Sign in</button>
  </div>
  
   
  
</form>
</div>