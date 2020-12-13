
<?php
$file = fopen("count.txt", "r" );




$filetext = fread( $file, 20 );
$t=$filetext;
fclose( $file );
$file = fopen("count.txt", "w" );

$t=$t+1;
fwrite($file,$t);
fclose( $file );

for($i=1;$i<4;$i++)
{
$file = fopen("counts.txt", "r" );

$filetext = fread( $file, 20 );
$t=$filetext;
fclose( $file );
$file = fopen("countS.txt", "w" );

if($t==45)
{
$t=0;
}
$t=$t+1;

fwrite($file,$t);
fclose( $file );

}


?>