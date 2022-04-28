<h1>Список категорий</h1>
<?php foreach($categories as $item):?>
    <h2><?=$item['title']?></h2>
    <p><?=$item['description']?></p>
    <p>Количество новостей <a href="<?=route('CategoryPath', ['id' => $item['id']])?>"><?=count($item['news'])?></a></p>
<?php endforeach?>