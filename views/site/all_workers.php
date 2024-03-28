<div class="worker">
    <h2>Все сотрудники отдела кадров:</h2>
    <ul>
        <?php
        foreach ($workers as $worker) {
            echo '<li>' . $worker->surname . ' ' . $worker->name . ' ' . $worker->patronymic .
                ' (' . $worker->gender . ' , ' . $worker->burn_date . ')' . '</li>';
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
    .worker {
        margin-top: 30px;
        min-height: 360px;
    }
</style>