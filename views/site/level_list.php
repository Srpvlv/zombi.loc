<?php
use yii\helpers\Url;

?>

<br>
<?php
echo '<h3>'.$selectWorld -> name.'</h3><br>';
echo '<img src="/web/uploads/'.$selectWorld->img.'" alt="World icon" /><br>';
echo 'Сложность '.$selectWorld -> dificult.'<br>';
echo 'Количесто уровней '.$selectWorld -> getLevels()->count();
?>
<?= '<p><a class="btn btn-lg btn-success" href='.Url::to(['new_data/level']).'>Добавить уровень</a></p>' ?>
<h3>Список уровней</h3>
<table class="table">
    <?php
    foreach ($levelList as $level)
    {
        echo '<tr>';
        echo '<td><h4>'.$level->name.'</h4><br>';
        echo '<b>Тип:</b> '.$level->type.'<br>';
        if ($level->special == null)
        {
            echo '<b>Дополнительная информация:</b><br>Нет<br>';
        }
        else
        {
            echo '<b>Дополнительная информация:</b><br>'.$level->special.'<br>';
        }
        echo '<p><a class="btn btn-primary" href='.Url::to(['new_data/level_edit','id'=>$level->id]).'>Дополнить</a></p>';
        echo '</td>';
        foreach ($level->monsters as $monsterData)
        {
            echo '<td>';
            echo '<img src="/web/uploads/'.$monsterData->monsterData->monsterImg.'" alt="World icon" /><br>';
            echo $monsterData->monsterData->monsterName.'<br>';
            echo $monsterData->col;
            echo '</td>';
        }
        echo '<td>';
        echo '<p><a class="btn btn-success" href='.Url::to(['new_data/level_monster','id'=>$level->id]).'>Добавить<br>монстра</a></p>';
        echo '</td>';

        echo '</tr>';
    }
    ?>
</table>