<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
    </head>
    <body>
        
        <h3>Пример замыкания</h3>
        
        <ol>            
            <li>Первый пункт</li>
            <li>Второй пункт</li>
            <li>Третий пункт</li>
            <li>Четвертый пункт</li>
            <li>Пятный пункт</li>
        </ol>
        
        <script type="text/javascript" >

       var lists = $("li");  
    
    
    // alert($(links[1]).text());
    
        for (var i = 0; i < lists.length; i++) {
           (function(i) {
              lists[i].onclick = function() {
                 alert('Вы выбрали пункт №' + (i+1));
              }
           })(i);
        }
        
        </script>
        
  
        
    </body>
</html>
