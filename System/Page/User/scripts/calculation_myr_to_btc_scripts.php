<script>
   var x1 = document.getElementById("x1");
var y1 = document.getElementById("y1");
var d = document.getElementById("d");
var x1stored = x1.getAttribute("data-in");
var y1stored = y1.getAttribute("data-in");
setInterval(function(){
    if( x1 == document.activeElement ){
     var temp = x1.value;
     if( x1stored != temp ){
       x1stored = temp;
       x1.setAttribute("data-in",temp);
       calculate();
     }
    }
    if( y1 == document.activeElement ){
     var temp = y1.value;
     if( y1stored != temp ){
       y1stored = temp;
       y1.setAttribute("data-in",temp);
       calculate();
     }
    }
},50);

function calculate(){
 d.innerHTML = x1.value * y1.value;
}
x1.onblur = calculate;
calculate();

</script>