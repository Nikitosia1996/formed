<?php include 'connection.php'; ?>
<style>
    .card1{
        cursor: pointer;
        height: 290px;
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        /*align-items: center;*/
        padding-left: 20px;
        justify-content: center;
        /*text-align: center;*/
        color: black;
        transition: all 0.5s ease-in;
    }
    .card1 {
        /*background: linear-gradient(to right, #134e5e, #71b280);*/
        background: url('/dist/img/17042023.jpg');
        background-repeat: no-repeat;
        background-color: #e0e0e2;

    }
    .card1:hover {
        opacity: 0.7;
        transform: scale(0.98);
    }
</style>






<section class="content">
      <div class="container-fluid">
<!--          <video width="320" height="240" controls>-->
<!--              <source src="mov_bbb.mp4" type="video/mp4">-->
<!--              Your browser does not support the video tag.-->
<!--          </video>-->
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-3 col-6">

            <!-- small box -->
            <div class="small-box bg-item">

              <div class="inner">
                <h3><?php
                    $array_names_subcateg = [];

                    $query = "SELECT * FROM subcategories";

                    $result=mysqli_query($con, $query) or die ( mysqli_error($con));

                    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

                    $i = 0;
                    foreach ($data as $key) {

                        $array_names_subcateg[$i++] = $key['name'];

                    }
                    $all_sum = 0;
                    foreach ($array_names_subcateg as $category => $value) {

                                $a = mysqli_query( $con, "SELECT COUNT(*) FROM `{$value}`");
                                $res_a = mysqli_fetch_row($a)[0];
                                $all_sum += $res_a;

                    }
                echo "$all_sum";

                ?>  </h3>

                <p>Нормативных документов
                </p>
              </div>
              <div class="icon">
                <i class="ion ion-document"></i>
              </div>
              <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-item">
              <div class="inner">
                <h3><!-- 53<sup style="font-size: 20px">%</sup>-->

<?php
                  $online = mysqli_query( $con, "SELECT COUNT(*) FROM `users` WHERE `online`!='0'");
                  $num_online = mysqli_fetch_row( $online)[0];
                  echo "$num_online";
?>

                </h3>

                <p>Активных пользователей</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-item">
              <div class="inner">
                <h3>


                  <?php

                  $users = mysqli_query( $con, "SELECT COUNT(*) FROM users" );
                  $num_users = mysqli_fetch_row( $users )[0];
                  echo "$num_users";

                  ?>



            </h3>

                <p>Зарегистрированных пользователей</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-item">
              <div class="inner">
                <h3 id="counterUsers">
                    <?php

                    $users = mysqli_query( $con, "SELECT COUNT(*) FROM counter" );
                    $num_users = mysqli_fetch_row( $users )[0];
                    echo "$num_users";

                    ?>
                </h3>

                <p>Количество посетителей</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
<!--            <div class="card">-->
<!--              <div class="card-header">-->
<!--                <h3 class="card-title">-->
<!--                  <i class="fas fa-chart-pie mr-1"></i>-->
<!--                  Sales-->
<!--                </h3>-->
<!--                <div class="card-tools">-->
<!--                  <ul class="nav nav-pills ml-auto">-->
<!--                    <li class="nav-item">-->
<!--                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>-->
<!--                    </li>-->
<!--                  </ul>-->
<!--                </div>-->
<!--              <div class="card-body">-->
<!--                <div class="tab-content p-0">-->
<!--                  <div class="chart tab-pane active" id="revenue-chart"-->
<!--                       style="position: relative; height: 300px;">-->
<!--                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>-->
<!--                   </div>-->
<!--                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">-->
<!--                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            <!-- /.card -->


              <div class="card card1" onclick="location.href='index.php?vop'">
                  <h2>В помощь врачу общей практики</h2>
              </div>
              <div class="card card1" onclick="location.href='index.php?video'" style="background: url('/dist/img/18042023-PhotoRoom.png-PhotoRoom.png'); background-repeat: no-repeat; background-color: #e0e0e2;">
                  <h2>Электронный атлас пациента</h2>
              </div>
              <div class="card card1" onclick="location.href='https://who-ru.digitalhero.cloud/session'" style="background: url('/dist/img/florence.png'); background-repeat: no-repeat; background-color: #e0e0e2;">
                  <h2>Виртуальный консультант Флоренс</h2>
              </div>
            <div class="card card1" onclick="location.href='#'" style="background: url('/imgs/onlineeducationr.png'); background-repeat: no-repeat; background-color: #e0e0e2;">
              <h2>Образовательные курсы111</h2>
            </div>
              <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary" style="height: 700px">
              <div class="card-header" style="background-color: #0c525d; color: white;">
                <h3 class="card-title">Новости</h3>

                <div class="card-tools">
<!--                  <span title="3 New Messages" class="badge badge-primary">3</span>-->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
<!--                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">-->
<!--                    <i class="fas fa-comments"></i>-->
<!--                  </button>-->
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                   <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                       <span class="direct-chat-name float-left">Общие вопросы</span>
                      <span class="direct-chat-timestamp float-right">15 февраля 11:05</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <!-- /.direct-chat-img -->
                       <?php
                       $query = "SELECT * FROM `archive_common-question` ORDER BY id_akt DESC LIMIT 1";
                       $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                       for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                       ?>
                       <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                        <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                               <?= $data[0]['name']?>
                    </div></a>
                  </div>

                  <!-- /.direct-chat-msg -->
<!--                  <div class="direct-chat-msg right">-->
<!--                    <div class="direct-chat-infos clearfix">-->
<!--                      <span class="direct-chat-name float-right">Sarah Bullock</span>-->
<!--                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>-->
<!--                    </div>-->-->
<!--                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">-->
<!---->
<!--                    <div class="direct-chat-text">-->
<!--                      You better believe it!-->
<!--                    </div>-->
<!--                  </div>-->
                  <!-- Message to the right -->
<!--                  <div class="direct-chat-msg right">-->
<!--                    <div class="direct-chat-infos clearfix">-->
<!--                      <span class="direct-chat-name float-right">Sarah Bullock</span>-->
<!--                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>-->
<!--                    </div>-->
<!--                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">-->
<!--
                    <div class="direct-chat-text">-->
<!--                      You better believe it!-->
<!--                    </div>
                 </div>-->
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Акушерство и гинекология</span>
                            <span class="direct-chat-timestamp float-right">12 февраля 14:37</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->

                        <?php
                        $query = "SELECT * FROM archive_akusherstvo ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>


                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Анестезиология и реаниматология</span>
                            <span class="direct-chat-timestamp float-right">29 января 10:44</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_anesteziologiya-reanimatologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Деятельность, связанная с оборотом наркотических средств, психотропных веществ и их прекурсоров</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:59</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_anesteziologiya-reanimatologiya_deyatelnost-s-narkot` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Основные законы РБ</span>
                            <span class="direct-chat-timestamp float-right">21 января 17:11</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_common-question_osnovnyye-zakony-rb` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Режим работы и сан-эпид режим организаций здравоохранения. СанПИН</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_common-question_rezhim-sanpin` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Тарифы, нормы, нормативы</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_common-question_tarify-normy-normativy` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Лучевая диагностика (в т.ч. рентгенологическая диагностика, компьютерная томография, магнитно-резонансная томография)</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_id-luchevaya-diagnostika` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">УЗИ. Эндоскопическая диагностика. Функциональная диагностика</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_id-uzi-ed-fd` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Лабораторная диагностика</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_laboratornaya-diagnostik` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Педиатрия</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM archive_pediatriya ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Стоматология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM archive_stomatologiya ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Терапия</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM archive_terapiya ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Аллергология. Иммунология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_allergologiya-immunologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Гастроэнтерология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_gastroenterologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Дерматология. Венерология. Косметология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_dermatologiya-venerologiya-kosmetologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Кардиология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_kardiologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Неврология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_nevrologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>


                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Психотерапия. Наркология. Психиатрия</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_psikhoterapiya-narkologiya-psikhiatriya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Ревматология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_revmatologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Физиотерапия. Массаж. ЛФК. Реабилитация</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_fizioterapiya-massazh-lfk-reabilitatsiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Эндокринология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_terapiya_endokrinologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Забор органов и тканей, трансплантация</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_zabor-organov-transplantatsiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Онкология, в т.ч.маммология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_onkologiya-mammologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Ортопедия. Травматология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_ortopediya-travmatologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Оториноларингология. Сурдология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_otorinolaringologiya-surdologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Офтальмология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_oftalmologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Патологоанатомическая служба</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_patologoanatomicheskaya-sluzhba` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Проктология, в т.ч. колопроктология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_proktologiya-koloproktologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Урология, в т.ч. андрология</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM `archive_khirurgiya_urologiya-andrologiya` ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>

                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Хирургия</span>
                            <span class="direct-chat-timestamp float-right">29 марта 12:55</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <!-- /.direct-chat-img -->
                        <?php
                        $query = "SELECT * FROM archive_khirurgiya ORDER BY id_akt DESC LIMIT 1";
                        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
                        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                        ?>
                        <a href="<?= $data[0]['file']?>" target="_blank"> <div class="direct-chat-text">

                                <?= $data[0]['type']." ".$data[0]['num_akt']?><br>
                                <?= $data[0]['name']?>
                            </div></a>
                        <!-- /.direct-chat-text -->
                    </div>




                </div>



              </div>

            </div>
            <!--/.direct-chat -->



            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Статистика
                </h3>
                <!-- card tools -->
                <div class="card-tools">
<!--                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">-->
<!--                    <i class="far fa-calendar-alt"></i>-->
<!--                  </button>-->
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>

              <div class="card-body">

                <div id="belarus-map" style="height: 500px; width: 100%;">
                    <div class="text-white" style="position: absolute;" id="boln">Больниц: 45</div>
                    <div class="text-white" style="position: absolute; padding-top: 30px" id="polic">Поликлиник: 78</div>
                  <?php include 'elements/belarus-map.php';?>
                </div>
              </div>
              <!-- /.card-body-->
                <div class="card-footer bg-transparent" style="display: none">
                    <div class="row">
                        <div class="col-4 text-center">
                            <div id="sparkline-1"></div>
                            <div class="text-white">Visitors</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-4 text-center">
                            <div id="sparkline-2"></div>
                            <div class="text-white">Online</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-4 text-center">
                            <div id="sparkline-3"></div>
                            <div class="text-white">Sales</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.card -->


                       <div class="card">
              <div class="card-header ui-sortable-handle" style="background-color: rgb(12, 82, 93); color: white; cursor: move;">
                <h3 class="card-title">Эффективность использования оборудования</h3>
              </div>

            <div id="oborudovanie" style="height: 300px; width: 100%;">
              <a onclick="checkKey()" href="#"><img style = "height: 300px; width: 667px;" src="dist/img/obor.jpg" alt=""></a>
            </div>
            </div>


            <!-- solid sales graph -->
              <div class="card">
                  <div id="month-calendar">
                      <ul class="month">
                          <li class="prev"><i class="fas fa-angle-double-left"></i></li>
                          <li class="next"><i class="fas fa-angle-double-right"></i></li>
                          <li class="month-name"></li>
                          <li class="year-name"></li>
                      </ul>
                      <ul class="weekdays">
                          <li>Пн</li>
                          <li>Вт</li>
                          <li>Ср</li>
                          <li>Чт</li>
                          <li>Пт</li>
                          <li>Сб</li>
                          <li>Вс</li>
                      </ul>
                      <ul class="days">
                      </ul>
                  </div>
              </div>


            <div class="card">
              <div class="container mt-3">
                <div class="card-header" style="background-color: #0c525d; color: white;">
               <h3 class="card-title">Курсы валют Нацбанка РБ</h3>
                <div class="card-tools">
<!--                  <span title="3 New Messages" class="badge badge-primary">3</span>-->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
<!--                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">-->
<!--                    <i class="fas fa-comments"></i>-->
<!--                  </button>-->
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>



                <table class="table" style="border-bottom: 1px solid #e3e3e3; ">
                  <thead>
                    <tr>
                      <th style="border-bottom: 1px solid #e3e3e3;"></th>
                        <th style="border-bottom: 1px solid #e3e3e3;" id="yesterdayDate"></th>
                      <th style="border-bottom: 1px solid #e3e3e3;" id="curDate"></th>

                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td id="val1"></td>
                      <td id="valy1"></td>
                      <td id="val2"></td>
                    </tr>

                    <tr>
                      <td id="val3"></td>
                        <td id="valy2"></td>
                      <td id="val4"></td>

                    </tr>

                    <tr>
                      <td id="val5"></td>
                        <td id="valy3"></td>
                      <td id="val6"></td>

                      </tr>

                    <tr>
                      <td id="val7"></td>
                        <td id="valy4"></td>
                      <td id="val8"></td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->

              <!-- The Modal FOR FILES -->

            <!-- Calendar -->

              <!-- The Modal -->
              <div class="modal" id="myModal">
                  <div class="modal-dialog modal-xl">
                      <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                              <h4 class="modal-title">Информация об области</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal">X</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body" id="modal-body" style="height: 700px">

                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                          </div>

                      </div>
                  </div>
              </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <script>
        function getCookie(name) {
            let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }


    /*belarus map*/
        let modalBody = document.getElementById("modal-body");

        function guestSetAct(s){
            let mydiv = document.querySelector("polygon[data-text='"+s+"']");
            let pol = document.querySelector("polygon[class='st0 active']");
            pol.classList.remove('active');
            mydiv.classList.add('active');
            let boln = document.getElementById("boln");
            let polic = document.getElementById("polic");

            switch(s){
                case 'hrodna':

                    boln.innerText = "Больниц: 22";
                    polic.innerText = "Поликлиник: 20";

                    break;
                case 'minsk-obl':
                    boln.innerText = "Больниц: 45";
                    polic.innerText = "Поликлиник: 78";

                    break;
                case 'vitebsk':
                    boln.innerText = "Больниц: 27";
                    polic.innerText = "Поликлиник: 12";

                    break;
                case 'mogilev':
                    boln.innerText = "Больниц: 31";
                    polic.innerText = "Поликлиник: 15";

                    break;
                case 'homel':
                    boln.innerText = "Больниц: 21";
                    polic.innerText = "Поликлиник: 22";

                    break;
                case 'brest':
                    boln.innerText = "Больниц: 18";
                    polic.innerText = "Поликлиник: 34";

                    break;
            }
        }

        function setAct(s){
          let mydiv = document.querySelector("polygon[data-text='"+s+"']");
          let pol = document.querySelector("polygon[class='st0 active']");
          pol.classList.remove('active');
          mydiv.classList.add('active');
            let boln = document.getElementById("boln");
            let polic = document.getElementById("polic");
            switch(s){
                case 'hrodna':
                  if (getCookie("admin") === "admin"){
                    $.ajax({
                      url: "done.php",
                      method: "POST",
                      data: {}
                    })
                      .done(function( response ) {
                        alert("okey");
                      });
                  }
                    boln.innerText = "Больниц: 22";
                    polic.innerText = "Поликлиник: 20";
                    if(getCookie("login") !== undefined){
                        if(document.querySelector("iframe[src='elements/infoGrodno.html']") === null) {
                            let frame = document.querySelector("iframe");
                            if(frame !== null) {
                                frame.remove();
                            }
                            let myEl = document.createElement("iframe");
                            myEl.setAttribute("src", "elements/infoGrodno.html");
                            myEl.width = "100%";
                            myEl.height = "100%";
                            modalBody.insertAdjacentElement("afterbegin", myEl);
                        }
                        showModal();
                    }
                    break;
                case 'minsk-obl':
                    boln.innerText = "Больниц: 45";
                    polic.innerText = "Поликлиник: 78";
                    if(getCookie("login") !== undefined){
                        if(document.querySelector("iframe[src='elements/infoMinsk.html']") === null) {
                            let frame = document.querySelector("iframe");
                            if(frame !== null) {
                                frame.remove();
                            }
                            let myEl = document.createElement("iframe");
                            myEl.setAttribute("src", "elements/infoMinsk.html");
                            myEl.width = "100%";
                            myEl.height = "100%";
                            modalBody.insertAdjacentElement("afterbegin", myEl);
                        }
                        showModal();
                    }
                    break;
                case 'vitebsk':
                    boln.innerText = "Больниц: 27";
                    polic.innerText = "Поликлиник: 12";
                    if(getCookie("login") !== undefined){
                        if(document.querySelector("iframe[src='elements/infoVitebsk.html']") === null) {
                            let frame = document.querySelector("iframe");
                            if(frame !== null) {
                                frame.remove();
                            }
                            let myEl = document.createElement("iframe");
                            myEl.setAttribute("src", "elements/infoVitebsk.html");
                            myEl.width = "100%";
                            myEl.height = "100%";
                            modalBody.insertAdjacentElement("afterbegin", myEl);
                        }
                        showModal();
                    }
                    break;
                case 'mogilev':
                    boln.innerText = "Больниц: 31";
                    polic.innerText = "Поликлиник: 15";
                    if(getCookie("login") !== undefined){
                        if(document.querySelector("iframe[src='elements/infoMogilev.html']") === null) {
                            let frame = document.querySelector("iframe");
                            if(frame !== null) {
                                frame.remove();
                            }
                            let myEl = document.createElement("iframe");
                            myEl.setAttribute("src", "elements/infoMogilev.html");
                            myEl.width = "100%";
                            myEl.height = "100%";
                            modalBody.insertAdjacentElement("afterbegin", myEl);
                        }
                        showModal();
                    }
                    break;
                case 'homel':
                    boln.innerText = "Больниц: 21";
                    polic.innerText = "Поликлиник: 22";
                    if(getCookie("login") !== undefined){
                        if(document.querySelector("iframe[src='elements/infoGomel.html']") === null) {
                            let frame = document.querySelector("iframe");
                            if(frame !== null) {
                                frame.remove();
                            }
                            let myEl = document.createElement("iframe");
                            myEl.setAttribute("src", "elements/infoGomel.html");
                            myEl.width = "100%";
                            myEl.height = "100%";
                            modalBody.insertAdjacentElement("afterbegin", myEl);
                        }
                        showModal();
                    }
                    break;
                case 'brest':
                    boln.innerText = "Больниц: 18";
                    polic.innerText = "Поликлиник: 34";
                    if(getCookie("login") !== undefined){
                        if(document.querySelector("iframe[src='elements/infoBrest.html']") === null) {
                            let frame = document.querySelector("iframe");
                            if(frame !== null) {
                                frame.remove();
                            }
                            let myEl = document.createElement("iframe");
                            myEl.setAttribute("src", "elements/infoBrest.html");
                            myEl.width = "100%";
                            myEl.height = "100%";
                            modalBody.insertAdjacentElement("afterbegin", myEl);
                        }
                        showModal();
                    }
                    break;
            }

      };

        function showModal(){
            let img = document.getElementById("img");
            // img.src = "dist/img/info/"+file;
            let modal = document.getElementById("myModal");
            modal.classList.add("show");
            modal.style = "display: block";

            $(".btn-close").on("click",() => {
                modal.classList.remove("show");
                modal.style = "display: none";
            });
            $(".btn-danger").on("click",() => {
                modal.classList.remove("show");
                modal.style = "display: none";
            });
        }


  </script>

<script>
  var modal = document.getElementById("myModal");

  // Получаем заголовок модального окна
  var header = modal.querySelector(".modal-header");

  // Переменные для хранения начальных значений положения мыши и модального окна
  var mouseX = 0;
  var mouseY = 0;
  var modalLeft = 0;
  var modalTop = 0;

  // Функция для обработки события начала перемещения модального окна
  function startDrag(event) {
    // Запоминаем начальные значения положения мыши и модального окна
    mouseX = event.clientX;
    mouseY = event.clientY;
    modalLeft = parseInt(window.getComputedStyle(modal).getPropertyValue("left"));
    modalTop = parseInt(window.getComputedStyle(modal).getPropertyValue("top"));

    // Вешаем обработчики событий на события перемещения мыши и отпускания кнопки мыши
    document.addEventListener("mousemove", dragModal);
    document.addEventListener("mouseup", stopDrag);
  }

  // Функция для обработки события перемещения мыши
  function dragModal(event) {
    // Вычисляем изменение положения мыши
    var deltaX = event.clientX - mouseX;
    var deltaY = event.clientY - mouseY;

    // Вычисляем новое положение модального окна
    modal.style.left = modalLeft + deltaX + "px";
    modal.style.top = modalTop + deltaY + "px";
  }

  // Функция для обработки события отпускания кнопки мыши
  function stopDrag() {
    // Убираем обработчики событий события перемещения мыши и отпускания кнопки мыши
    document.removeEventListener("mousemove", dragModal);
    document.removeEventListener("mouseup", stopDrag);
  }

  // Добавляем обработчик события начала перемещения модального окна при клике на заголовок
  header.addEventListener("mousedown", startDrag);


  let vitebsk = document.getElementById("mapVitebsk");
  let minsk = document.getElementById("mapMinsk");
  let gomel = document.getElementById("mapGomel");
  let grodno = document.getElementById("mapGrodno");
  let mogilev = document.getElementById("mapMogilev");
  let brest = document.getElementById("mapBrest");

  let brest1 = document.getElementById("brest1");
  let brest2 = document.getElementById("brest2");
  let gomel1 = document.getElementById("gomel1");
  let gomel2 = document.getElementById("gomel2");
  let vitebsk1 = document.getElementById("vitebsk1");
  let vitebsk2 = document.getElementById("vitebsk2");
  let grodno1 = document.getElementById("grodno1");
  let grodno2 = document.getElementById("grodno2");
  let mogilev1 = document.getElementById("mogilev1");
  let mogilev2 = document.getElementById("mogilev2");
  let minsk1 = document.getElementById("minsk1");
  let minsk2 = document.getElementById("minsk2");
  let minsk3 = document.getElementById("minsk3");

  if (getCookie("login") === undefined){
      minsk.setAttribute("onclick","guestSetAct('minsk-obl')");
      brest.setAttribute("onclick", "guestSetAct('brest')");
      grodno.setAttribute("onclick", "guestSetAct('hrodna')");
      vitebsk.setAttribute("onclick", "guestSetAct('vitebsk')");
      mogilev.setAttribute("onclick", "guestSetAct('mogilev')");
      gomel.setAttribute("onclick", "guestSetAct('homel')");
  }

  if (getCookie("login") === "kzminsk@rnpcmt.by"){
      minsk.setAttribute("onclick", "setAct('minsk-obl')");
  }

  if (getCookie("login") === "guzoBrest@rnpcmt.by"){
      brest.setAttribute("onclick", "setAct('brest')");
  }

  if (getCookie("login") === "guzoGrodno@rnpcmt.by"){
      grodno.setAttribute("onclick", "setAct('hrodna')");
  }

  if (getCookie("login") === "vitebskGuzo@rnpcmt.by"){
      vitebsk.setAttribute("onclick", "setAct('vitebsk')");
  }

  if (getCookie("login") === "mogilevGuzo@rnpcmt.by"){
      mogilev.setAttribute("onclick", "setAct('mogilev')");
  }

  if (getCookie("login") === "gomelGuzo@rnpcmt.by"){
      gomel.setAttribute("onclick", "setAct('homel')");
  }

  if (getCookie("login") === "sharalo@rnpcmt.by"){
      minsk.setAttribute("onclick", "setAct('minsk-obl')");
      brest.setAttribute("onclick", "setAct('brest')");
      grodno.setAttribute("onclick", "setAct('hrodna')");
      vitebsk.setAttribute("onclick", "setAct('vitebsk')");
      mogilev.setAttribute("onclick", "setAct('mogilev')");
      gomel.setAttribute("onclick", "setAct('homel')");
  }

</script>

