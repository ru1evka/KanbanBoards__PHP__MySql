<div class="footer_conteiner">
    <div class="footer_flex_elements">
        <?php
        $mysql = new mysqli("localhost", "root", "root", "card");
        $mysql->query("SET NAMES 'utf8'");

        $result = $mysql->query('SELECT * FROM `backlog`');
        $num_rows = $result->fetch_all(MYSQLI_ASSOC);
        $count = count($num_rows);
        $mysql->close();
        ?>
        <div class="footer_active">Active tasks: <?php echo $count ?>
        </div>
        <?php
        $mysql = new mysqli("localhost", "root", "root", "card");
        $mysql->query("SET NAMES 'utf8'");

        $result = $mysql->query('SELECT * FROM `finished`');
        $num_rows = $result->fetch_all(MYSQLI_ASSOC);
        $count = count($num_rows);
        $mysql->close();
        ?>
        <div class="footer_finished">Finished tasks: <?php echo $count ?>
        </div>
    </div>
    <div class="footer_name_year">Kanban board by <'NAME'>, <'YEAR'>
    </div>
</div>