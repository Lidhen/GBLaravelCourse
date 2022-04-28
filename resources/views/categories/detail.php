<h1> Новости категории: <?=$category['title']?></h1>
<p><?=$category['description']?></p>
<?php foreach($news as $item):?>
<div>
    <h3><a href="<?=route('NewsDetail', [ 'category' => $category['id'], 'id' => $item['id'] ])?>"><?=$item['title']?></a></h3>
    <p>Дата: <?=$item['date']?></p>
    <p>Автор: <?=$item['author']?></p>
    <p><?=$item['description']?></p>
</div>
<?php endforeach;?>
