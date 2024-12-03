<?php 
  session_start(); 

  // Redirect if user is not logged in
  if (!isset($_SESSION['fullname'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: home.php');
  }

  // Logout process
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['fullname']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapid Reach</title>
    <link rel="stylesheet" href="/RapidReach_Web/css/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .card {
            position: relative;
            border: 1px solid #ff4444;
            padding: 10px;
            margin: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-number {
            font-size: 1.5em;
            color: #ff4444;
            cursor: pointer;
            transition: color 0.3s ease;
            justify-content: center;
        }

        
        .card-number:hover {
            color: #ff4444;
        }

        .card-details {
            font-size: 0.9em;
            background-color: #d9534f;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            display: none; 
        }

       
        .hotline-cards {
            display: flex;
            flex-wrap: wrap;
        }

        .card-wrapper {
            position: relative;
            flex: 1 0 21%; 
            margin: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Rapid Reach</div>
    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="hotlines.php">Hotlines</a></li>
        <li><a href="procedures.php">Procedures</a></li>
    </ul>
    <a href="?logout=true" class="logout-btn">Logout</a> <!-- Logout button -->
</div>

<!-- Featured Hotlines Section -->
<div class="procedures-section">
    <h2 class="procedures-title">Featured Hotlines</h2>
    <div class="hotline-cards">
        <!-- Card 1: Fire Department -->
        <div class="card-wrapper">
            <div class="card">
                <img src="/RapidReach_Web/images/pnpimg.jpg" alt="Fire Department" class="card-image">
                <div class="card-title">LAGUNA POLICE PO</div>
                <div class="card-number" onclick="toggleDescription(0)">501-5971</div>
                <div class="card-description">

                </div>
                <div class="card-details" id="details-0">
                    <p><strong>Response Time:</strong> Immediate response for emergencies such as crimes in progress.</p>
                    <p><strong>What to Report:</strong> Criminal activities, suspicious behavior, and emergencies like theft or assault.</p>
                    <p><strong>Additional Services:</strong> Police also respond to accidents, missing persons, and public disturbances.</p>
                </div>
            </div>
        </div>

        <!-- Card 2: Police Department -->
        <div class="card-wrapper">
            <div class="card">
                <img src="/RapidReach_Web/images/bfpimg.jpg" alt="Police Department" class="card-image">
                <div class="card-title">BFP STA CRUZ</div>
                <div class="card-number" onclick="toggleDescription(1)">808-1382</div>
                <div class="card-description">
                    
                </div>
                <div class="card-details" id="details-1">
                    <p><strong>Response Time:</strong> Typically 5-10 minutes depending on location.</p>
                    <p><strong>What to Report:</strong> Details of the fire (location, size, and cause if known), and if there are any trapped individuals.</p>
                    <p><strong>Additional Services:</strong> Firefighters also assist with rescue operations and hazardous material incidents.</p>
                </div>
            </div>
        </div>

        <!-- Card 3: Medical Emergency -->
        <div class="card-wrapper">
            <div class="card">
                <img src="/RapidReach_Web/images/lrimg.jpg" alt="Medical Emergency" class="card-image">
                <div class="card-title">STA CRUZ RESCUE</div>
                <div class="card-number" onclick="toggleDescription(2)">523-1944</div>
                <div class="card-description">
                    
                </div>
                <div class="card-details" id="details-2">
                    <p><strong>Response Time:</strong> Immediate response with paramedics on-site.</p>
                    <p><strong>What to Report:</strong> Type of emergency (e.g., heart attack, injury), patient's condition, and location.</p>
                    <p><strong>Additional Services:</strong> Emergency medical teams will provide immediate care and transportation to the hospital if needed.</p>
                </div>
            </div>
        </div>

        <!-- Card 4: Poison Control -->
        <div class="card-wrapper">
            <div class="card">
                <img src="/RapidReach_Web/images/rcimg.jpg" alt="Poison Control" class="card-image">
                <div class="card-title">RED CROSS</div>
                <div class="card-number" onclick="toggleDescription(3)">501-1114</div>
                <div class="card-description">
                    
                </div>
                <div class="card-details" id="details-3">
                    <p><strong>Response Time:</strong>Immediate response, with teams mobilized quickly for disaster relief, blood donations, and emergency medical services. In cases of life-threatening situations, assistance is usually provided within minutes.</p>
                    <p><strong>What to Report:</strong>Nature of the emergency (e.g., disaster, injury, or health crisis).</p>
                    <p><strong>Additional Services:</strong> Disaster Response: Aid during floods, earthquakes, and other natural calamities.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="procedures-section">
    <h2 class="procedures-title">Basic Emergency Procedures Links</h2>
    <div class="guides-section">
        <!-- Guide 1: Fire Safety Procedure -->
        <div class="card">
            <div class="card-title">
                <i class="fas fa-fire"></i> Fire Safety Procedure
            </div>
            <div class="card-description">
                Learn how to act quickly and safely during a fire emergency. Understand the key steps to evacuate and minimize risks.
            </div>
            <div class="related-links">
                <p class="related-links-title">Related Links:</p>
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=UvyDdWMZm40" target="_blank">10 Fire Safety Tips</a></li>
                    <li><a href="https://www.youtube.com/watch?v=GVBamXXVD30" target="_blank">Using a Fire Extinguisher</a></li>
                </ul>
            </div>
            <a href="https://www.youtube.com/watch?v=jFQ7FioW638" class="guide-button" target="_blank">Watch Video</a>
        </div>
        <!-- Guide 2: CPR Basics -->
        <div class="card">
            <div class="card-title">
                <i class="fas fa-heartbeat"></i> CPR Basics
            </div>
            <div class="card-description">
                Step-by-step instructions on performing CPR effectively. A lifesaving skill to use during emergencies.
            </div>
            <div class="related-links">
                <p class="related-links-title">Related Links:</p>
                <ul>
                    <li><a href="https://youtube.com/watch?v=2PngCv7NjaI" target="_blank">CPR Techniques</a></li>
                    <li><a href="https://www.youtube.com/watch?v=zk8hO1JxSac" target="_blank">When to Use CPR</a></li>
                </ul>
            </div>
            <a href="https://www.youtube.com/watch?v=-NodDRTsV88" class="guide-button" target="_blank">Watch Video</a>
        </div>
        <!-- Guide 3: Earthquake Preparedness -->
        <div class="card">
            <div class="card-title">
                <i class="fas fa-globe-americas"></i> Earthquake Preparedness
            </div>
            <div class="card-description">
                Understand how to stay safe during an earthquake. Learn about survival strategies and emergency kits.
            </div>
            <div class="related-links">
                <p class="related-links-title">Related Links:</p>
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=XAOV53VeuBw" target="_blank">Earthquake Safety Tips</a></li>
                    <li><a href="https://www.youtube.com/watch?v=vYMdk0mTjz8" target="_blank">Essential Emergency Kits</a></li>
                </ul>
            </div>
            <a href="https://www.youtube.com/watch?v=gFphEEAxQLA" class="guide-button" target="_blank">Watch Video</a>
        </div>
    </div>
</div>
<!-- Footer -->
<div class="footer">
    <div class="footer-content">
        <div class="contact-info">
            <p>Contact us at <a href="mailto:support@example.com" style="color: #d9534f;">support@example.com</a></p>
        </div>
        <ul class="social-icons">
            <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <div class="copyright">
            <p>&copy; 2024 Rapid Reach. All Rights Reserved.</p>
        </div>
    </div>
</div>

<script>
    function toggleDescription(index) {
        // Hide all the card details
        const allDetails = document.querySelectorAll('.card-details');
        allDetails.forEach((detail, i) => {
            if (i !== index) {
                detail.style.display = "none"; // Hide other details
            }
        });

        // Toggle the clicked card's details
        const details = document.getElementById(`details-${index}`);
        details.style.display = (details.style.display === "block") ? "none" : "block";
    }
</script>

</body>
</html>
