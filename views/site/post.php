<h1>Список абонентов</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Text</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post=>$value): ?>
    <tr>
        <th><?= $post + 1 ?></th>
        <th><?= $value->title ?></th>
        <th><?= $value->text ?></th>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>