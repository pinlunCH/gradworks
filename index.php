<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{width:300px;}
        .allworks{display:flex;flex-wrap:wrap;}

    </style>
</head>
<body>

<div class="allworks" id="works">
</div>

<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
<script>
$(function(){
    function fetchData(url, fn)
    {
        $.ajax({
            url:url,
            method:"post",
            success: function(data)
            {
                fn(data);
            },
            error: function(error){
                console.log(error);
            }
        })
    }
    fetchData("getData.php", function(data){
        $.each(data, function(){
            $(".allworks").append('<div class="work" data-id="'++'"><img src="imgs/'+this.coverimg+'"></div>');
        })
        $(".work").click(function(click){
            var workID = $(".work").data("id");
            
        })
    });
});
</script>


</body>
</html>