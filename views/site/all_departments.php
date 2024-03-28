<div class="depart">
    <h2>Все подразделения отдела кадров:</h2>
    <ul>
        <?php
        foreach ($departments as $department) {
            echo '<li>' . $department->name . '</li>';
        }
        ?>
    </ul>
</div>

<style>
    ul {
        list-style-type: circle;
        color: #071F5A;
    }
    h2 {
        text-align: center;
        color: #071F5A;
    }
    .depart {
        margin-top: 30px;
        min-height: 360px;
    }
</style>