<h1>Список новостей</h1>

<?php foreach($newsList as $item):?>
<div>
    <h3><a href="<?=route('NewsDetail', [ 'category' => $item['cat_id'], 'id' => $item['id'] ])?>"><?=$item['title']?></a></h3>
    <p>Дата: <?=$item['date']?></p>
    <p>Автор: <?=$item['author']?></p>
    <p><?=$item['description']?></p>
</div>
<?php endforeach;?>

<p><a href="<?=route('CategoryList')?>">Новости по категориям</a></p>