<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Coordinates</title>
    <script>
        function validateInput(input) {
            var pattern = /^\d*\.?\d*$/; // Regular expression to match numbers (including decimal points)
            if (!pattern.test(input.value)) {
                alert("Please enter only numbers.");
                input.value = ''; // Clear the input field
            }
        }
    </script>
    <script>
        function validateForm() {
            var lon1 = parseFloat(document.getElementById("lon1").value);
            var lat1 = parseFloat(document.getElementById("lat1").value);
            var lon2 = parseFloat(document.getElementById("lon2").value);
            var lat2 = parseFloat(document.getElementById("lat2").value);
            var lon3 = parseFloat(document.getElementById("lon3").value);
            var lat3 = parseFloat(document.getElementById("lat3").value);
            var lon4 = parseFloat(document.getElementById("lon4").value);
            var lat4 = parseFloat(document.getElementById("lat4").value);

            if (isNaN(lon1) || isNaN(lat1) || isNaN(lon2) || isNaN(lat2) ||
                isNaN(lon3) || isNaN(lat3) || isNaN(lon4) || isNaN(lat4) ||
                !isFinite(lon1) || !isFinite(lat1) || !isFinite(lon2) || !isFinite(lat2) ||
                !isFinite(lon3) || !isFinite(lat3) || !isFinite(lon4) || !isFinite(lat4)) {
                alert("Longitude and latitude must be decimal numbers.");
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
</head>
<body>
<form action="process_coordinates.php" method="post" onsubmit="return validateForm()">
    <!-- Input fields for coordinates -->
    <label for="lon1">Longitude 1:</label>
    <input type="text" id="lon1" name="lon1" oninput="validateInput(this)"><br>
    <label for="lat1">Latitude 1:</label>
    <input type="text" id="lat1" name="lat1" oninput="validateInput(this)"><br>

    <label for="lon2">Longitude 2:</label>
    <input type="text" id="lon2" name="lon2" oninput="validateInput(this)"><br>
    <label for="lat2">Latitude 2:</label>
    <input type="text" id="lat2" name="lat2" oninput="validateInput(this)"><br>

    <label for="lon3">Longitude 3:</label>
    <input type="text" id="lon3" name="lon3" oninput="validateInput(this)"><br>
    <label for="lat3">Latitude 3:</label>
    <input type="text" id="lat3" name="lat3" oninput="validateInput(this)"><br>

    <label for="lon4">Longitude 4:</label>
    <input type="text" id="lon4" name="lon4" oninput="validateInput(this)"><br>
    <label for="lat4">Latitude 4:</label>
    <input type="text" id="lat4" name="lat4" oninput="validateInput(this)"><br>

    <!-- Add an input field for the user's email address -->
    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br>

    <!-- Submit button -->
    <input type="submit" value="Submit">
</form>


</form>
</body>
</html>
