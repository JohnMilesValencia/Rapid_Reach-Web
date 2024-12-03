<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Procedures & Guides</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="/RapidReach_Web/css/procedures.css">

    <!-- Internal Styles -->
    <style>
        .hidden {
            display: none;
        }
        
        /* Styling for link buttons */
        .link-button {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px 0;
            color: white;
            background-color: #007BFF;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .link-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">Rapid Reach</div>
        <nav>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="hotlines.php">Hotlines</a></li>
                <li><a href="procedures.php">Procedures</a></li>
            </ul>
        </nav>
        <div class="emergency-icon" onclick="toggleMenu()">&#9888;</div>
    </header>

    <!-- Main Section -->
    <main class="procedures-section">
        <h2>Emergency Procedures & Guides Access</h2>
        <p>Select a scenario to view detailed, step-by-step instructions for handling various emergencies.</p>

        <!-- Scenario Buttons -->
        <section class="scenario-selection">
            <button onclick="showGuide('cpr')">CPR and First Aid</button>
            <button onclick="showGuide('fire')">Fire Safety and Evacuation</button>
            <button onclick="showGuide('earthquake')">Earthquake / Natural Disaster Safety</button>
            <button onclick="showGuide('mental_health')">Dealing with Mental Health Crises</button>
        </section>

        <!-- Guide Details -->
        <section id="guide-details">
            <!-- CPR Guide -->
            <article id="cpr" class="guide hidden">
                <h3>CPR</h3>
                <p><strong>Step-by-Step CPR Procedure:</strong></p>
                <ol>
                    <li>Check for safety.</li>
                    <li>Ensure the scene is safe for both you and the victim.</li>
                    <li>Tap the person’s shoulders and shout, "Are you okay?" Look for signs of breathing or movement.</li>
                    <li>Call emergency services and request an AED if available.</li>
                    <li>Perform chest compressions at a rate of 100–120 per minute, pressing at least 2 inches deep.</li>
                    <li>Optional: Provide rescue breaths after every 30 compressions.</li>
                    <li>Continue until emergency responders arrive or the victim regains consciousness.</li>
                </ol>
                <h3>Step-by-Step First Aid Procedures</h3>
                <ol>
                    <li>Check if the area is safe for you and the injured person. Remove any hazards if possible.</li>
                    <li>Stay calm and focused to assess the situation effectively.</li>
                    <li>Tap the person gently and ask, “Are you okay?” to determine consciousness.</li>
                    <li>Dial your local emergency hotline if the situation is serious or life-threatening.</li>
                    <li>Clearly explain the location, nature of the emergency, and the condition of the injured person.</li>
                </ol>
                
                <div class="related-links">
                    <p class="related-links-title">Related Links:</p>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=2PngCv7NjaI" target="_blank">CPR Procedures</a></li>
                    </ul>
                </div>
            </article>

            <!-- Fire Safety Guide -->
            <article id="fire" class="guide hidden">
                <h3>Fire Safety and Evacuation</h3>
                <p><strong>Step-by-Step Fire Safety Procedures:</strong></p>
                <ol>
                    <li>Remain composed to think clearly and act quickly.</li>
                    <li>Familiarize yourself with the nearest exits in advance.</li>
                    <li>Activate the fire alarm system or shout "Fire!"</li>
                    <li>Only attempt to extinguish small fires if you’ve been trained.</li>
                    <li>Stay close to the ground to avoid toxic fumes. Use a damp cloth to cover your nose and mouth if possible.</li>
                    <li>Contain the fire by closing doors as you leave.</li>
                    <li>Always use the stairs during a fire evacuation.</li>
                </ol>
                <p><strong>Step-by-Step Evacuation Procedures:</strong></p>
                <ol>
                    <li>Remain composed to think clearly and act quickly.</li>
                    <li>Evacuate immediately when the alarm sounds or upon noticing signs of fire (smoke, flames, or heat).</li>
                    <li>Proceed to the nearest exit or escape route as designated in your emergency plan.</li>
                    <li>Help those who may need assistance (e.g., elderly, disabled).</li>
                    <li>Avoid putting yourself in danger while assisting.</li>
                    <li>Move to the designated assembly point outside the building.</li>
                    <li>Stay a safe distance from the fire and allow room for emergency responders.</li>
                    <li>Never go back inside for belongings or pets until authorities declare it safe.</li>
                </ol>
                
                <div class="related-links">
                    <p class="related-links-title">Related Links:</p>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=Jqu8rK-sbsE" target="_blank">Safety Procedures</a></li>
                    </ul>
                </div>
            </article>

            <!-- Earthquake Guide -->
            <article id="earthquake" class="guide hidden">
                <h3>Earthquake / Natural Disaster Safety</h3>
                <p><strong>Step-by-Step Earthquake / Natural Disaster Safety Instructions:</strong></p>
                <ol>
                    <li>Remain composed to think clearly and act quickly.</li>
                    <li>Discuss evacuation routes, meeting points, and emergency contacts with your family or household.</li>
                    <li>Assign roles and responsibilities to everyone in your household.</li>
                    <li>Non-perishable food and water (enough for at least 72 hours).</li>
                    <li>First-aid supplies, flashlight, batteries, and a whistle.</li>
                    <li>Personal hygiene items, prescription medications, and copies of important documents.</li>
                    <li>Extra cash, sturdy shoes, and warm clothing.</li>
                    <li>Anchor heavy furniture like bookshelves and cabinets to walls.</li>
                    <li>Secure water heaters and gas appliances to prevent tipping.</li>
                    <li>Avoid placing heavy items on high shelves.</li>
                    <li>Identify safe spots in your home, like under sturdy tables or against interior walls.</li>
                    <li>Be aware of your building's emergency exits and earthquake-prone areas.</li>
                    <li>Familiarize yourself with "Drop, Cover, and Hold On" during an earthquake.</li>
                    <li>Learn CPR and basic first aid.</li>
                </ol>
                
                <div class="related-links">
                    <p class="related-links-title">Related Links:</p>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=XAOV53VeuBw&t=6s" target="_blank">Earthquake Safety Procedures</a></li>
                    </ul>
                </div>
            </article>

            <!-- Mental Health Guide -->
            <article id="mental_health" class="guide hidden">
                <h3>Dealing with Mental Health Crises</h3>
                <p><strong>Step-by-Step Dealing with Mental Health Crises Instructions:</strong></p>
                <ol>
                    <li>Check for immediate danger: Is the person or anyone around them in physical danger? Look for signs of self-harm, aggression, or life-threatening situations.</li>
                    <li>Stay calm: Your composure can help de-escalate the situation.</li>
                    <li>Gauge the severity: Is the individual expressing thoughts of suicide, extreme anxiety, or psychosis?</li>
                    <li>Remove hazards: Clear the area of items that could cause harm (e.g., sharp objects, medications, etc.).</li>
                    <li>Create a safe space: Minimize noise, distractions, and other stressors.</li>
                    <li>Do not leave the person alone if they are in immediate danger or experiencing severe distress.</li>
                    <li>Use active listening: Show understanding and compassion. Let them know they are heard.</li>
                    <li>Avoid judgment or invalidation: Use neutral and supportive language, such as "I'm here for you" or "I want to understand how you’re feeling."</li>
                    <li>Speak calmly: Keep your tone reassuring and steady.</li>
                    <li>Help them ground themselves: Encourage deep breathing, drinking water, or focusing on their surroundings to ease intense emotions.</li>
                    <li>Ask simple questions: “What can I do to help right now?” or “What do you feel you need?”</li>
                    <li>Encourage self-care: If appropriate, suggest taking a break, walking, or relaxing in a quiet space.</li>
                </ol>

                <div class="related-links">
                    <p class="related-links-title">Related Links:</p>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=wIUcc8g17wg" target="_blank">Mental Health Procedures</a></li>
                    </ul>
                </div>
            </article>
        </section>
    </main>

    <!-- Scripts -->
    <script>
        // Function to show the selected guide
        function showGuide(guideId) {
            const guides = document.querySelectorAll('.guide');
            guides.forEach(guide => guide.classList.add('hidden'));
            const selectedGuide = document.getElementById(guideId);
            if (selectedGuide) selectedGuide.classList.remove('hidden');
            else console.warn(`Guide with ID "${guideId}" not found.`);
        }

        // Emergency icon toggle function
        function toggleMenu() {
            alert("Emergency icon clicked!");
        }
    </script>
    <script src="scripts/procedures.js"></script>
</body>
</html>
