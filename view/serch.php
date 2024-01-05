
<style>

    .contserched{
        background-color: rgba(255, 230, 200, 0.3);
     }

     
</style>

<?php





    // Display the search results or handle them as needed
    if (!empty($schedueles)) { ?>
        <section>
         <div class="container shadow ">
         <form action="index.php?action=get_filter" id="get_filter" method="GET">
            <button type="submit" class="btn btn-warning">filter</button>
         </form>
         <div class="row cont ">
         <div class="col-3 mt-5 mb-3 " id="get_form"> </div>
            
         <div class="col-9" > 
       <div class=" row  mt-5   contserched ">
       <h1 class="text-center  fs-2 text-warning shadow">RESULTAS DE SEARCH</h1>
      <?php  foreach ($schedueles as $schedule) { 
        echo count($schedueles);
        ?>
       
    
        <div class="card shadow col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mx-4 mt-4 mb-4" style="width: 20rem;">
    <img src="view/images/<?= $ScheduleDAO->get_companyimg_byid($schedule->getBusId()); ?>" class="card-img-top" alt="company img">
    <div class="card-body">
        <h5 class="card-title"><?= $ScheduleDAO->get_companyname_byid($schedule->getBusId()); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $schedule-> getStartCity(); ?> to <?= $schedule->getEndCity(); ?></h6>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Date:</strong> <?= $schedule->getDate(); ?></li>
            <li class="list-group-item"><strong>Departure Time:</strong> <?= $schedule->getDepartureTime(); ?></li>
            <li class="list-group-item"><strong>Arrival Time:</strong> <?= $schedule-> getArrivalTime(); ?></li>
            <li class="list-group-item"><strong>Available Seats:</strong> <?= $schedule->getAvailableSeats(); ?></li>
            <li class="list-group-item"><strong>Price:</strong> <?= $schedule->getPrice(); ?></li>
            <li class="list-group-item"><strong>License Plate:</strong> <?= $ScheduleDAO->get_buslac_byid($schedule->getBusId()); ?></li>
        </ul>
    </div>
</div>



           
        <?php  }?>
        </div>
           
          
         
          
   

   <?php } else {?>
    <div class="container mb-5">
  <div class="alert alert-warning" role="alert">
    No schedules found for the specified criteria.
  </div>
</div>
        <?php }


         ?>
         </div>
         </div>
         </div>

        
         </section>
        
         <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    
    $(document).ready(function () {
        // Intercept form submission
        $('#get_filter').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting traditionally

            // Get form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                type: 'GET',
                url: 'index.php?action=get_filter',
                data: formData,
                success: function (response) {
                    // Update the content of the searchResults div with the response
                    $('#get_form').html(response);
                }
            });
        });
    });


    
</script>
          
       
          
                

         