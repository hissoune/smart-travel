<?php include 'view\head.php'; ?>
<?php include 'view\nav.php'; ?>
<div class="container mt-5">
    <h2 class="mb-4">Schedule Insert Form</h2>

    <form action="insert_schedule.php" method="POST">
        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="departuretime" class="form-label">Departure Time:</label>
            <input type="time" class="form-control" id="departuretime" name="departuretime" required>
        </div>

        <div class="mb-3">
            <label for="arrivaltime" class="form-label">Arrival Time:</label>
            <input type="time" class="form-control" id="arrivaltime" name="arrivaltime" required>
        </div>

        <div class="mb-3">
            <label for="availableseats" class="form-label">Available Seats:</label>
            <input type="number" class="form-control" id="availableseats" name="availableseats" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
    <label for="bus_id" class="form-label">Bus name:</label>
    <select class="form-select" id="bus_id" name="bus_id" required>
        
        <option value="" selected disabled>Select Bus</option>

        
        <?php
        foreach ($busList as $bus) {
            echo '<option value="' . $bus['id'] . '">' . $bus['bus_name'] . '</option>';
        }
        ?>
    </select>
</div>


        <div class="mb-3">
            <label for="startcity" class="form-label">Start City:</label>
            <input type="text" class="form-control" id="startcity" name="startcity" required>
        </div>

        <div class="mb-3">
            <label for="endcity" class="form-label">End City:</label>
            <input type="text" class="form-control" id="endcity" name="endcity" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>