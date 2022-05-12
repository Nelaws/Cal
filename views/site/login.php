<div class="container">
    <h2>Авторизация</h2>
    <h3><?= $message ?? ''; ?></h3>
    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
        if (!app()->auth::check()):
    ?>
    <form method="post">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <button>Войти</button>
    </form>
</div>
<?php endif;
