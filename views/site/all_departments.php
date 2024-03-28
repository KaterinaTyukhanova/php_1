<h1>Подразделения</h1>
<ol>
    <?php
    foreach ($departments as $department) {
        echo '<li>' . $department->name . '</li>';
    }
    ?>
</ol>