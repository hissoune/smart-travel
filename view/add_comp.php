<?php include 'head.php'; ?>
<?php include 'view\nav.php'; ?>
   <h1 class=" text-center fs-2"> <strong>add your company  </strong> </h1>
<div class="container    bg-success-subtle mt-5">
<form action="index.php?action=insert_companys" method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="companyname" class="form-label">company name</label>
    <input type="text" class="form-control" id="companyname" name="companyname">
  </div>
  <div class="col-md-6">
    <label for="short" class="form-label">short name</label>
    <input type="text" class="form-control" id="short" name="short">
  </div>
  <div class="col-6  ">
    <label for="imag_comp" class="form-label">company image</label>
    <input type="file" class="form-control" id="imag_comp"  name="imag_comp">
  </div>
  
  
  
  
  <button type="submit" class="btn btn-success">add company</button>
  </div>
  
   
  
</form>A
</div