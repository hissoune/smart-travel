





<?php include 'head.php'; ?>
<?php include 'view\nav.php'; ?>
   


<section >
         <div class="banner-main">
         <h1 class="bg-body-secondary p-4  mb-5 w-100   text-success fs-1 text-center">moroco<br><strong class="text-warning fs-2 text-center"><h1>Amazing Tour</h1> </strong></h1>

            <div class="container">
               <div class="  p-4 ">
                  
                  <div class="container">
                     <form class="main-form" id="searchForm" action="index.php?action=serch" method="GET">
                        
                        <div class="row">
                           <div class="col-md-9">
                              <div class="row">
                                 
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >ville de depart</label>
                                    
                                    <select class="form-control" name="departureCity">
                                    
                                       <?php foreach ($villes as $ville){ ?>
                                      
                                       <option  ><?=$ville['cityname'];  ?></option>
                                      <?php }?>
                                    </select>
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >ville de destination</label>
                                    <select class="form-control" name="arrivalCity">
                                    
                                       <?php foreach ($villes as $ville){ ?>
                                      
                                       <option ><?=$ville['cityname'];  ?></option>
                                      <?php }?>
                                    </select>
                                 </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                 <label for="date">dete</label>
                                 <input class="form-control" type="date" id="date" name="date_trip">
                                </div>
                                 
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >number of peaple</label>
                                    <input class="form-control" placeholder="how much peaple" type="number" name="num_papl">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <button type="submit" class="btn btn-warning rounded text-white" >search</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div id="searchResults"></div>
      </section>
  
      
   
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Intercept form submission
        $('#searchForm').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting traditionally

            // Get form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                type: 'GET',
                url: 'index.php?action=serch',
                data: formData,
                success: function (response) {
                    // Update the content of the searchResults div with the response
                    $('#searchResults').html(response);
                }
            });
        });
    });
</script>
                
<?php include 'footer.php'; ?>
         
</body>
</html>
