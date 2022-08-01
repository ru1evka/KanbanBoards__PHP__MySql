<?php
function clickAddCard()
{
    if (isset($_POST['data_backlog'])) {

        $name = $_POST['data_backlog'];
        if ($name == '') {
            header('location: index.php');
        } else {
            $mysql = new mysqli("localhost", "root", "root", "card");
            $mysql->query("SET NAMES 'utf8'");

            $mysql->query("INSERT INTO `backlog` (`data_backlog`) VALUES ('$name')");
            $mysql->close();
            header('location: index.php');
        }
    }
};
function clickAddCardReady()
{
    if (isset($_POST['data_ready'])) {

        $nameReady = $_POST['data_ready'];

        $mysql = new mysqli("localhost", "root", "root", "card");
        $mysql->query("SET NAMES 'utf8'");

        $mysql->query("INSERT INTO `ready` (`data_ready`) VALUES ('$nameReady')");
        $mysql->close();
        header('location: index.php');
    }
};
function clickAddCardProgres()
{
    if (isset($_POST['data_progres'])) {

        $nameProgres = $_POST['data_progres'];
        $mysql = new mysqli("localhost", "root", "root", "card");
        $mysql->query("SET NAMES 'utf8'");

        $mysql->query("INSERT INTO `progres` (`data_progres`) VALUES ('$nameProgres')");
        $mysql->close();
        header('location: index.php');
    }
};
function clickAddCardFinished()
{
    if (isset($_POST['data_finished'])) {

        $nameFinished = $_POST['data_finished'];
        $mysql = new mysqli("localhost", "root", "root", "card");
        $mysql->query("SET NAMES 'utf8'");

        $mysql->query("INSERT INTO `finished` (`data_finished`) VALUES ('$nameFinished')");
        $mysql->close();
        header('location: index.php');
    }
}
?>

<div class="main_window">
    <div class="flex_elements">
        <div class="backlog">
            <h3 class="backlog_title">Backlog</h3>
            <?php

            // Подключаюсь к БД, и создаю условие для удаления даных из БД через id записи. 
            clickAddCard();
            $mysql = new mysqli("localhost", "root", "root", "card");
            $mysql->query("SET NAMES 'utf8'");

            // Создаю условие для уданение данных из таблицы 'backlog' через его id.
            if (isset($_GET['del'])) {
                $id = $_GET['del'];

                $query = "DELETE FROM `backlog` WHERE id=$id";
                mysqli_query($mysql, $query) or die(mysqli_error($mysql));
                header('location: index.php');
            }

            // Подключаюсь к таблице 'backlog' и передаю её значения в массив. 
            // Делаю перебор массива для отображения данных таблицы на экран.

            $result = $mysql->query("SELECT * FROM `backlog`");
            while ($data = $result->fetch_assoc()) { ?>

                <div class="backlog_data">
                    <p class="backlog_text"><?php echo $data['data_backlog'] ?>
                        <a class="style_img" href="?del=<?= $data['id'] ?>">
                            <img class="img_delete" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/000000/external-delete-video-and-movie-tanah-basah-basic-outline-tanah-basah.png" alt="Удалить">
                        </a>
                    </p>
                </div>
            <?php
            }
            $mysql->close();
            ?>
            <div class="backlog_btn_AddCard">+ Add card</div>
            <form action="" method="Post">
                <input class="backlog_message" type="text" name="data_backlog" placeholder="Введите задание">
                <button class="backlog_btn_submit" type="submit">Submit</button>
            </form>
        </div>

        <div class="Ready">
            <h3 class="Ready_title">Ready</h3>

            <?php
            // Подключаюсь к БД, и создаю условие для удаления даных из БД через id записи. 
            clickAddCardReady();
            $mysql = new mysqli("localhost", "root", "root", "card");
            $mysql->query("SET NAMES 'utf8'");
            // Создаю условие для уданение данных из таблицы 'ready' через его id.
            if (isset($_GET['deleteReady'])) {
                $idReady = $_GET['deleteReady'];

                $queryReady = "DELETE FROM `ready` WHERE id=$idReady";
                mysqli_query($mysql, $queryReady) or die(mysqli_error($mysql));
                header('location: index.php');
            }
            // Подключаюсь к таблице 'ready' и передаю её значения в массив. 
            // Делаю перебор массива для отображения данных таблицы на экран.
            // При помощи GET запроса передаю значение id из таблицы для удаления данных.
            $result = $mysql->query("SELECT * FROM `ready`");
            while ($dataReady = $result->fetch_assoc()) { ?>

                <div class="Ready_data">
                    <p class="Ready_text"><?php echo $dataReady['data_ready'] ?>
                        <a class="style_img" href="?deleteReady=<?= $dataReady['id'] ?>">
                            <img class="img_delete" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/000000/external-delete-video-and-movie-tanah-basah-basic-outline-tanah-basah.png" alt="Удалить">
                        </a>
                    </p>
                </div>
            <?php
            }
            $mysql->close();
            ?>
            <div class="Ready_btn_AddCard">+ Add card</div>
            <form action="" method="Post">
                <select class="Ready_message" name="data_ready">
                    <?php
                    // Подключаюсь к таблице 'backlog' и делаю передор массива для отображения данных в выподаюшем списке.
                    $mysql = new mysqli("localhost", "root", "root", "card");
                    $mysql->query("SET NAMES 'utf8'");

                    $result = $mysql->query("SELECT * FROM `backlog`");
                    while ($data = $result->fetch_assoc()) { ?>
                        <option><?php echo $data['data_backlog'] ?></option>
                    <?php
                    }
                    $mysql->close();
                    ?>
                </select>
                <button class="Ready_btn_submit" type="submit">Submit</button>
            </form>
        </div>

        <div class="Progres">
            <h3 class="Progres_title">In Progres</h3>

            <?php
            // Подключаюсь к БД, и создаю условие для удаления даных из БД через id записи. 
            clickAddCardProgres();
            $mysql = new mysqli("localhost", "root", "root", "card");
            $mysql->query("SET NAMES 'utf8'");
            // Создаю условие для уданение данных из таблицы 'progress' через его id.
            if (isset($_GET['deleleProgres'])) {
                $idProgres = $_GET['deleleProgres'];

                $queryProgres = "DELETE FROM `progres` WHERE id=$idProgres";
                mysqli_query($mysql, $queryProgres) or die(mysqli_error($mysql));
                header('location: index.php');
            }
            // Подключаюсь к таблице 'progres' и передаю её значения в массив. 
            // Делаю перебор массива для отображения данных таблицы на экран.
            // При помощи GET запроса передаю значение id из таблицы для удаления данных.
            $resultProgres = $mysql->query("SELECT * FROM `progres`");
            while ($dataCardProgres = $resultProgres->fetch_assoc()) { ?>

                <div class="Progres_data">
                    <p class="Progres_text"><?php echo $dataCardProgres['data_progres'] ?>
                        <a class="style_img" href="?deleleProgres=<?= $dataCardProgres['id'] ?>">
                            <img class="img_delete" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/000000/external-delete-video-and-movie-tanah-basah-basic-outline-tanah-basah.png" alt="Удалить">
                        </a>
                    </p>
                </div>
            <?php
            }
            $mysql->close();
            ?>

            <div class="Progres_btn_AddCard">+ Add card</div>
            <form action="" method="Post">
                <select class="Progres_message" name="data_progres">
                    <?php
                    // Подключаюсь к таблице 'ready' и делаю передор массива для отображения данных в выподаюшем списке.
                    $mysql = new mysqli("localhost", "root", "root", "card");
                    $mysql->query("SET NAMES 'utf8'");

                    $result = $mysql->query("SELECT * FROM `ready`");
                    while ($dataProgres = $result->fetch_assoc()) { ?>
                        <option><?php echo $dataProgres['data_ready'] ?></option>
                    <?php
                    }
                    $mysql->close();
                    ?>
                </select>
                <button class="Progres_btn_submit" type="submit">Submit</button>
            </form>
        </div>

        <div class="Finished">
            <h3 class="Finished_title">Finished</h3>
            <?php
            // Подключаюсь к БД, и создаю условие для удаления даных из БД через id записи. 
            clickAddCardFinished();
            $mysql = new mysqli("localhost", "root", "root", "card");
            $mysql->query("SET NAMES 'utf8'");
            // Создаю условие для уданение данных из таблицы 'finished' через его id.
            if (isset($_GET['deleleFinished'])) {
                $idFinished = $_GET['deleleFinished'];

                $queryProgres = "DELETE FROM `finished` WHERE id=$idFinished";
                mysqli_query($mysql, $queryProgres) or die(mysqli_error($mysql));
                header('location: index.php');
            }
            // Подключаюсь к таблице 'finished' и передаю её значения в массив. 
            // Делаю перебор массива для отображения данных таблицы на экран.
            // При помощи GET запроса передаю значение id из таблицы для удаления данных.
            $resultFinished = $mysql->query("SELECT * FROM `finished`");
            while ($dataCardFinished = $resultFinished->fetch_assoc()) { ?>

                <div class="Progres_data">
                    <p class="Progres_text"><?php echo $dataCardFinished['data_finished'] ?>
                        <a class="style_img" href="?deleleFinished=<?= $dataCardFinished['id'] ?>">
                            <img class="img_delete" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/000000/external-delete-video-and-movie-tanah-basah-basic-outline-tanah-basah.png" alt="Удалить">
                        </a>
                    </p>
                </div>
            <?php
            }
            $mysql->close();
            ?>
            <div class="Finished_btn_AddCard">+ Add card</div>
            <form action="" method="Post">
                <select class="Finished_message" name="data_finished">
                    <?php
                    // Подключаюсь к таблице 'progres' и делаю передор массива для отображения данных в выподаюшем списке.
                    $mysql = new mysqli("localhost", "root", "root", "card");
                    $mysql->query("SET NAMES 'utf8'");

                    $resultProgres = $mysql->query("SELECT * FROM `progres`");
                    while ($dataCardProgres = $resultProgres->fetch_assoc()) { ?>
                        <option><?php echo $dataCardProgres['data_progres'] ?></option>
                    <?php
                    }
                    $mysql->close();
                    ?>
                </select>
                <button class="Finished_btn_submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="./KanbanSector/Js/index1.js"></script>