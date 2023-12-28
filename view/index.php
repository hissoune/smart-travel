





<?php include 'head.php'; ?>
   


<section >
         <div class="banner-main">
           
            <div class="container">
               <div>
                  <h1 >moroco<br><strong class="white">Amazing Tour</strong></h1>
                  
                  <div class="container">
                     <form class="main-form">
                        <h3>Find Your Tour</h3>
                        <div class="row">
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Keywords</label>
                                    <input class="form-control" placeholder="" type="text" name="">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >ville de depart</label>
                                    
                                    <select class="form-control" name="Any">
                                    <option>Any</option>
                                       <?php foreach ($villes as $ville){ ?>
                                      
                                       <option><?=$ville['cityname'];  ?></option>
                                      <?php }?>
                                    </select>
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >ville de destination</label>
                                    <select class="form-control" name="Any">
                                    <option>Any</option>
                                       <?php foreach ($villes as $ville){ ?>
                                      
                                       <option><?=$ville['cityname'];  ?></option>
                                      <?php }?>
                                    </select>
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Duration</label>
                                    <input class="form-control" placeholder="Any" type="text" name="Any">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Date</label>
                                    <input class="form-control" placeholder="Any" type="date" name="Any">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Max Price</label>
                                    <input class="form-control" placeholder="00.0" type="text" name="00.0">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <a class="btn btn-warning rounded text-white" href="#">search</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
</body>
</html>