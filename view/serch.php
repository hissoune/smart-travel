<?php





    // Display the search results or handle them as needed
    if (!empty($schedueles)) { ?>
        <section>
         <div class="container shadow ">

       <table class="table-bordered w-100 mt-3 mb-3 ">
        <thead>
            <tr>
            
                <td>date</td>
                <td>departuretime</td>
                <td>arrivaltime</td>
                <td>availableseats</td>
                <td>price</td>
                <td>bus_id</td>
                <td>startcity</td>
                <td>endcity</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
      <?php  foreach ($schedueles as $schedule) { ?>
        <tr>
        
          <td><?= $schedule['date']; ?></td>
          <td><?= $schedule['departuretime']; ?></td>
          <td><?= $schedule['arrivaltime']; ?></td>
          <td><?= $schedule['availableseats']; ?></td>
          <td><?= $schedule['price']; ?></td>
          <td><?= $schedule['bus_id']; ?></td>
          <td><?= $schedule['startcity']; ?></td>
          <td><?= $schedule['endcity']; ?></td>
         
           
        <?php  }?>
        </tr>
           
           </tbody>
          </table>
          </div>
   </section>

   <?php } else {
        echo "No schedules found for the specified criteria.";
    }


         ?>
         
          
       
          
                

         