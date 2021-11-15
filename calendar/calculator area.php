<html>
<meta charset="utf-8">

<body>

    <form method="get">
        <h2>三角形</h2>
        <input name="type" type="hidden" value="t">
        <input name="base" type="number" placeholder="base" required>M
        <input name="height" type="number" placeholder="height" required>M
        <button>Submit</button>
        <br />Area = <?php echo $_GET['type'] == 't' ? ($_GET['base'] * $_GET['height']) / 2 . 'M²' : ''; ?>
    </form>

    <form method="get">
        <h2>矩形</h2>
        <input name="type" type="hidden" value="r">
        <input name="width" type="number" placeholder="width" required>M

        <input name="height" type="number" placeholder="height" required>M
        <button>Submit</button>
        <br />Area = <?php echo $_GET['type'] == 'r' ? $_GET['width'] * $_GET['height'] . 'M²' : ''; ?>
    </form>


    <form method="get">
        <h2>圆</h2>
        <input name="type" type="hidden" value="c">
        <input name="receives" type="number" placeholder="receives" required>M
        <button>Submit</button>
        <br />Area =<?php echo $_GET['type'] == 'c' ? PI() * $_GET['receives'] * $_GET['receives'] . 'M²' : ''; ?>

    </form>
</body>

</html>