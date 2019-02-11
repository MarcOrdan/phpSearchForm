<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">

    <script>
    function showSuggestion(str){
       if(str.length == 0){ 
        document.getElementById('output').innerHTML = '';
       } else {
           // AJAX REQ
           var xmlhttp  = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function(){
               if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
               }
           }
           xmlhttp.open("GET", "suggest.php?q="+str, true);
           xmlhttp.send();
       }
    }
    </script>


</head>

<body>
    <div class="container">
        <form action="">
            <h3>Search User:</h3>
            <input type="text" name="" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id = "output" style = "font-weight:bold"></span></p>
    </div>
    
</body>
</html>