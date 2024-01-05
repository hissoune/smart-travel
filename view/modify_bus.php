<?php include 'head.php'; ?>
<?php include 'view\nav.php'; ?>
   <h1 class=" text-center fs-2"> <strong>modify your bus  </strong> </h1>
<div class="container    bg-success-subtle mt-5">
<form action="index.php?action=modify_buses&id=<?= $id ;  ?>" method="POST"  class="row g-3">
  <div class="col-md-6">
    <label for="busnumber" class="form-label">bus number</label>
    <input type="number" class="form-control" id="busnumber" name="busnumber"  value="<?= $busnumber ;  ?>">
  </div>
  <div class="col-md-6">
    <label for="licenseplate" class="form-label">licenseplate</label>
    <input type="text" class="form-control" id="licenseplate" name="licenseplate" value="<?= $licenseplate ;  ?>">
  </div>
  <div class="col-6">
    <label for="capacity" class="form-label">capacity</label>
    <input type="number" class="form-control" id="capacity" placeholder="capacity" name="capacity" value="<?= $busnumber ;  ?>">
  </div>
  <div class="col-6">
    <input type="hidden" class="form-control" id="capacity" placeholder="capacity" name="id" value="<?= $Id ;  ?>">
  </div>
  
  <div class="col-md-6 ">
    <label for="companyname">company name</label>
    <select name="companyname" id="companyname"  class="col-12 p-2 rounded">
    <?php foreach ($comp_slct as $comp) { ?>
      <option value="<?= $comp->getId(); ?>"><?= $comp->getCompanyname(); ?></option>
    <?php } ?>
</select>

  </div>
  
  
  <button type="submit" class="btn btn-success">Sign in</button>
  </div>
  
   
  
</form>
</div>