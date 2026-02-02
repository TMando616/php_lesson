<form action="form.php" method="GET">
    <label for="name">名前</label>
    <input type="text" name="name" id="name">

    <label for="age">年齢</label>
    <input type="text" name="age" id="age">

    <button type="submit">Submit</button>
</form>

<p>
    こんにちは
    <?php
        echo htmlspecialchars($_GET['name']);
    ?>
    さん
</p>
<p>
    あなたは
    <?php
        echo (int) $_GET['age'];
    ?>
    歳です。
</p>