
<?php echo '

    
<style>
* {
box-sizing:border-box;
}
body{
margin: 0;
font-family: monospace;
}
#preload {
width: 100%;
height: 100%;
background: rgba(96,49,111,1);
position: fixed;
top: 0;
left: 0;
z-index: 99999999;
opacity: 0.9;
 display: block;

}
.logo {
width: 60rem;
height: 70px;
margin: 150px auto 50px auto ;
font-size: 50px;
text-shadow: -10px 20px 20px #000000;
text-align: center;
color: azure;
}
.loader-frame {
width: 70px;
height: 70px;
margin: auto;
position: relative;
}
.loader1, .loader2, .loader3{
position: absolute;
/* border: 1rem solid transparent; */
border-radius: 50%;
}
.loader1 {
width: 8rem;
height: 8rem;
border-top: 6px solid #407831;
border-bottom: 5px solid #407831;
animation: clockwisespin 2s linear 3;
}
.loader2 {
width: 6rem;
height: 6rem;
border-left: 5px solid #f1b62e;
border-right: 5px solid #f1b62e;
top: 8px;
left: 5px;
animation: anticlockwisespin 2s linear 3;
}
.loader3 {
width: 9rem;
height: 9rem;
border-left: 5px solid rgb(255, 0, 0);
border-right: 5px solid rgb(255, 0, 0);
top: 8px;
left: 0px;
animation: anticlockwisespin 2s linear 3;
}
@keyframes clockwisespin {
from{transform: rotate(0deg);}
to{transform: rotate(360deg);}
}
@keyframes anticlockwisespin {
from {
    transform: rotate(0deg);
}

to {
    transform: rotate(-360deg);
}
}
@keyframes  fadeout{
from{opacity: 1;}
to {opacity: 0}
}
</style>
 

';

echo '
    <script>
    var i = 1
    if( i == 1){
        for( i= 1 : i <= 10000 : i++){
            var j = 1;
        }
    }else{
        document.getElementById("preload").style.display = "none";
    }
    </script>
';
 ?>
