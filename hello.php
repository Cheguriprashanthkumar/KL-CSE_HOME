<?php

$na="KL University - Computer Science & Engineering";
?>
<?php
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo"connected";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $na; ?></title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#fff;
        }
        header {
           
            background-color:#fff;
            /* padding: 15px 20px; */
            text-align: center;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            padding: 20px;
        }
        .hero {
    
            height: 400px;
           display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 48px;
            margin: 0;
        }
        .content-section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>

    

<header>
    <img src="./cse_logo.jpg" alt="CSE Logo">
    
    <div class="social-icons">
       
    </div>
</header>

<style>

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#fff;
    padding: 10px 20px;
    color: white;
}

header img {
    height: 58px;
}

header .social-icons {
    display: flex;
    gap: 20px;
}

header .social-icons a {
    text-decoration: none;
    font-size: 20px;
    transition: transform 0.3s ease;
}

header .social-icons a.instagram {
    background-color: #E1306C; /* Instagram Pink */
    border-radius: 50%;
    padding: 5px;
}

header .social-icons a.facebook {
    background-color: #1877F2; /* Facebook Blue */
    border-radius: 50%;
    padding: 5px;
}

header .social-icons a.gmail {
    background-color: #D44638; /* Gmail Red */
    border-radius: 50%;
    padding: 5px;
}

header .social-icons a:hover {
    transform: scale(1.2);
}


</style>

<!-- header -->



    <nav>
        <a href="https://www.kluniversity.in/cse1/aboutus.aspx">About US</a>
        <a href="https://www.kluniversity.in/cse1/acal.aspx">Academics</a>
        <a href="https://www.kluniversity.in/cse1/faculty.aspx">Faculty</a>
        <a href="https://www.kluniversity.in/cse1/rnews.aspx">Research</a>
        <a href="https://www.kluniversity.in/cse1/library.aspx">Infrastructure</a>
        <a href="https://www.kluniversity.in/cse1/skill.aspx">Skill Development</a>
        <a href="https://www.kluniversity.in/cse1/place.aspx">Placements And Progression</a>
        <a href="https://www.kluniversity.in/cse1/rep.aspx">Activites</a>
        <a href="https://www.kluniversity.in/default.aspx">KLU-Home</a>
    </nav>

    <!-- <div class="hero">
       
    </div> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #fff; */
        }
        .hero {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }
        .hero img {
            width: 100%;
            height: 95%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .hero img.active {
            opacity: 1;
        }
        /* Arrow buttons */
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            /* color: white; */
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }
        .arrow.left {
            left: 10px;
        }
        .arrow.right {
            right: 10px;
        }
        .arrow:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <div class="hero">
        <img src="./paypal-banner.jpeg" alt="Image 1" class="active">
        <img src="./C-Net.jpg" alt="Image 2">
        <img src="./SRG-Group-web-banner.jpg" alt="Image 3">
        <img src="./cse-7.jpg" alt="Image 4">
        
        <!-- Left and Right arrows -->
        <button class="arrow left">&#10094;</button>
        <button class="arrow right">&#10095;</button>
    </div>

    <script>
        const images = document.querySelectorAll('.hero img');
        const prevButton = document.querySelector('.arrow.left');
        const nextButton = document.querySelector('.arrow.right');
        let currentIndex = 0;
        let interval;

        function showImage(index) {
            images[currentIndex].classList.remove('active');
            currentIndex = (index + images.length) % images.length; // Ensure the index wraps around
            images[currentIndex].classList.add('active');
        }

        function showNextImage() {
            showImage(currentIndex + 1);
        }

        function showPrevImage() {
            showImage(currentIndex - 1);
        }

        function startSlider() {
            interval = setInterval(showNextImage, 3000); // Change image every 3 seconds
        }

        function stopSlider() {
            clearInterval(interval);
        }

        // Start the slider
        startSlider();

        // Stop the slider on mouseover and restart on mouseout
        const hero = document.querySelector('.hero');
        hero.addEventListener('mouseover', stopSlider);
        hero.addEventListener('mouseout', startSlider);

        // Add event listeners to the arrows
        nextButton.addEventListener('click', () => {
            showNextImage();
            stopSlider(); // Stop automatic sliding after manual navigation
        });

        prevButton.addEventListener('click', () => {
            showPrevImage();
            stopSlider(); // Stop automatic sliding after manual navigation
        });
    </script>
 <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* background-color: #fff; */
    }
    .container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }
    .content-section {
        flex: 3; /* Content section takes up 3 parts of the available space */
        padding-right: 20px; /* Space between content and sidebar */
    }
    .sidebar {
        flex: 1; /* Sidebar takes up 1 part of the available space */
        /* background-color: #fff; */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .sidebar h3 {
        color: #004b87;
        margin-bottom: 10px;
    }
    .news-ticker {
        height: 200px;
        overflow: hidden;
        position: relative;
    }
    .news-ticker ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        position: absolute;
        top: 0;
        animation: scroll 10s linear infinite;
    }
    .news-ticker ul li {
        margin-bottom: 15px;
        padding: 10px;
        /* background-color: #f9f9f9; */
        border-left: 4px solid #004b87;
    }
    .news-ticker ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }
    .news-ticker ul li a:hover {
        color: #004b87;
    }
    @keyframes scroll {
        0% {
            top: 100%;
        }
        100% {
            top: -100%;
        }
    }
    .news-ticker:hover ul {
        animation-play-state: paused;
    }
    h2 {
        color: #004b87;
    }
    ul {
        padding-left: 20px;
    }
</style>
</head>

<!-- news and events -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* background-color:#fff; */
    }
    .container {
        display: flex;
        gap: 20px; /* Space between main content and sidebar */
        padding: 20px;
        max-width: 1200px; /* Optional: set a max width for the container */
        margin: auto; /* Center the container */
    }
    .content-section {
        flex: 3; /* Content section takes up more space */
    }
    .sidebar {
        flex: 1; /* Sidebar takes up less space */
        /* background-color: #fff; */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .sidebar h3 {
        color: #004b87;
        margin-bottom: 10px;
    }
    .news-ticker {
        height: 200px;
        overflow: hidden;
        position: relative;
    }
    .news-ticker ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        position: absolute;
        top: 0;
        animation: scroll 10s linear infinite;
    }
    .news-ticker ul li {
        margin-bottom: 15px;
        padding: 10px;
        /* background-color: #f9f9f9; */
        border-left: 4px solid #004b87;
    }
    .news-ticker ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }
    .news-ticker ul li a:hover {
        color: #004b87;
    }
    @keyframes scroll {
        0% {
            top: 100%;
        }
        100% {
            top: -100%;
        }
    }
    .news-ticker:hover ul {
        animation-play-state: paused;
    }
    h2 {
        color: #004b87;
    }
    ul {
        padding-left: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <!-- Main Content Area -->
    <div class="content-section">
        <h2>About the Department</h2>
        <p>The Department of Computer Science & Engineering at KL University offers a variety of programs that prepare students for careers in the ever-evolving field of computer science. Our faculty members are experts in their fields, and our curriculum is designed to provide students with the knowledge and skills needed to excel.</p>
        
        <h2>Computer Science & Engineering – Unique Features</h2>
        <!-- <ul>
            <li>Industry Driven and Flexible curriculum</li>
            <li>Eminent Faculty with a rich mix of Academic and Industry Exposure</li>
            <li>Trendy Programs with inbuilt Global Certification programs</li>
            <li>The State of the Art Laboratories and Infrastructure</li>
        </ul> -->
        Industry Driven and Flexible curriculum<br/>
        Eminent Faculty with a rich mix of Academic and Industry Exposure<br/>
        Trendy Programs with inbuilt Global Certification programs<br/>
        The State of the Art Laboratories and Infrastructure

    </div>

    <!-- Sidebar with News and Events -->
    <div class="sidebar">
    <h3>News and Events</h3>
    <div class="news-ticker">
        <ul>
            <?php
            $sql = "SELECT * FROM news_events ORDER BY event_date DESC LIMIT 5"; // Adjust limit as needed
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "<a href='" . $row['link'] . "'>" . $row['title'] . "</a>";
                    echo "<p>" . date("F j, Y", strtotime($row['event_date'])) . "</p>";
                    echo "</li>";
                }
            } else {
                echo "<li>No news and events available.</li>";
            }
            ?>
        </ul>
    </div>
</div>

</div>
</body>
 <!-- news and events -->
    
 <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color:white; */
        }
        .container {
            
            justify-content: space-between;
            padding: 20px;
        }
        .content {
            width: 70%;
            padding: 20px;
            /* background-color: #fff; */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .sidebar {
            width: 25%;
            padding: 20px;
            /* background-color: #fff; */
            
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .sidebar h3 {
            color: #004b87;
            margin-bottom: 10px;
        }
        .news-ticker {
            height: 200px;
            overflow: hidden;
            
        }
        .news-ticker ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 0;
            animation: scroll 10s linear infinite;
        }
        .news-ticker ul li {
            margin-bottom: 15px;
            padding: 10px;
            /* background-color: #f9f9f9; */
            border-left: 4px solid #004b87;
        }
        .news-ticker ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .news-ticker ul li a:hover {
            color: #004b87;
        }
        @keyframes scroll {
            0% {
                top: 100%;
            }
            100% {
                top: -100%;
            }
        }
        .news-ticker:hover ul {
            animation-play-state: paused;
        }
    </style>
</head>


    <!-- youtube -->

    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f4f4f4; */
        }
      
        .container {
            display: flex;
            padding: 20px;
            gap: 20px; /* Gap between the columns */
        }
        .left-column {
            flex: 1;
            /* background: #fff; */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .video-container {
            flex: 1;
            /* background: #fff; */
            padding: 20px;
            border-radius: 8px;
            /* box-shadow:#fff; */
        }
        iframe {
            width: 100%;
            height: 315px;
            border: none;
        }
        footer {
            background-color: #333;
            /* color: #fff; */
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
  
<div class="container">
        <div class="content-section">
            <h1>Programs Offered</h1>
            <div class="programs-offered">
                <div class="text-content">
                    <ul>
                        <?php
                        $sql = "SELECT * FROM programs_offered";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<br/>" . htmlspecialchars($row['program_name']) . "</br>";
                            }
                        } else {
                            echo "<li>No programs available.</li>";
                        }
                        ?>
                    </ul>
                    
                </div>
                
                
            </div>
            
        </div>
        <div class="video-container">
                    <h2>Introduction Video</h2>
                    <iframe src="./cse.mp4" title="Introduction Video"></iframe>
                </div>
        
    </div>
    
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.content-section {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.programs-offered {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.text-content {
    flex: 2;
    padding: 20px;
}

.video-container {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

iframe {
    width: 120%;
    height: 315px;
    border: none;
    border-radius: 8px;
}

    </style>

   
     
    

    <!-- <footer>
        <p>&copy; 2024 KL University - Computer Science & Engineering. All rights reserved.</p>
    </footer> -->
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            /* background-color: #fff; */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .image-row img {
            width: calc(20% - 20px); /* Adjusts the image width and margin */
            margin: 10px;
            border-radius: 8px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .image-row img {
                width: calc(45% - 20px); /* Adjust image size for smaller screens */
            }
        }

        @media (max-width: 480px) {
            .image-row img {
                width: calc(100% - 20px); /* Full-width images on very small screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Industrial Collaborated Labs</h2>
        <div class="image-row">
            <img src="./ibm-lab.jpg" alt="IBM Lab Image">
            <img src="./microsoft-lab.jpg" alt="Microsoft AI Lab Image">
            <img src="./oracle-lab.jpg" alt="CISCO Networking Lab Image">
            <img src="./cisco-lab.jpg" alt="Oracle Database Lab Image">
            
        </div>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .slideshow-container {
            position: relative;
            width: 100%;
            margin: auto;
            overflow: hidden;
        }

        .image-row {
            display: flex;
            justify-content: space-between;
            transition: transform 1s ease-in-out;
        }

        .image-row img {
            width: calc(20% - 10px); /* Five images per row */
            margin: 5px;
            border-radius: 8px;
            object-fit: cover;
        }
        
        .image-row.stopped {
            transition: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Top Recruiters</h2>
        <div class="slideshow-container" id="slideshow">
            <!-- First set of 5 images -->
            <div class="image-row">
                <img src="./byjus.jpg" alt="Recruiter 1">
                <img src="./capgemini.jpg" alt="Recruiter 2">
                <img src="./cisco.jpg" alt="Recruiter 3">
                <img src="./deloitte.jpg" alt="Recruiter 4">
                <img src="./ey.jpg" alt="Recruiter 5">
            </div>

            <!-- Second set of 5 images -->
            <div class="image-row">
                <img src="./coforge.jpg" alt="Recruiter 1">
                <img src="./hexaware.jpg" alt="Recruiter 2">
                <img src="./ey.jpg" alt="Recruiter 3">
                <img src="./hyundai-mobis.jpg" alt="Recruiter 4">
                <img src="./ncr.jpg" alt="Recruiter 5">
            </div>
        </div>
    </div>

    <script>
        let slideshow = document.getElementById('slideshow');
        let slideIndex = 0;
        let isPaused = false;
        let slides = slideshow.getElementsByClassName('image-row');
        
        function showSlides() {
            if (!isPaused) {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none';
                }

                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = 'flex';
            }
        }

        // Initial state: show the first slide
        showSlides();
        
        let slideshowInterval = setInterval(showSlides, 5000); // Change every 5 seconds

        // Pause the slideshow when the mouse is over the slideshow
        slideshow.addEventListener('mouseover', function() {
            isPaused = true;
        });

        // Resume the slideshow when the mouse is moved away
        slideshow.addEventListener('mouseout', function() {
            isPaused = false;
        });
    </script>
 <footer>
 <a href="https://www.instagram.com" target="_blank" class="instagram">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram" style="height: 25px;">
        </a>
        <a href="https://www.facebook.com" target="_blank" class="facebook">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook.png" alt="Facebook" style="height: 25px;">
        </a>
        <a href="mailto:example@gmail.com" class="gmail">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/gmail.png" alt="Gmail" style="height: 25px;">
        </a>
    <p>&copy; 2024 KL University - Department of Computer Science & Engineering. All rights reserved.</p>
</footer>
</body>

</body>

</body>
    
    <!-- youtube -->


</html>
