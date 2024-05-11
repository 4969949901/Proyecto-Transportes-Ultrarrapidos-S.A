<!DOCTYPE html>
<html>
<head><title></title></head>

<style>
body{
background-image: url('https://img.freepik.com/foto-gratis/muchos-camiones-transporte-estacionados-estacion-servicio-al-atardecer-ai-generativo_123827-23416.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
#rock1{
position:absolute;
left:-30px;
top:0px;
width:40px;
height:40px;
transform:rotate(45deg);
animation:b 6s infinite;
}
#rock2{
position:absolute;
left:200px;
top:-25px;
width:40px;
height:40px;
transform:rotate(45deg);
animation:a 6s infinite;
}
#rock3{
position:absolute;
left:585px;
top:5px;
width:40px;
height:40px;
transform:rotate(45deg);
animation:a 6s infinite;
}
#rock4{
position:absolute;
left:385px;
top:90px;
width:40px;
height:40px;
transform:rotate(45deg);
animation:b 6s infinite;
}
#rock5{
position:absolute;
left:60px;
top:140px;
width:25px;
height:25px;
transform:rotate(45deg);
animation:a 6s infinite;
}
#rock6{
position:absolute;
left:500px;
top:-25px;
width:25px;
height:25px;
transform:rotate(45deg);
animation:a 6s infinite;
}
#rock7{
position:absolute;
left:60px;
top:-55px;
width:25px;
height:25px;
transform:rotate(45deg);
animation:b 6s infinite;
}
#rock8{
position:absolute;
left:530px;
top:130px;
width:25px;
height:25px;
transform:rotate(45deg);
animation:b 6s infinite;
}
@keyframes a{
0%{
background:transparent;
}
50%{
background:darkorange;
}
100%{
background:transparent;
}
}
@keyframes b{
0%{
background:darkorange;
}
50%{
background:transparent;
}
100%{
background:darkorange;
}
}
#div1{
position:absolute;
left:calc(50% - 730px);
top:calc(50% - 350px);
width:600px;
height:100px;
border:20px solid rgb(60, 60, 60);
border-radius:100px;
}
#diva1{
position:absolute;
    display: flex;
width:590px;
height:90px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#img1{
position:absolute;
left:15px;
top:15px;
width:60px;
}
#img2{
position:absolute;
left:10px;
top:10px;
width:60px;
   color: transparent;
}
#img3{
position:absolute;
left:10px;
top:10px;
width:60px;
}
#divaa1{
position:absolute;
left:150px;
width:80px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#divaa1:hover{
height:250px;
}
#divaa1:hover > #divaaa1{
height:180px;
border:5px solid orange;
}
#divaaa1{
position:absolute;
top:-5px;
left:75px;
width:40px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#divaa2{
position:absolute;
left:300px;
width:80px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#divaa2:hover{
height:200px;
}
#divaa2:hover > #divaaa2{
height:230px;
}
#divaaa2{
position:absolute;
top:-5px;
left:-25px;
width:25px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#divaa3{
position:absolute;
left:450px;
width:80px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#divaa3:hover{
height:260px;
}
#divaa3:hover > #divaaa3{
height:200px;
}
#divaa3:hover > #divaaa4{
height:140px;
}
#divaaa3{
position:absolute;
top:-5px;
left:-50px;
width:40px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#divaaa4{
position:absolute;
top:-5px;
left:75px;
width:25px;
height:80px;
border:5px solid orange;
border-radius:100px;
background:orange;
transition:.6s;
}
#btna1{
position:absolute;
top:0px;
background:transparent;
width:75px;
color:transparent;
    text-align: center;
    text-decoration: none;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa1:hover > #btna1{
top:90px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btna2{
position:absolute;
top:0px;
    text-align: center;
    text-decoration: none;
background:transparent;
width:75px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa1:hover > #btna2{
top:140px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btna3{
position:absolute;
top:0px;
background:transparent;
width:75px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa1:hover > #btna3{
top:190px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btnb1{
position:absolute;
top:0px;
background:transparent;
width:100px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa2:hover > #btnb1{
top:90px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btnb2{
position:absolute;
top:0px;
background:transparent;
width:75px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa2:hover > #btnb2{
top:140px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btnc1{
position:absolute;
top:0px;
background:transparent;
width:75px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa3:hover > #btnc1{
top:90px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btnc2{
position:absolute;
top:0px;
background:transparent;
width:75px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa3:hover > #btnc2{
top:140px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
#btnc3{
position:absolute;
top:0px;
background:transparent;
width:75px;
color:transparent;
padding-top:5px;
padding-bottom:5px;
font-family:Georgia, serif;
font-size:15px;
border:2.5px solid transparent;
border-radius:100px;
cursor:pointer;
transition:.6s;
}
#divaa3:hover > #btnc3{
top:190px;
color:black;
background:dimgrey;
padding-bottom:5px;
}
p{
    font-size: 30px;
}
.contenido{
    margin-top: 90px;
    margin-left: 750px;
    border-radius: 20px;
    background: white;
    text-align: center;
    width: 650px;
    height: 550px;
    opacity: .8;
}
.contenedorfoto{
    margin-top: 295px;
    padding:5px;
    display: flex;
    float: left;
    opacity: .8;
}
.conten{
    clear: both;
    opacity: .8;
}
</style>

<body>

<div id="div1">
    <div id="rock1"></div>
    <div id="rock2"></div>
    <div id="rock3"></div>
    <div id="rock4"></div>
    <div id="rock5"></div>
    <div id="rock6"></div>
    <div id="rock7"></div>
    <div id="rock8"></div>
    <div id="diva1">
        <p style="margin-left: 25px" >Menu</p>
        <div id="divaa1">
            <a id="btna1" type="button"  href="{{ route('register') }}">Register</a>
            <a id="btna2" type="button" href="{{ route('login') }}" >Login</a>
            <img id="img2" style="opacity: .8;border-radius: 10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8xtJv2HGjRemhZX00GpU7gwggJzjWv04MNN1IDQTJjA&s">
        </div>
        <div id="divaa2">
            <img id="img3" style="height: 55px;border-radius: 10px;opacity: .8" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFtJ3YkvR9B3FG9RUBdv25BLshcP7fJSyQmcQBG3lIJA&s">
            <div id="divaaa2"></div>
            <input id="btnb1" type="button" value="Informacion">
            <input id="btnb2" type="button" value="Tablas">
        </div>
    </div>
    <div class="contenido">
        <h1>Almacenes de Transporte Pesado</h1>
        <p>En Transportes Ultrarrápidos, S.A., contamos con almacenes especializados para el transporte de cargas pesadas. Nuestros almacenes están equipados con la última tecnología y cumplen con los más altos estándares de seguridad.</p>
        <p>Ofrecemos servicios de almacenamiento seguro, manipulación especializada de carga y distribución eficiente para todo tipo de mercancías pesadas.</p>
        <p>Confía en nosotros para el manejo responsable y confiable de tus cargas pesadas.</p>
    </div>

</div>

<div id="principal">
    <div class="contenedorfoto"><a><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5CcHaz8bODZPpU2UGgCEVIHfXcWDs6ovCdP0LmMkjGw&s" border="0" alt=""/></a><br /></div>
    <div class="contenedorfoto"><a><img style="width: 295px" src="https://img.freepik.com/fotos-premium/almacenamiento-almacen-camiones-transporte-mercancias_973328-4447.jpg" border="0" alt=""/></a><br /></div>
    <div class="conten"><a><img style="width: 275px;height: 200px" src="https://www.equality.es/wp-content/uploads/2020/11/transporte-mercancia-carretera.jpg" border="0" alt=""/></a><br /></div>

</div>
</body>
</html>
