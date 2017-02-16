<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<style>
    input[type=text] {
        width: 300px;
    }
</style>
</head>
<body>
<p id="paragraph" style="display: none"><?php	$myfile = fopen( "podaci.txt", "r" ) or die( "Unable to open file!" ); echo fgets( $myfile ); fclose( $myfile ); ?></p>
<form action="process.php" method="post">

    <input type="text" name="kurs" id="kurs">
    <input type="submit">

</form>

<script>
    var current = document.getElementById("kurs");
    current.value = document.getElementById("paragraph").innerHTML;
</script>
</body>
</html>