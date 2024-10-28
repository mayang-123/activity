<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $service = htmlspecialchars($_POST['service']);
    echo "Thank you, $name! Your appointment for $service has been booked!";
} else {
    echo '
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="service">Select a Service:</label>
        <select id="service" name="service">
            <option value="Haircut">Haircut</option>
            <option value="Manicure">Manicure</option>
            <option value="Facial">Facial</option>
        </select><br>
        
        <button type="submit">Book Appointment</button>
    </form>';
}
?>
