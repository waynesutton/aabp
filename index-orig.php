<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Twilio starter code">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Ruby Twilio Starter!</title>

    <!-- A little CSS to make our page prettier -->
    <link rel="stylesheet" href="app.css"/>
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Include jQuery to help us with some UI stuff -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>
</head>
<body>
    <!-- A simple UI to test our Twilio back end -->
    <div id="content">

        <FORM action="SendSMS.php" method="post" style="width: 250px; padding-left: 10px">
  <p>
     Phone Number (123-345-7890):<br> <INPUT type="text" name="number" style="width: 100%">
     <BR>
     Message: <br><TextArea type="text" name="message" style="width: 100%"></TextArea><br><br>
     <BUTTON name="reset" type="reset">Reset</BUTTON>
     <BUTTON name="submit" value="submit" type="submit">Send</BUTTON>
  </p>
</FORM>

         <form>
            <p>Enter your mobile phone number:</p>
            <input id="to" type="text" 
                placeholder="ex: 777-777-777"/>
            <button>Send me a message</button>
        </form>
       
    </div>

    <!-- Some dirty JavaScript to help drive our UI -->
    <script src="js/ui.js"></script>
    <!-- Some ajax magic to hit our back end and make calls/send messages -->
    <script src="js/form.js"></script>
</body>
</html>