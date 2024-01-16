<?php
$minsk = "SELECT * FROM `Минск` ";
$result_minsk=mysqli_query($con, $minsk) or die ( mysqli_error($con));
for ($data_minsk = []; $row = mysqli_fetch_assoc($result_minsk); $data_minsk[] = $row);
?>

<?php
$minsk_obl = "SELECT * FROM minsk_obl ";
$result_minsk_obl=mysqli_query($con, $minsk_obl) or die ( mysqli_error($con));
for ($data_minsk_obl = []; $row = mysqli_fetch_assoc($result_minsk_obl); $data_minsk_obl[] = $row);
?>

<?php
$mogilev = "SELECT * FROM `Могилевская_обл_`";
$result_mogilev=mysqli_query($con, $mogilev) or die ( mysqli_error($con));
for ($data_mogilev = []; $row = mysqli_fetch_assoc($result_mogilev); $data_mogilev[] = $row);
?>

<?php
$brest = "SELECT * FROM `Брестская_обл_`";
$result_brest=mysqli_query($con, $brest) or die ( mysqli_error($con));
for ($data_brest = []; $row = mysqli_fetch_assoc($result_brest); $data_brest[] = $row);
?>

<?php
$vitebsk = "SELECT * FROM `Витебская_обл_`";
$result_vitebsk=mysqli_query($con, $vitebsk) or die ( mysqli_error($con));
for ($data_vitebsk = []; $row = mysqli_fetch_assoc($result_vitebsk); $data_vitebsk[] = $row);
?>

<?php
$gomel = "SELECT * FROM `Гомельская_обл_`";
$result_gomel=mysqli_query($con, $gomel) or die ( mysqli_error($con));
for ($data_gomel = []; $row = mysqli_fetch_assoc($result_gomel); $data_gomel[] = $row);
?>

<?php
$grodno = "SELECT * FROM `Гродненская_обл_`";
$result_grodno=mysqli_query($con, $grodno) or die ( mysqli_error($con));
for ($data_grodno = []; $row = mysqli_fetch_assoc($result_grodno); $data_grodno[] = $row);
?>


<script src="dist/js/bootstrap.bundle.min.js"></script>



<div class="col-12">


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Классификатор органов и организаций государственной системы здравоохранения</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


                  <table id="tClassifiers" class="table table-striped" style="width:100%;">
                    <thead class="fintable">
                    <tr>
                      <th>Код ОКПО</th>
                      <th>УНП</th>
                      <th>Название организации</th>

                      <th>Сокращенное название
                      </th>

                        <th>Адрес
                        </th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($data_minsk as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?=$user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['O']?>', '<?=$user['Q']?>', '<?=$user['R']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($data_minsk_obl as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?=$user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['M']?>', '<?=$user['O']?>', '<?=$user['P']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($data_mogilev as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?=$user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['O']?>', '<?=$user['Q']?>', '<?=$user['R']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($data_brest as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?=$user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['O']?>', '<?=$user['Q']?>', '<?=$user['R']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($data_vitebsk as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?= $user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['O']?>', '<?=$user['Q']?>', '<?=$user['R']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($data_gomel as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?=$user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['O']?>', '<?=$user['Q']?>', '<?=$user['R']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($data_grodno as $user) { ?>
                        <tr onclick="showModal('<?=$user['A']?>','<?=$user['B']?>',`<?=str_replace('"', '\'',$user['C'])?>`,`<?=$user['D'] ? str_replace('"', '\'',$user['D']) : ""?>`,`<?=$user['E'] ? str_replace('"', '\'',$user['E']) : ""?>`,'<?=$user['L']?>','<?=$user['M']?>','<?=$user['G']?>', '<?=$user['O']?>', '<?=$user['Q']?>', '<?=$user['R']?>')" style="cursor: pointer">
                            <td> <?=$user['A']?></td>
                            <td> <?=$user['B']?></td>
                            <td> <?=$user['C']?></td>
                            <td> <?=$user['E']?></td>
                            <td> <?=$user['L']." ".$user['M']?></td>

                        </tr>
                    <?php } ?>
                    </tbody>
                  </table>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Информация об организации</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">X</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <label class="form-control" id="code_okpo" ></label>
                    <label class="form-control"  id="unp" ></label>
                    <label class="form-control"  id="name_org"  style="height:100%"></label>
                    <label class="form-control"  id="vishestoyash" ></label>
                    <label class="form-control"  id="kratkoe" ></label>
                    <label class="form-control"  id="type" ></label>
                    <label class="form-control"  id="adress" ></label>
                    <label class="form-control"  id="tel" ></label>
                    <label class="form-control"  id="email" ></label>
                    <label class="form-control"  id="site" ></label>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="../dist/js/jquery-3.5.1.js"></script>

<script>
    function showModal(...arr){
        let code_okpo = document.getElementById("code_okpo");
        let unp = document.getElementById("unp");
        let name_org = document.getElementById("name_org");
        let vishestoyash = document.getElementById("vishestoyash");
        let kratkoe = document.getElementById("kratkoe");
        let type = document.getElementById("type");
        let adress = document.getElementById("adress");
        let tel = document.getElementById("tel");
        let email = document.getElementById("email");
        let site = document.getElementById("site");
        code_okpo.innerText = arr[0];
        unp.innerText = arr[1];
        name_org.innerText = arr[2];
        vishestoyash.innerText = arr[3];
        kratkoe.innerText = arr[4];
        adress.innerText = arr[5] + " " + arr[6];
        type.innerText = arr[7];
        tel.innerText = arr[8];
        email.innerText = arr[9];
        site.innerText = arr[10];
        let clUnp = document.getElementsByClassName("clUnp")[0];
        if(clUnp){
          clUnp.remove();
        }
        let aUnp = document.createElement("a");
        aUnp.className = "clUnp";
        aUnp.href = "https://egr.gov.by/egrmobile/information?pan="+ arr[1];
        aUnp.innerHTML = "Дополнительная информация";
        aUnp.target = "_blank";
        let mbody = document.getElementsByClassName("modal-body")[0];
        mbody.appendChild(aUnp);
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

    let classifiers_org = document.getElementById("classifiers_org");
    classifiers_org.className = "nav-item menu-is-opening menu-open";
    let classifiers_orgTree = document.getElementById("classifiersTree");
    classifiers_orgTree.style = "display: block;";
    let itemMenu = document.querySelector("[href='index.php?classifiers_org']");
    itemMenu.style = "color: #148A8A;";
  $(document).ready(function () {
    $('#tClassifiers').DataTable();
  });
</script>



    <!-- КОНЕЦ ПОДКЛЮЧЕНИЕ API -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










