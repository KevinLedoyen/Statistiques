<?php

require '/model/article_model.php';

foreach ($reponse as $key => $value) {
	$reponse[$key]['titre'] = str_replace('ticle', 'tacle', $value['titre']);
}

require '/vue/article_vue.php';

?>