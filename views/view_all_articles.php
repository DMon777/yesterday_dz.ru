<?php 
mb_internal_encoding("UTF-8");
ob_start();
foreach($art_obj as $key => $article):?>


	 <h2><?=$article -> title;?></h2>
	 <p><?=mb_substr($article -> article,0,200);?>...</p>
	 <a href = "?id=<?=$article -> id;?>&class_name=Article&action=One">Читать далее...</a>
<?php
endforeach;
$page = ob_get_contents();
ob_end_clean();
echo $page;
?>
