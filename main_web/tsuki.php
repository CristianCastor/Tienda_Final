<?php
    $conexion =mysqli_connect('localhost','root','','tienda');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script type="text/javascript">
        function genPDF() {
	
            const doc = new jsPDF();
            margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };
	
	doc.text(20,20,'Ticket de compra para la figura "Tsuki Uzaki"');
    doc.text(10,10,'Precio 250$ DLLS"');
    doc.text(30,30,'Unidad= 1');
	doc.save('Tsuki.pdf');
	
        }
    </script>
    <script>
        function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

  /* Create magnifier glass: */
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");

  /* Insert magnifier glass: */
  img.parentElement.insertBefore(glass, img);

  /* Set background properties for the magnifier glass: */
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;

  /* Execute a function when someone moves the magnifier glass over the image: */
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);

  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /* Prevent the magnifier glass from being positioned outside the image: */
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /* Set the position of the magnifier glass: */
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /* Display what the magnifier glass "sees": */
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }

  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
    </script>
</head>
<body>
    <header class="header">
        <a href="index.html">
            <img class="header__logo" src="img/logo.jpg" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.html">Main</a>
        <a class="navegacion__enlace" href="nosotros.html">Informacion</a>
    </nav>
    <main class="contenedor">
        <a href="https://www.amiami.com/eng/c/bishoujo/">
        <h1>Tsuki Uzaki(Escala 1/7)</h1>
     </a>
        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>Hana Tsuki de Uzaki-chan wa Asobitai</p>

                <p> Madre del personaje principal.
                </p>
                <form class="formulario">
                    <?php
                    ?>
                    <?php
                    $sql= "SELECT * from inventario WHERE producto = 'Tsuki'";
                    $result=mysqli_query($conexion,$sql);
                    
                    while($mostrar=mysqli_fetch_array($result))
                    {
                        
                        ?><a>En existencia:</a>
                    <td><?php echo $mostrar['existencia']?></td>
                    
                    <?php
                    $codigo=42070;
                    mysqli_query($conexion,"UPDATE inventario SET existencia = existencia-1  WHERE codigo ='$codigo'");
                    ?>
                     <input class="formulario__submit" type="submit" value="Agregar al Carrito">
                    <p class="producto__precio">Precio $130 USD</p>
                    <a href="javascript:genPDF()">Download PDF</a>
                    <?php
                    
                    }
                    ?>
                    
                    </form>
                </form>
            </div>
            <div class="img-magnifier-container">
                <img id="myimage" src="img/fig2.jpg" width="1000" height="800" alt="Girl">
            
        </div></div>
    </main>
    </div>
    <footer class="footer">
        <p class="footer__texto">Cristian Castor Cedillo</p>
    </footer>
    <script>
        /* Execute the magnify function: */
        magnify("myimage", 3);
        /* Specify the id of the image, and the strength of the magnifier glass: */
        </script> 
            </body>
            </html>