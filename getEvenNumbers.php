<html>
	<head>
		<title>Get Even Numbers</title>
	</head>
	<body>
		<form action="getEvenNumbers.php" method="get">
            Number: <input type="text" name="in"><br>
            <input type="submit">
        </form>
		<?php
			$intN = $_GET["in"];
			echo "All evens";
			echo "\n";
			for ($i = 0; $i <= $intN; $i++) {
				if ($i % 2 == 0) {
					echo $i." ";
				}
			}
		?>
	</body>
</html>