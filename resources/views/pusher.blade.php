<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('c9fef5e397d0da2636e3', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {

    // alert(JSON.stringify(data));
    


    // ========================================
    // Select the h1 tag
    // var h1Element = document.getElementById('jsonData');

    // Set its text content to the stringified JSON
    // h1Element.textContent = JSON.stringify(data);

    var h1Element = document.getElementById('jsonData');

    // Concatenate the properties of the data object into a string
    // var textContent = "Token Number is: " + data.post.title + ",\n" + data.post.author;
    var textContent =  data.post.title + "\n" + data.post.author;

    // Set the text content of the h1 element
    h1Element.textContent = textContent;



    });
  </script>
</head>
<body>

<h1 id="jsonData"></h1>
  <h1>From Duty Officer</h1>

</body>

