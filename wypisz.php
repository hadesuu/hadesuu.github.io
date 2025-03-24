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

        #cwela{
            color: #444;
            text-decoration: none;
            font-size: 1.3rem;
            margin: 20px 0 0 0;
        }
        #cwela:hover{
            color: #777;
        }

        th{
            text-align: center;
            padding: 0 10px;
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

            table{
                font-size: 60% !important;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Everyones contact information</h1>
        <?php
        
        if(isset($_POST["login"], $_POST['passwd']) && 
        !empty($_POST['login']) && !empty($_POST['passwd'])){

            $login = $_POST['login'];
            $passwd = $_POST['passwd'];

            if($login == 'admin' && $passwd == 'admin'){

                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'nfccard';

                $conn = mysqli_connect($host, $user, $pass, $db); 

                $sql = 'SELECT * FROM kontakty;';

                $wynik = mysqli_query($conn, $sql);

                
                ?>
                <div class="info-section" wtyle="display: flex; justify-content: center; align-items: center; ">
                <table style='margin: 0 auto; font-size: 150%;'>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                <?php
                for($i = 0; $i < mysqli_num_rows($wynik); $i++){
                    $row = mysqli_fetch_assoc($wynik);
                    
                    echo "<tr>";

                    echo "<td>{$row['id']}</td> <td>{$row['imie']}</td> 
                        <td>{$row['nazwisko']}</td> <td>{$row['email']}</td> 
                        <td>{$row['phone']}</td>";

                    echo "</tr>";
                    
                }
                echo "</table>";
                echo '</div>';
                echo '<a href="./index.php" id="cwela">Go back</a>';

            }
            else{ ?>
                <div class="info-section" style="text-align: center;">
                    <h2>Sorry, wrong login information!</h2>
                    <a href="./index.php" id="cwela">Go back</a>
                </div>
      <?php }

        }
        else{ ?>
            <div class="info-section">
                <h2>Login to see contcts</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Login</label>
                        <input type="text" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" id="passwd" name="passwd" required>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn-submit">Login</button>
                        <button type="reset" class="btn-submit">Reset</button>
                    </div>
                </form>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="./index.php" id="cwela">Go back</a>
                </div>
                
            </div>
    <?php 
            } 
    ?>
    </div>
    
</body>
</html>
