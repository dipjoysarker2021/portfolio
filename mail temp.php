<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Simple Card</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS to match the design */
        .mail-tmp {
            background-color: #f8f9fa; /* Light gray background */
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .mail-tmp .app-logo {
            width: 100px; /* Size of the logo */
            margin: 0 auto 20px; /* Center and add bottom margin */
            display: block;
        }
        /* Custom responsive padding for the card body */
        .mail-tmp .card-body-custom {
            padding: 40px; /* Default large padding */
        }
        /* Media query for smaller screens (simulating 'responsive padding gets less') */
        @media (max-width: 576px) {
            .mail-tmp .card-body-custom {
                padding: 20px; /* Reduced padding on small screens */
            }
        }
        /* Custom blue button style to match the image */
        .mail-tmp .btn-custom {
            background-color: #007bff; /* Primary blue */
            border-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
        }
        .mail-tmp .btn-custom:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .mail-tmp .footer-text {
            text-align: center;
            margin-top: 40px;
            color: #6c757d; /* Muted text color */
        }
        .mail-tmp .footer-text h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #343a40; /* Darker color for HipCorp heading */
        }
        .mail-tmp .footer-text p {
            margin: 0;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="mail-tmp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-6">
        
                    <img src="https://drmcoders.com/resource/images/site%20logo/drm-logo.png" alt="App Logo" class="app-logo">
                    <div class="card shadow-sm">
                        <div class="card-body card-body-custom">
                            <h3 class="card-title font-weight-bold mb-3">Simple Card</h3>
                            <p class="card-text mb-4">Here is a very simple card. It has responsive padding so it gets less padding on mobile to fill the screen more. Hopefully it can be useful to you. It is very simple and basic but can be used for a lot of simple emails.</p>
                            <a href="#" class="btn btn-custom">Visit Website</a>
                        </div>
                    </div>
                    <div class="footer-text">
                        <h2>HipCorp</h2>
                        <p>Sent with &lt;3 from Hip Corp.</p>
                        <p>Hip Corp. 1 Hip Street</p>
                        <p>Gnarly State, 01234 USA</p>
                    </div>
                    </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        
        .mail-tmp {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa; margin: 0; padding: 40px 15px; display: flex; justify-content: center; align-items: flex-start;
        }
        .mail-tmp .email-container {
            max-width: 600px; width: 100%;
        }
        .mail-tmp .logo-area {
            text-align: center; margin-bottom: 20px;
        }
        .mail-tmp .app-logo {
            width: 100px; display: block; margin: 0 auto;
        }
        .mail-tmp .simple-card {
            background-color: #ffffff; border-radius: 5px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); overflow: hidden; 
        }
        .mail-tmp .card-content {
            padding: 40px;
        }
        .mail-tmp .card-title {
            font-size: 1.5rem; font-weight: bold; margin-bottom: 15px; color: #343a40;
        }
        .mail-tmp .card-text {
            font-size: 1rem; line-height: 1.6; margin-bottom: 25px; color: #6c757d;
        }
        .mail-tmp .button {
            display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; transition: background-color 0.3s;
        }
        .mail-tmp .button:hover {
            background-color: #0056b3;
        }
        .mail-tmp .footer {
            text-align: center; margin-top: 40px; color: #6c757d;
        }
        .mail-tmp .footer-title {
            font-size: 2rem; margin-bottom: 10px; color: #343a40; font-weight: normal;
        }
        .mail-tmp .footer-line {
            margin: 0;line-height: 1.5;
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            .mail-tmp .card-content {
                padding: 20px;
            }
            .mail-tmp{
                padding: 20px 10px;
            }
            .mail-tmp .footer-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body class="mail-tmp">

    <div class="email-container">
        
        <div class="logo-area">
            <img src="path/to/logo.png" alt="HipCorp App Logo" class="app-logo">
        </div>

        <div class="simple-card">
            <div class="card-content">
                <h3 class="card-title">Simple Card</h3>
                <p class="card-text">Here is a very simple card. It has responsive padding so it gets less padding on mobile to fill the screen more. Hopefully it can be useful to you. It is very simple and basic but can be used for a lot of simple emails.</p>
                <a href="#" class="button">Visit Website</a>
            </div>
        </div>
        
        <div class="footer">
            <h2 class="footer-title">HipCorp</h2>
            <p class="footer-line">Sent with &lt;3 from Hip Corp.</p>
            <p class="footer-line">Hip Corp. 1 Hip Street</p>
            <p class="footer-line">Gnarly State, 01234 USA</p>
        </div>

    </div>

</body>
</html>