<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ul>
    <p id="result" p>
   </ul>
   
   
    <script>
    var i;
    var nb="<p></p>";
    for(i=0;i<=100;i++){

        if(i%2==0){
            nb+="<li>"+i+"</li>";
        }

    }
    document.getElementById("result").innerHTML =nb;

    </script>
</body>
</html>