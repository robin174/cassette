<?php 
    $values = get_field('quick_summary');
    if ($values){ 
    echo '<ul>';
    foreach($values as $value){
        echo '<li>'.$value['summary_point'].'</li>'; 
    }
    echo '</ul>';
} ?>

