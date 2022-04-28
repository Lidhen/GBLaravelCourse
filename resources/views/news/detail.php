<h1><?=$News['title']?></a></h1>
<p>Дата: <?=$News['date']?></p>
<p>Автор: <?=$News['author']?></p>
<p><?=$News['text']?></p>


<p><a href="<?=route('NewsList')?>">Вернуться в список новостей</a></p>