<div class="container" id="login">
    <h2>Авторизация</h2>
    <h3><?= $message ?? ''; ?></h3>
    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
        if (!app()->auth::check()):
    ?>
    <form method="post">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <button style="background-color: #2D2E2B; color: white; border-radius: 5px;padding: 5px;margin: 5px;">Войти</button>
    </form>
</div>
<?php endif;
