<?php

$id = $_GET['id'];

echo "El libro es $id";

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Enviar un nuevo archivo:
    <br>
    <input name="userfile" type="file">
    <br>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <br>
    <input type="submit" value="Enviar">

</form>