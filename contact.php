<!DOCTYPE html>
<html lang="en">

<head>
    <title>KJC Placement Cell</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px; /* Adjust as needed */
        }

        .header-container img {
            margin-right: 10px;
        }

        .header-container b {
            color: #6a0dad;
            font-size: 1.5rem; /* Adjust as needed */
        }

        .header-container span {
            color: #9b59b6;
        }
    </style>
</head>

<body>

    <div class="container-fluid pt-2">
        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="header-container">
                    <img src="admin/img/kjc.png" alt="College Logo" width="100" height="70" class="rounded-full">
                    <b>PLACERS - <span>Placement Management System</span></b>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-color: #504099;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="./admin/login.php" class="nav-link">Admin Login</a></li>
                    <li class="nav-item"><a href="./user/login.php" class="nav-link">Student Login</a></li>
                    <li class="nav-item"><a href="recruit.php" class="nav-link">Our Recruiters</a></li>
                    <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <table class="table" style="width: 50%; margin: 0 auto;">
        <tr>
            <td class="text-center">
                <div class="form-container text-center pt-2">
                    <h1 class="mb-4">CONTACT US</h1>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Enter your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="regno" placeholder="Enter your Register No." required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Mail Id" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="District" required>
                                <option>--Select your district--</option>
                                <option>Bagalkot</option>
                                <option>Bangalore Rural</option>
                                <option>Bangalore Urban</option>
                                <option>Belgaum</option>
                                <option>Bellary</option>
                                <option>Bidar</option>
                                <option>Bijapur</option>
                                <option>Chamarajanagar</option>
                                <option>Chikkaballapur</option>
                                <option>Chikkamagaluru</option>
                                <option>Chitradurga</option>
                                <option>Dakshina Kannada</option>
                                <option>Davanagere</option>
                                <option>Dharwad</option>
                                <option>Gadag</option>
                                <option>Gulbarga</option>
                                <option>Hassan</option>
                                <option>Haveri</option>
                                <option>Kalaburagi</option>
                                <option>Kodagu</option>
                                <option>Kolar</option>
                                <option>Koppal</option>
                                <option>Mandya</option>
                                <option>Mysore</option>
                                <option>Raichur</option>
                                <option>Ramanagara</option>
                                <option>Shivamogga</option>
                                <option>Tumkur</option>
                                <option>Udupi</option>
                                <option>Uttara Kannada</option>
                                <option>Yadgir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="Message" placeholder="Enter your Feedback" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var form = $(this);
                var formData = form.serialize();

                $.ajax({
                    url: 'https://formspree.io/f/xovajvdz', // Your Formspree endpoint
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        alert('Form submitted successfully!');
                        form.trigger('reset'); // Clear the form fields
                    },
                    error: function(err) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

</html>
