<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Hotlines</title>
    <link rel="stylesheet" href="/RapidReach_Web/css/hotlines.css"> <!-- Link to shared CSS file -->
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Rapid Reach</div>
    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="hotlines.rep">Hotlines</a></li>
        <li><a href="procedures.php">Procedures</a></li>
    </ul>
    <div class="emergency-icon" onclick="toggleMenu()">&#9888;</div> <!-- Warning symbol -->
</div>

<!-- Header Section -->
<div class="header">
    <h1>Hotlines</h1>
</div>

<!-- Hotline Grid Section -->
<div class="hotline-grid">
    <!-- Hotline Card 1: Fire Department -->
    <div class="hotline-card">
        <div class="hotline-title">Bureau of Fire Protection</div>
        <div class="hotline-description">For fire emergencies, call immediately.</div>
        <div class="hotline-number">808-1382/808-2278</div>
    </div>

    <!-- Hotline Card 2: Police Department -->
    <div class="hotline-card">
        <div class="hotline-title">Laguna Police PO</div>
        <div class="hotline-description">For crimes and immediate police assistance.</div>
        <div class="hotline-number">501-5971/501-1544/div></div>
    </div>

    <!-- Hotline Card 3: Poison Control -->
    <div class="hotline-card">
        <div class="hotline-title">LDH Rescue</div>
        <div class="hotline-description">For medical emergencies and urgent healthcare.</div>
        <div class="hotline-number">523-1944</div>
    </div>

    <!-- Hotline Card 4: Ambulance -->
    <div class="hotline-card">
        <div class="hotline-title">Red Cross</div>
        <div class="hotline-description">Nature of the emergency (e.g., disaster, injury, or health crisis).</div>
        <div class="hotline-number">501-1114</div>
    </div>

    <!-- Hotline Card 5: Disaster Relief -->
    <div class="hotline-card">
        <div class="hotline-title">Disaster Relief</div>
        <div class="hotline-description">For assistance during natural disasters and recovery.</div>
        <div class="hotline-number">557-1047</div>
    </div>

    <!-- Hotline Card 6: Mental Health Support -->
    <div class="hotline-card">
        <div class="hotline-title">PDDRMO</div>
        <div class="hotline-description"> Support and implement disaster risk reduction and management programs in the province.</div>
        <div class="hotline-number">501-4672</div>
    </div>
</div>

<script>
    // Function to toggle the menu visibility
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
</script>

</body>
</html>
