<script>
   var x = document.getElementById("x");
var y = document.getElementById("y");
var d = document.getElementById("d");
var xstored = x.getAttribute("data-in");
var ystored = y.getAttribute("data-in");
setInterval(function(){
    if( x == document.activeElement ){
     var temp = x.value;
     if( xstored != temp ){
       xstored = temp;
       x.setAttribute("data-in",temp);
       calculate();
     }
    }
    if( y == document.activeElement ){
     var temp = y.value;
     if( ystored != temp ){
       ystored = temp;
       y.setAttribute("data-in",temp);
       calculate();
     }
    }
},50);

function calculate(){
 d.innerHTML = x.value * y.value;
}
x.onblur = calculate;
calculate();

</script>