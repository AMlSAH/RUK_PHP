<?php
$str = 'document.pdf';
if (str_ends_with($str, '.pdf')) {
    echo 'Заканчивается на .pdf';
} else {
    echo 'Не заканчивается на .pdf';
}
?>