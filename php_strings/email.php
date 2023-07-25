<?php
// <<<END is a delimiter; you can write anything in the END place; with heredoc its like using "" and nowdoc '', so the variable is ignored
function generateEmail(string $name) : void
{
    $emailContent = <<<END
    Hello, $name !

    We are calling for 
    {reason of contact}

    {signature}'
    
    END;

    echo $emailContent;
}

generateEmail('Lívia Menato');