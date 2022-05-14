<div class="container" id="signup">
    <h2>Регистрация нового пользователя</h2>
    <h3><?= $massage ?? ''; ?></h3>
    <form method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="login" placeholder="Login">
        <input type="text" name="password" placeholder="Insert password">
        <button style="background-color: #2D2E2B; color: white; border-radius: 5px;padding: 5px;margin: 5px;">Sign in</button>
    </form>
</div>