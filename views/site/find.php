<div class="container">
    <h1 style="color: white">Список абонентов</h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th></th>
            <th>Ф.И.О</th>
            <th>Телефон</th>
            <th>Подразделение</th>
            <th>Подразделение</th>
            <th>Дата рождения</th>
            <th>Вид помещения</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($posts as $post=>$value): ?>
            <tr>
                <th><?= $post + 1 ?></th>
                <th><?= $value->name ?></th>
                <th><?= $value->number ?></th>
                <th><?= $value->unit ?></th>
                <th><?= $value->unit ?></th>
                <th><?= $value->birthday ?></th>
                <th><?= $value->type ?></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>