






<form action="index.php?action=filter_bycomp" class="formfilter mt-3 " id="filterform" method="GET">
                
                <div class="Col-xl-12 col-lg-12 col-md-2 col-sm-3 col-4">
            
                 <select name="company_name" id="companyname" class="col-12 p-2 rounded">
                 <?php foreach ($comp_bus_slct as $comp) { ?>
                    
                 <option value="<?= $comp['companyname']; ?>"><?= $comp['companyname']; ?></option>
                 <?php } ?>
                  </select>
                </div>
                <div class="Col-xl-12 col-lg-12 col-md-12 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white mt-2">by company</button>
                </div>
            </form>

                    <div class="row">
            <form action="index.php?action=filter_byprice" class="formfilter mt-3 col-6 d-flex " id="filter_byprice" method="GET">
                
                <input type="checkbox" name="by_price">
                <div class="Col-xl-12 col-lg-12 col-md-12 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white px-3 mt-2">by price </button>
                </div>
            </form>
            <form action="index.php?action=filter_morning" class="formfilter mt-3 col-6 d-flex" id="filter_morning" method="GET">
                
                <input type="checkbox" name="morning">
                <div class="Col-xl-12 col-lg-12 col-md-12 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white mt-2">morning </button>
                </div>
            </form>
            <form action="index.php?action=filter_evning" class="formfilter mt-3 col-6 d-flex" id="filter_evning" method="GET">
                
                <input type="checkbox" name="evning" >
                <div class="Col-xl-12 col-lg-12 col-md-12 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white px-4 mt-2">evning</button>
                </div>
            </form>
            <form action="index.php?action=filter_night" class="formfilter mt-3 col-6 d-flex" id="filter_night" method="GET">
                
                <input type="checkbox" name="night">
                <div class="Col-xl-11 col-lg-12 col-md-12 col-sm-3 col-4">
                    <button type="submit" class="btn btn-warning rounded text-white px-4 mt-2">night </button>
                </div>
            </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>

                $(document).ready(function () {
        // Intercept form submission
        $('#filterform').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting traditionally

            // Get form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                type: 'GET',
                url: 'index.php?action=filter_bycomp',
                data: formData,
                success: function (response) {
                    // Update the content of the searchResults div with the response
                    $('#searchResults').html(response);
                }
            });
        });
    });
            </script>

<script>

$(document).ready(function () {
// Intercept form submission
$('#filter_byprice').submit(function (e) {
e.preventDefault(); // Prevent the form from submitting traditionally

// Get form data
var formData = $(this).serialize();

// AJAX request
$.ajax({
type: 'GET',
url: 'index.php?action=filter_byprice',
data: formData,
success: function (response) {
    // Update the content of the searchResults div with the response
    $('#searchResults').html(response);
}
});
});
});
</script>

<script>

$(document).ready(function () {
// Intercept form submission
$('#filter_morning').submit(function (e) {
e.preventDefault(); // Prevent the form from submitting traditionally

// Get form data
var formData = $(this).serialize();

// AJAX request
$.ajax({
type: 'GET',
url: 'index.php?action=filter_morning',
data: formData,
success: function (response) {
    // Update the content of the searchResults div with the response
    $('#searchResults').html(response);
}
});
});
});
</script>

<script>

$(document).ready(function () {
// Intercept form submission
$('#filter_evning').submit(function (e) {
e.preventDefault(); // Prevent the form from submitting traditionally

// Get form data
var formData = $(this).serialize();

// AJAX request
$.ajax({
type: 'GET',
url: 'index.php?action=filter_evning',
data: formData,
success: function (response) {
    // Update the content of the searchResults div with the response
    $('#searchResults').html(response);
}
});
});
});
</script>

<script>

$(document).ready(function () {
// Intercept form submission
$('#filter_night').submit(function (e) {
e.preventDefault(); // Prevent the form from submitting traditionally

// Get form data
var formData = $(this).serialize();

// AJAX request
$.ajax({
type: 'GET',
url: 'index.php?action=filter_night',
data: formData,
success: function (response) {
    // Update the content of the searchResults div with the response
    $('#searchResults').html(response);
}
});
});
});
</script>
        