<!DOCTYPE html>
<html lang="es">
<head>
<title>DANIEL | El Antiguo Testamento</title>
    <meta content="El libro del pueblo de Dios | Santa Biblia Católica" name="description">
<meta charset="utf-8">
<link  rel="icon" href="../favicon.png" type="image/png" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<style>
.container-fluid {
  display: flex;
  flex-flow: row;

}

.item {
  flex: 1 1 auto;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  padding: 2px;
    margin: 2px;
}

@media (max-width: 750px) {
  .container-fluid {
    /* si es muy angosta, uno debajo del otro */
    flex-flow: column;
  }
}
.blanco {
  background-color: ;
  width: 20%;
}
.white {
  background-color: ;
    background-image: url("");
  width: 60%;
}
@media screen and (max-width: 720px) {
        .blanco, .white { 
                  width: 100%; 
                   }
                }
a {
   text-decoration:none 
}
</style>
<?php include '../header.php';?>
<div class="container-fluid">
<div class="item blanco">
<?php include '../menu.php';?>
</div>
    <div class="item white">
<center>
<p><FONT COLOR="orange">El Antiguo Testamento | DANIEL</FONT></p>
<h3>DANIEL</h3>
<p>
</p>
<br><br>
<form>
<select name="select2" style="width:25%;" onchange="location = this.value;">
  <option value="">CAPITULO</option>
  <option value="1.php">1</option>
  <option value="2.php">2</option>
  <option value="3.php">3</option>
  <option value="4.php">4</option>
  <option value="5.php">5</option>
  <option value="6.php">6</option>
  <option value="7.php">7</option>
  <option value="8.php">8</option>
  <option value="9.php">9</option>
  <option value="10.php">10</option>
  <option value="11.php">11</option>
  <option value="12.php">12</option>
</select>
</form>
<br><br>
<hr style="width:50%; margin: auto;" />
<p><a href="../ester/plus.php" style="text-decoration:none">Anterior</a> | <a href="1.php" style="text-decoration:none">Siguiente</a></p>
<hr style="width:50%; margin: auto;" />
</center>
</div>
<div class="item blanco">
<?php include '../jc.php';?>
</div>
</div>
<?php include '../fuente.php';?>
</body>
</html>