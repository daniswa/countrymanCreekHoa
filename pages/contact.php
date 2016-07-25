





<!DOCTYPE html>
<html lang='en-US'>
<head>
    <title>Countryman Creek Ranch | Contact the Board</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='keywords' content='Countryman,Creek,Ranch,Homeowners,Association,Montana,Columbus,Country,Man' />
    <meta name='description' content='Official Website for the Countryman Creek Ranch Homeowners Association' />
    <link rel='stylesheet' type='text/css' href='stylesheets/stylesheet.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <link href='favicon.ico' rel='icon' type='image/png'>
</head>
<body>
    <?php include_once 'functions/analyze.php'; ?>
    <?php include 'functions/email_function.php'; ?>
    <?php include 'functions/header.php'; ?>
    <?php include 'functions/headerNav.php'; ?>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1'>
                 <div id='content'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1'>
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                                    <div id='contactHeader'>
                                        <h2 class='title'>Contact The Board</h1>
                                        <h3 id='invite'>Please fill out the form below to leave a message for the Countryman Creek Ranch Board Members.</h3>
                                    </div>
                                    <div id='emailForm'>
                                        <form id='emailForm' name='contactForm' onsubmit='validElements()' method='POST' action=''>
                                            <div class='row'>
                                                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                                    <h4 class='contactForm'>*First Name:</h4>
                                                </div>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0'>
                                                    <input class='contactElements' type="text" name="fName">
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                                    <h4 class='contactForm'>*Last Name:</h4>
                                                </div>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0'>
                                                    <input class='contactElements' type="text" name="lName">
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                                    <h4 class='contactForm'>*Email:</h4>
                                                </div>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0'>
                                                    <input class='contactElements' type="text" name="email">
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                                    <h4 class='contactForm'>Phone Number:</h4>
                                                </div>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0'>
                                                    <input id='areaCode' type="text" name="areaCode" placeholder='123'>
                                                    <input id='prefix' type="text" name="phonePrefix" placeholder='456'>
                                                    <input id='suffix' type="text" name="phoneSuffix" placeholder='7890'>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                                    <h4 class='contactForm'>*Best Time to Reach You:</h4>
                                                </div>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0'>
                                                    <select id='contactElements' name='timeOfDay'>
                                                        <option value='anytime'>Anytime</option>
                                                        <option value='morning'>Morning</option>
                                                        <option value='afternoon'>Afternoon</option>
                                                        <option value='evening'>Evening</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                                    <h4 class='contactForm'>*Comments:</h4>
                                                </div>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0'>
                                                    <textarea id='contactElements' name='comment'>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-4 col-lg-8 col-lg-offset-4'>
                                                    <input id='contactButton' type='submit' name='submit' value='Submit'>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <h2 class='title'>Board Member Contact Information</h2>
                            <h3 class='name'>Tom Kessler</h3>
                            <h3 class='name'>President</h3>
                            <h4>&#9743 (406)780-0564</h4>
                            <br>
                            <h3 class='name'>Vince Slevira</h3>
                            <h3 class='name'>Vice President</h3>
                            <h4>&#9743 (406)780-0557</h4>
                            <br>
                            <h3 class='name'>Jennifer Kessler</h3>
                            <h3 class='name'>Secretary</h3>
                            <h4>&#9743 (406)780-0745</h4>
                            <br>
                            <h3 class='name'>Cheryl Slevira</h3>
                            <h3 class='name'>Member At Large</h3>
                            <h4>&#9743 (406)321-0098</h4>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'functions/footer.php'; ?>
</body>
</html>