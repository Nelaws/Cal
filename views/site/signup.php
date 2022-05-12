<div class="container">
    <h2>Регистрация нового пользователя</h2>
    <h3><?= $massage ?? ''; ?></h3>
    <form method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="login" placeholder="Login">
        <input type="text" name="password" placeholder="Insert password">
        <button>Sign in</button>
    </form>
</div>