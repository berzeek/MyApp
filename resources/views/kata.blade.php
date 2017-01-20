<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kata - Ajax, Post and Get</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<input type="text" id="get-text">
<button id="get-button">Get Request</button>

<br>
<br>

<input type="text" id="post-text">
<button id="post-button">Post Request</button>

<script>
    var getText = $("#get-text").val();
    var getButton = $("#get-button");

    var postText = $("#post-text").val();
    var postButton = $("#post-button");

    getButton.click(function(){
        // This is the GET Request
        $.ajax({
            type: "GET",
            url: "/kata/receive",
            data: getText,
            success: function(data){
                getText.text(data);
            }
        });
    });

    postButton.click(function(){
        // This is the POST Request
        $.ajax({
            type: "POST",
            url: "/kata/post",
            data: postText,
            success: function(data){
                postText.text(data);
            }
        });
    });
</script>

</body>
</html>