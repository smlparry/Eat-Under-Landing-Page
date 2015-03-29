<html>
    <head>
        <title>Eat Under | Food to Fit your budget</title>
        <link rel="stylesheet" href="./css/main.css" media="screen" title="no title" charset="utf-8">
        <link rel="icon" type="image/png" href="https://s3-ap-southeast-2.amazonaws.com/eatunderassets/favicon.png">
    </head>
    <body>
        <div class="request">
            <div class="container">
                <div class="wrapper">
                    <form action="./send.php" accept-charset="UTF-8" method="post">
                            <h2>Become a Beta tester for Eat Under</h2>
                            <div class="form-element">
                                <div class="label">
                                    <label for="name">Your Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="form-element">
                                <div class="label">
                                    <label for="email">Your email address</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Your email address" required="required">
                                </div>
                            </div>
                            <div class="form-element">
                                <label for="android">Android</label>
                                <input type="radio" name="os" id="os_android" value="android">
                                <label for="iphone">iPhone</label>
                                <input type="radio" name="os" id="os_iphone" value="iphone">
                            </div>
                            <input type="submit" name="commit" value="submit" class="submit-button">
            </form>
                </div>
            </div>
        </div>
    </body>
</html>
