<html>

<meta charset="UTF-8">

<style>
h1.round {
  border: 4px solid Crimson;
  border-radius: 12px; 
}
</style>
<body>
<h1 class="round">Ovo je moja PHP stranica</h1>
Dobrodošao  <?php echo $_GET["name"]; ?> <?php echo $_GET["email"]; ?><br> <?php if($_GET["suh"]=="k") echo "Tvoja omiljena hrana je Kulen" ;if($_GET["suh"]=="spek") echo "Tvoja omiljena hrana je Špek";if($_GET["suh"]=="s") echo "Tvoja omiljena hrana je Šunka";if($_GET["suh"]=="ko") echo "Tvoja omiljena hrana su kobasica"; ?>

</body>
</html>