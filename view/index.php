<?php include 'head.php'; ?>



<style>
  .serchfrm {
    background-image: url('view/images/bus_home.jpg');
    background-size: cover;
    /* Additional styles for clarity */
    margin: 0;
    padding: 0;
    height: 100%;
  }

  .tiltl{
   font-size: 30px;
  }
  .bfrm{
   background-color: rgba(255, 230, 10, 0.2);
  }
  .serch{
   margin-left: 100px;
  }
</style>

<section class="serchfrm">
   <div class="banner-main serch">
      <div class="tiltl ">
      <h1 class=" p-4   w-100   text-white text-center  "><strong>moroco</strong><br><strong
            class="text-warning  text-center">
            <h1>Amazing Tour</h1>
         </strong></h1>
         </div>
      <div class="container">
         <div class="  p-4 ">

            <div class="container w-50 bfrm p-3 rounded ">
               <div><h2 class="text-center text-dark mb-4"><strong>find your trips</strong> </h2></div>
               <form class="main-form" id="searchForm" action="index.php?action=search" method="POST">

                  <div class="row justify-content-center w-100">
                     

                           <div class="col-xl-5 col-lg-5 col-md-4 col-sm-6 col-12">
                              <label>ville de depart</label>

                              <select class="form-control" name="departureCity">

                                 <?php foreach ($villes as $ville) { ?>

                                    <option>
                                       <?= $ville['cityname']; ?>
                                    </option>
                                 <?php } ?>
                              </select>
                           </div>
                           <div class="col-xl-5 col-lg-5 col-md-3 col-sm-6 col-12">
                              <label>ville de destination</label>
                              <select class="form-control" name="arrivalCity">

                                 <?php foreach ($villes as $ville) { ?>

                                    <option>
                                       <?= $ville['cityname']; ?>
                                    </option>
                                 <?php } ?>
                              </select>
                           </div>
                           <div class="row justify-content-center">
                           <div class="col-xl-5 col-lg-5 col-md-3 col-sm-6 col-12">
                              <label for="date">dete</label>
                              <input class="form-control" type="date" id="date" name="date_trip">
                           </div>

                           <div class="col-xl-5 col-lg-5 col-md-3 col-sm-6 col-12">
                              <label>number of peaple</label>
                              <input class="form-control" placeholder="how much peaple" type="number" name="num_papl">
                           </div>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-2 col-sm-12 col-12">
                        <button type="submit" class="btn btn-warning rounded text-white mt-4">search</button>
                        </div> 
                     </div>
                      
               </form>
           
         </div>
      </div>
   </div>
   <div  >
</div>
<div class=" w-100 " id="searchResults"></div>

</section>

<div id="about" class="about container w-75">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text-center">
                    <h2 class="fs-3 mb-4 mt-4"><strong>About Our Travel Agency</strong></h2>
                    <p class="lead">A fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-box">
                        <p class="mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <p class="mb-4">If you are going to use a passage of Lorem Ipsum, you need to be sure there.</p>
                        <a href="#" class="btn btn-warning">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="palne-img-area">
                        <img src="view/images/046b3884bbd9d16ba053a80c95b8f295.jpg" alt="images" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




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
            type: 'POST',
            url: 'index.php?action=search',
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