<div class="container grid">
<?php
foreach($images as $image){
    echo "<div class='flex'>";
    echo "$image->id";
    echo "<img src='./upload/$image->imagem' alt=''>";
    echo "$image->data";
    echo "</div>";
}
?>
</div>