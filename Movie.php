<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jsonfile=file_get_contents("movies.json");
    ?>
    <select id="year">
    Year:
    </select>   
    <select id="movie">
    movie name:
    </select>   
    <script type="text/javascript">
    
    var str=""; 
    var jsonEx =<?php echo $jsonfile?>;
/*
    var doc = Document.getElementById("year");
    for(i=0;i<2500;i++){
        var option = document.createElement("option");
        option.text = i;
        doc.add(option);
    }*/
    html ="";
    htm="";
    for(var key in jsonEx){
       html += "<option value="+key+">"+jsonEx[key].year+" "+jsonEx[key].title+"</option>";
        htm += "<option value="+key+">"+jsonEx[key].title+"</option>";
    }

    document.getElementById("year").innerHTML = html;
    document.getElementById("movie").innerHTML = htm;

    </script>
     
    <div id="output"></div>

</body>
</html>