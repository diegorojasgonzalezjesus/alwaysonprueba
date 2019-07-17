<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./home.php"><b>TRANSACCIONES</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!connection_status($_SESSION["user_id"])):?>
      <li><a href="./depositar.php">DEPOSITAR</a></li>
      <li><a href="./transferir.php">TRANSFERIR</a></li>
	  <li><a href="./saldodisponible.php">SALDO DISPONIBLE</a></li>
	  <li><a href="./saldohistorico.php">SALDO HISTORICO</a></li>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>