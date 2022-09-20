<?php

// variabile con un paragrafo
$text = 'Il Lonfo non vaterca né gluisce
        e molto raramente barigatta,
        ma quando soffia il bego a bisce bisce
        sdilenca un poco e gnagio s’archipatta.

        È frusco il Lonfo! È pieno di lupigna
        arrafferia malversa e sofolenta!
        Se cionfi ti sbiduglia e ti arrupigna
        se lugri ti botalla e ti criventa.';

$length = strlen($text);

?>

<h1>Il Lonfo</h1>
<p> <?php echo $text; ?> </p>
<p> <strong> il paragrafo è composto da <?php echo $length; ?> caratteri. </strong></p>
