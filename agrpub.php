<html>
    <body>
        <h1>Agregar publicación</h1>
        <div class="form-group">
            <form id="agrpub" action="agrepub.php" method="post" enctype="multipart/form-data" >
            <label>Titulo</label> <span> (Este se mostrara en el inicio de la publicación)</span>
            <br>
            <input type="text" name="titulo" class="form-control" required="" placeholder="Encabezado para su publicación">
            <br>
            <label>Imagen</label> <span></span>
            <br>
            <input type="file" class="form-control" name="arc" required="">
            <br>
            <label>Descripción</label>
            <br>
            <textarea class="form-control" rows="10" cols="40" name="descripcion" id="descripcion" required=""></textarea>
            <br>
            <input class="btn btn-default" type="submit" value="Agregar">
            <input class="btn btn-default" type="button" value="Cancelar" Onclick="location.href='index.php'">
            </form>
        </div>
        
    </body>
</html>
