<?php
use yii\helpers\Url;

$this->title = 'Zombi DB';
?>
<h3>Список миров</h3>
<br>
<table>
<?php
    foreach ($worldList as $world)
    {
        echo '<tr>';
        echo '<td>';//img
        echo '<img src="/web/uploads/'.$world->img.'" alt="World icon" />';
        echo '</td>';
        echo '<td>';//worl data
        echo $world -> name.'<br>';
        echo 'Сложность '.$world -> dificult.'<br>';
        echo 'Количесто уровней '.$world -> getLevels()->count();
        echo '<p><a class="btn btn-success" href='.Url::to(['site/level_list','id'=>$world->id]).'>Список уровней</a></p>';
        echo '</td>';
        echo '</tr>';
    }
?>
</table>