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
        echo '<p><a class="btn btn-success" href='.Url::to(['new_data/level_edit','id'=>$level->id]).'>Дополнить</a></p>';
        echo '</td>';
        /*Список монстрой уровня
         * echo '<td>';
        echo $world -> name.'<br>';
        echo 'Сложность '.$world -> dificult.'<br>';
        echo 'Количесто уровней '.$world -> getLevels()->count();
        echo '<p><a class="btn btn-success" href='.Url::to(['site/level_list','id'=>$world->id]).'>Список уровней</a></p>';
        echo '</td>';*/
        echo '</tr>';
    }
    ?>
</table>