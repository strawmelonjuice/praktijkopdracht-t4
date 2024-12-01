<?php
function headerTemplate($title, $scripts = [])
{
    ?>
  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="/styles.css" rel="stylesheet" />
      <title><?php echo $title; ?>&ensp;&ndash;&ensp;DierenZiekenHuis Den Bosch</title>
      <?php foreach ($scripts as $script) {
          echo "<script src='$script'></script>";
      } ?>
</head>
<body>
  <nav class="top-0 overflow-hidden m-0 h-12 bg-dthb-1">
		  <!--<span id="side-menu-opener">☰</span>-->
		  <img src="https://dierentehuisdenbosch.nl/wp-content/themes/_s-master/img/logo-liggend.svg"
			class="bg-dthb-2 p-[6px] top-0 max-w-[10vw] absolute left-[40vw] right-[40vw] h-10 mt-[2px] rounded-l-full rounded-r-full" />
	  	<?php navLink(name: "Home", url: "/"); ?>
	  	<?php navLink(name: "Vrijwilligersbestand", url: "/inside"); ?>
	  </nav>

			<!-- <nav id="side-nav">
					<span id="side-menu-closer"><button>&times;</button></span>
								<a href="./Pages/toekomst.html">Onze toekomstvisie</a>

					<a href="">Afstand doen van uw huisdier</a>
					<a href="">Wordt een vrijwilliger</a>
				</nav> -->
<?php
}

function footerTemplate()
{
    echo <<<EOT
<footer>
    <p>&copy; 2021 DierenZiekenHuis Den Bosch</p>
</footer>
</body>
</html>

EOT;
}

function navLink($name, $url)
{
    $current = "";
    if ($url === $_SERVER["REQUEST_URI"]) {
        $current = "current";
    }
    ?>
<a href="<?php echo $url; ?>" class="hover:bg-dthb-2 hover:text-black m-3 float-right text-dthb-2 bg-dthb-3 text-center justify-center text-sm align-middle py-3.5 px-4 rounded-xl p-0 h-8 <?php echo $current; ?>" ><?php echo $name; ?></a><?php
}
