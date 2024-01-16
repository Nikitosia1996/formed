<?php
$protocol_akusherstvo = "SELECT * FROM protocol_akusherstvo ";
$result_protocol_akusherstvo=mysqli_query($con, $protocol_akusherstvo) or die ( mysqli_error($con));
for ($data_protocol_akusherstvo = []; $row = mysqli_fetch_assoc($result_protocol_akusherstvo); $data_protocol_akusherstvo[] = $row);
?>

<?php
$protocol_allergologiya = "SELECT * FROM protocol_allergologiya ";
$result_protocol_allergologiya=mysqli_query($con, $protocol_allergologiya) or die ( mysqli_error($con));
for ($data_protocol_allergologiya = []; $row = mysqli_fetch_assoc($result_protocol_allergologiya); $data_protocol_allergologiya[] = $row);
?>

<?php
$protocol_anesteziologiya = "SELECT * FROM protocol_anesteziologiya ";
$result_protocol_anesteziologiya=mysqli_query($con, $protocol_anesteziologiya) or die ( mysqli_error($con));
for ($data_protocol_anesteziologiya = []; $row = mysqli_fetch_assoc($result_protocol_anesteziologiya); $data_protocol_anesteziologiya[] = $row);
?>

<?php
$protocol_bsk= "SELECT * FROM protocol_bsk ";
$result_protocol_bsk=mysqli_query($con, $protocol_bsk) or die ( mysqli_error($con));
for ($data_protocol_bsk = []; $row = mysqli_fetch_assoc($result_protocol_bsk); $data_protocol_bsk[] = $row);
?>

<?php
$protocol_dermatovenerologiya = "SELECT * FROM protocol_dermatovenerologiya ";
$result_protocol_dermatovenerologiya=mysqli_query($con, $protocol_dermatovenerologiya) or die ( mysqli_error($con));
for ($data_protocol_dermatovenerologiya = []; $row = mysqli_fetch_assoc($result_protocol_dermatovenerologiya); $data_protocol_dermatovenerologiya[] = $row);
?>

<?php
$protocol_endokrinologiya = "SELECT * FROM protocol_endokrinologiya ";
$result_protocol_endokrinologiya=mysqli_query($con, $protocol_endokrinologiya) or die ( mysqli_error($con));
for ($data_protocol_endokrinologiya = []; $row = mysqli_fetch_assoc($result_protocol_endokrinologiya); $data_protocol_endokrinologiya[] = $row);
?>

<?php
$protocol_gastroenterologiya = "SELECT * FROM protocol_gastroenterologiya ";
$result_protocol_gastroenterologiya=mysqli_query($con, $protocol_gastroenterologiya) or die ( mysqli_error($con));
for ($data_protocol_gastroenterologiya = []; $row = mysqli_fetch_assoc($result_protocol_gastroenterologiya); $data_protocol_gastroenterologiya[] = $row);
?>

<?php
$protocol_gematologiya = "SELECT * FROM protocol_gematologiya ";
$result_protocol_gematologiya=mysqli_query($con, $protocol_gematologiya) or die ( mysqli_error($con));
for ($data_protocol_gematologiya = []; $row = mysqli_fetch_assoc($result_protocol_gematologiya); $data_protocol_gematologiya[] = $row);
?>

<?php
$protocol_infection_zabolevaniya = "SELECT * FROM protocol_infection_zabolevaniya ";
$result_protocol_infection_zabolevaniya=mysqli_query($con, $protocol_infection_zabolevaniya) or die ( mysqli_error($con));
for ($data_protocol_infection_zabolevaniya = []; $row = mysqli_fetch_assoc($result_protocol_infection_zabolevaniya); $data_protocol_infection_zabolevaniya[] = $row);
?>

<?php
$protocol_khirurgiya = "SELECT * FROM protocol_khirurgiya";
$result_protocol_khirurgiya=mysqli_query($con, $protocol_khirurgiya) or die ( mysqli_error($con));
for ($data_protocol_khirurgiya = []; $row = mysqli_fetch_assoc($result_protocol_khirurgiya); $data_protocol_khirurgiya[] = $row);
?>

<?php
$protocol_nefrologiya = "SELECT * FROM protocol_nefrologiya ";
$result_protocol_nefrologiya=mysqli_query($con, $protocol_nefrologiya) or die ( mysqli_error($con));
for ($data_protocol_nefrologiya = []; $row = mysqli_fetch_assoc($result_protocol_nefrologiya); $data_protocol_nefrologiya[] = $row);
?>

<?php
$protocol_nevrologiya = "SELECT * FROM protocol_nevrologiya ";
$result_protocol_nevrologiya=mysqli_query($con, $protocol_nevrologiya) or die ( mysqli_error($con));
for ($data_protocol_nevrologiya = []; $row = mysqli_fetch_assoc($result_protocol_nevrologiya); $data_protocol_nevrologiya[] = $row);
?>

<?php
$protocol_novoobrazovaniya = "SELECT * FROM protocol_novoobrazovaniya ";
$result_protocol_novoobrazovaniya=mysqli_query($con, $protocol_novoobrazovaniya) or die ( mysqli_error($con));
for ($data_protocol_novoobrazovaniya = []; $row = mysqli_fetch_assoc($result_protocol_novoobrazovaniya); $data_protocol_novoobrazovaniya[] = $row);
?>

<?php
$protocol_oftalmologiya = "SELECT * FROM protocol_oftalmologiya ";
$result_protocol_oftalmologiya=mysqli_query($con, $protocol_oftalmologiya) or die ( mysqli_error($con));
for ($data_protocol_oftalmologiya = []; $row = mysqli_fetch_assoc($result_protocol_oftalmologiya); $data_protocol_oftalmologiya[] = $row);
?>

<?php
$protocol_otorinolaringologiya = "SELECT * FROM protocol_otorinolaringologiya ";
$result_protocol_otorinolaringologiya=mysqli_query($con, $protocol_otorinolaringologiya) or die ( mysqli_error($con));
for ($data_protocol_otorinolaringologiya = []; $row = mysqli_fetch_assoc($result_protocol_otorinolaringologiya); $data_protocol_otorinolaringologiya[] = $row);
?>

<?php
$protocol_palliativnaya_pomosh = "SELECT * FROM protocol_palliativnaya_pomosh ";
$result_protocol_palliativnaya_pomosh=mysqli_query($con, $protocol_palliativnaya_pomosh) or die ( mysqli_error($con));
for ($data_protocol_palliativnaya_pomosh = []; $row = mysqli_fetch_assoc($result_protocol_palliativnaya_pomosh); $data_protocol_palliativnaya_pomosh[] = $row);
?>

<?php
$protocol_psihiatriya = "SELECT * FROM protocol_psihiatriya ";
$result_protocol_psihiatriya=mysqli_query($con, $protocol_psihiatriya) or die ( mysqli_error($con));
for ($data_protocol_psihiatriya = []; $row = mysqli_fetch_assoc($result_protocol_psihiatriya); $data_protocol_psihiatriya[] = $row);
?>

<?php
$protocol_pulmonologiya = "SELECT * FROM protocol_pulmonologiya ";
$result_protocol_pulmonologiya=mysqli_query($con, $protocol_pulmonologiya) or die ( mysqli_error($con));
for ($data_protocol_pulmonologiya = []; $row = mysqli_fetch_assoc($result_protocol_pulmonologiya); $data_protocol_pulmonologiya[] = $row);
?>

<?php
$protocol_revmatologiya = "SELECT * FROM protocol_revmatologiya";
$result_protocol_revmatologiya=mysqli_query($con, $protocol_revmatologiya) or die ( mysqli_error($con));
for ($data_protocol_revmatologiya = []; $row = mysqli_fetch_assoc($result_protocol_revmatologiya); $data_protocol_revmatologiya[] = $row);
?>

<?php
$protocol_stomatologiya = "SELECT * FROM protocol_stomatologiya";
$result_protocol_stomatologiya=mysqli_query($con, $protocol_stomatologiya) or die ( mysqli_error($con));
for ($data_protocol_stomatologiya = []; $row = mysqli_fetch_assoc($result_protocol_stomatologiya); $data_protocol_stomatologiya[] = $row);
?>

<?php
$protocol_transplantaciya = "SELECT * FROM protocol_transplantaciya ";
$result_protocol_transplantaciya=mysqli_query($con, $protocol_transplantaciya) or die ( mysqli_error($con));
for ($data_protocol_transplantaciya = []; $row = mysqli_fetch_assoc($result_protocol_transplantaciya); $data_protocol_transplantaciya[] = $row);
?>

<?php
$protocol_travmotologiya = "SELECT * FROM protocol_travmotologiya";
$result_protocol_travmotologiya=mysqli_query($con, $protocol_travmotologiya) or die ( mysqli_error($con));
for ($data_protocol_travmotologiya = []; $row = mysqli_fetch_assoc($result_protocol_travmotologiya); $data_protocol_travmotologiya[] = $row);
?>

<?php
$protocol_urologiya = "SELECT * FROM protocol_urologiya ";
$result_protocol_urologiya=mysqli_query($con, $protocol_urologiya) or die ( mysqli_error($con));
for ($data_protocol_urologiya = []; $row = mysqli_fetch_assoc($result_protocol_urologiya); $data_protocol_urologiya[] = $row);
?>

<?php
$protocol_zpp = "SELECT * FROM protocol_zpp ";
$result_protocol_zpp=mysqli_query($con, $protocol_zpp) or die ( mysqli_error($con));
for ($data_protocol_zpp = []; $row = mysqli_fetch_assoc($result_protocol_zpp); $data_protocol_zpp[] = $row);
?>

<style>
    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 12px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myUL {
        list-style-type: none;
        padding: 0;
        margin: 0;
        width:100%;

    }

    #myUL li a {
        border: 1px solid #ddd;
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block
    }

    #myUL li a:hover:not(.header) {
        background-color: #eee;
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 100%;
        }
    }
</style>

<div class="col-12">


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Клинические протоколы</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#akush">Акушерство, гинекология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#allergol">Аллергология, иммунология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#anest">Анестезиология, реаниматология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#bsk">Болезни системы кровообращения</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#gastro">Гастроэнтерология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#gematolog">Гематология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dermat">Дерматовенерология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#zpp">Заболевания перинатального периода</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#infect">Инфекционные заболевания</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#nevr">Неврология, нейрохирургия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#nefr">Нефрология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#novoobr">Новообразования</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#otorino">Оториноларингология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#oftalmolog">Офтальмология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#pal">Паллиативная помощь</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#psih">Психиатрия, наркология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#pulmo">Пульмонология, фтизиатрия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#revmo">Ревматология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#stomatol">Стоматология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#travm">Травматология, ортопедия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#transpl">Трансплантация органов и тканей</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#urolog">Урология</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#khirurg">Хирургия</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#endokrin">Эндокринология, нарушения обмена веществ</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="akush" class="container tab-pane active"><br>
                <input type="text" id="myInput" onkeyup="myFunction('akush')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_akusherstvo as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="allergol" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('allergol')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_allergologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="anest" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('anest')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_anesteziologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="bsk" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('bsk')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_bsk as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="dermat" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('dermat')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_dermatovenerologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="endokrin" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('endokrin')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_endokrinologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="gastro" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('gastro')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_gastroenterologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="gematolog" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('gematolog')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_gematologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="infect" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('infect')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_infection_zabolevaniya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="khirurg" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('khirurg')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_khirurgiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="nefr" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('nefr')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_nefrologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="nevr" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('nevr')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_nevrologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="novoobr" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('novoobr')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_novoobrazovaniya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="oftalmolog" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('oftalmolog')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_oftalmologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="otorino" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('otorino')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_otorinolaringologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="pal" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('pal')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_palliativnaya_pomosh as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="psih" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('psih')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_psihiatriya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="pulmo" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('pulmo')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_pulmonologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="revmo" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('revmo')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_revmatologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="stomatol" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('stomatol')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_stomatologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="transpl" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('transpl')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_transplantaciya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="travm" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('travm')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_travmotologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="urolog" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('urolog')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_urologiya as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="zpp" class="container tab-pane"><br>
                <input type="text" id="myInput" onkeyup="myFunction('zpp')" placeholder="Что ищем?" title="Type in a name">

                <ul id="myUL">

                    <?php foreach ($data_protocol_zpp as $user) { ?>
                        <li><a href="<?= $user['file']?>" target="_blank"><?= $user['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


<script src="dist/js/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>


    function myFunction(section) {
        var input, filter, ul, li, a, i, txtValue;
        let sect = document.getElementById(section);
        input = sect.getElementsByTagName("input");
        filter = input[0].value.toUpperCase();
        ul = sect.getElementsByTagName("ul");
        li = ul[0].getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    let itemMenu = document.querySelector("[href='index.php?clinical_protocols']");
    itemMenu.style = "color: #148A8A;";
  $(document).ready(function () {
    $('#tClassifiers').DataTable();
  });
</script>


    <!-- КОНЕЦ ПОДКЛЮЧЕНИЕ API -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










