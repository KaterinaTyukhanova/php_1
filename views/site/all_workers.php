<h1>Сотрудники</h1>
<ol>
    <?php
    foreach ($workers as $worker) {
        echo '<li>' . $worker->surname . ' ' . $worker->name . ' ' . $worker->patronymic .'</li>';
    }
    ?>
</ol>

<style>
    ol {
        list-style-type: circle;
    }
</style>