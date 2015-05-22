

<?php 
ob_start();
foreach($art_obj as $key => $article):?>
	 <h2><?=$article -> title;?></h2>
	 <p><?=$article -> article;?></p>
<?php
endforeach;
$page = ob_get_contents();
ob_end_clean();
echo $page;
?>
<a href = "<?=$_SERVER['HTTP_REFERER']?>">Вернуться обратно</a>





