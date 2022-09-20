<?php

// variabile con un paragrafo
$text = 'Il Lonfo non vaterca né gluisce
        e molto raramente barigatta,
        ma quando soffia il bego a bisce bisce
        sdilenca un poco e gnagio s’archipatta.

        È frusco il Lonfo! È pieno di lupigna
        arrafferia malversa e sofolenta!
        Se cionfi ti sbiduglia e ti arrupigna
        se lugri ti botalla e ti criventa.
        Eppure il vecchio Lonfo ammargelluto
        che bete e zugghia e fonca nei trombazzi
        fa lègica busìa, fa gisbuto;';

// lunghezza del paragrafo
$length = strlen($text);

// salvo in Get la parola da censurare da usare nella query string

$badWord = $_GET['word'];
// $newWord = $_GET['replace'];

$newText = str_replace($badWord, '***' , $text , $count);
$newLength = strlen($newText);

?>

<h1>Il Lonfo</h1>
<p> <?php echo $text; ?> </p>
<p> <strong> il paragrafo è composto da <?php echo $length; ?> caratteri. </strong></p>
<br>
<h1>Il Lonfo Modificato</h1>
<p> <?php echo $newText ?> </p>
<p> <strong> il paragrafo è composto da <?php echo $newLength; ?> caratteri. </strong></p>
<p> la parola era presente  <?= $count ?> volte </p>

