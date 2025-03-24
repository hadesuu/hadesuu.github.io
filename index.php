<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="./edward-gierek-fidel-castro-kuba-1972.jpeg" type="image/x-icon">
    <title>Business Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100vw;
            background: linear-gradient(135deg, #f0f0f0, #e6e6e6);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px 0 0 0;
            box-sizing: border-box;
            overflow-x: hidden;
            flex-direction: column;
        }
        * {
            box-sizing: border-box;
        }
        .card {
            background: #fff;
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            min-height: 350px;
            max-width: 768px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 30px 60px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 200px; /* Increased image size */
            height: 200px; /* Increased image size */
            border-radius: 50%;
            margin-top: 20px;
            margin-bottom: 25px;
            border: 6px solid #fff; /* White border */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Added shadow to the image */
        }
        .card h2 {
            margin: 20px 0;
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }
        .card p {
            color: #777;
            font-size: 20px;
            text-align: center;
        }
        .info-section {
            margin-top: 30px;
            text-align: left;
            width: 100%;
            background-color: #f9f9f9; /* Light background for each section */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .info-section h3 {
            font-size: 26px;
            margin-bottom: 12px;
            color: #333;
            font-weight: 600;
        }
        .info-section p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        .info-section ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #555;
        }

        .info-section ul li {
            font-size: 18px;
            line-height: 1.8;
            color: #444;
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px; /* Increased space between buttons */
            margin-top: 30px;
            width: 100%;
            flex-direction: column; /* Stack buttons vertically on small screens */
        }
        .social-buttons a {
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            background-color: #0073e6;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            width: 250px; /* Increased width of buttons */
            text-align: center; /* Center text inside button */
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow to separate buttons */
        }
        .social-buttons a:hover {
            background-color: #005bb5;
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
        }
        
        /* Additional styles for the contact form */
        .info-section form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .form-group label {
            font-size: 16px;
            color: #333;
        }

        .form-group input,
        .form-group textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #0073e6;
            box-shadow: 0px 0px 5px rgba(0, 115, 230, 0.5);
        }

        textarea {
            resize: vertical;
        }

        .btn-submit {
            padding: 15px 30px;
            background-color: #0073e6;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            width: 250px;
            align-self: center;
            margin: 0 20px;
        }

        .btn-submit:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

        footer {
            margin-top: 50px;
            width: 100%;
            background: #333;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 16px;
            box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.2);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        h2{
            text-align: center;
        }

        /* .quick-access{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        } */
        .quick-access a{
            color: #333;
            size: 70px;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }
        .quick-access :nth-child(3) i{
            color: #25d366;
            border-color: #25d366;
        }
        .quick-access i{
            border: 3px solid #333;
            border-radius: 30%;
            padding: 7px;
            height: 70px;
            width: 70px;
            margin: 20px;
        }

        @media (max-width: 768px) {
            body {
                width: 100vw; /* Body now takes the full width of the viewport */
                padding: 0;
            }
            .card {
                width: 100vw; /* Card takes the full width of the viewport */
                min-height: 100vh;
                border-radius: 0;
                padding: 30px;
                box-shadow: none;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .card img {
                margin-top: 30px;
                width: 150px; /* Adjusted size for smaller screens */
                height: 150px; /* Adjusted size for smaller screens */
            }
            .card h2 {
                font-size: 28px;
            }
            .card p {
                font-size: 18px;
            }
            .social-buttons {
                gap: 15px; /* Smaller gap on mobile screens */
            }
            .social-buttons a {
                width: 100%; /* Buttons take full width on smaller screens */
                padding: 12px 25px; /* Slightly smaller padding */
            }
            .info-section form {
                padding: 15px;
            }
            .btn-submit {
                width: 100%; /* Full-width button on small screens */
                padding: 12px 25px; /* Slightly smaller padding */
            }

            .quick-access i{
                margin: 20px;
            }

            footer{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="./edward-gierek-fidel-castro-kuba-1972.jpeg" alt="Profile Picture">
        <h2>Karol Gocek</h2>
        <p>Web Developer | Designer</p>
        <div class="quick-access">
            <a href="tel:+123456789" title="Call me"><i class="fa fa-phone fa-3x "></i></a>
            <a href="sms:+123456789" title="Message me"><i class="fa fa-commenting-o fa-3x "></i></a>
            <a href="https://wa.me/123456789" target="_blank" title="Call me on Whatsapp"><i class="fa fa-whatsapp fa-3x"></i></a>
        </div>
        <div class="info-section">
            <h3>About Me</h3>
            <ul>
                <li>Passionate web developer with a knack for creating elegant and functional designs.</li>
                <li>Dedicated to delivering top-notch digital experiences.</li>
            </ul>
        </div>
        <div class="info-section">
            <h3>Qualifications</h3>
            <ul>
                <li>Bachelor's Degree in Computer Science</li>
                <li>Certified Front-End Developer</li>
                <li>UX/UI Design Enthusiast</li>
            </ul>
        </div>
        <div class="info-section">
            <h3>Experience</h3>
            <ul>
                <li>5+ years of experience in web development</li>
                <li>Worked with multiple startups and enterprises</li>
                <li>Specialized in React, JavaScript, and responsive design</li>
            </ul>
        </div>
        <div class="info-section">
            <h3>Connect with Me</h3>
            <div class="social-buttons">
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
                <a href="https://www.twitter.com" target="_blank">Twitter</a>
                <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
                <a href="./KarolGocek.vcf" download="./KarolGocek.vcf">Add me to Contacts</a>
                <a href="./wypisz.php">People in my contacts</a>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="info-section">
            <?php
            
            if(isset($_POST["name"], $_POST['surn'], $_POST['email'], $_POST['tel']) && 
            !empty(trim($_POST['name'])) && !empty(trim($_POST['surn'])) &&
            !empty(trim($_POST['email'])) && !empty(trim($_POST['tel']))){

                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'nfccard';

                $conn = mysqli_connect($host, $user, $pass, $db); 
                
                $imie = $_POST['name'];
                $nazw = $_POST['surn'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                
                $sql = "INSERT INTO `kontakty`(`id`, `imie`, `nazwisko`, `email`, `phone`) VALUES (NULL, '$imie', '$nazw', '$email', '$tel');";

                mysqli_query($conn, $sql);

                echo "<h2>Contact information has been sent succesfuly!</h2>";

                mysqli_close($conn);

            }
            else{ ?>

            <h3>Let me contact you!</h3>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="surn">Surname</label>
                    <input type="text" id="surn" name="surn" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="tele">Phone</label>
                    <input type="tel" name="tel" id="tel">
                </div>
                <div style="display: flex; justify-content: center;">
                    <button type="submit" class="btn-submit">Send</button>
                    <button type="reset" class="btn-submit">Reset</button>
                </div>
                
            </form>
            <?php
            }
            
            ?>
        </div>
    </div>
    <footer>
        &copy; 2025 Karol Gocek | All Rights Reserved
    </footer>
</body>
</html>
