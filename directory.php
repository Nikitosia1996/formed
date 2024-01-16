<?php
$classifiers = "SELECT * FROM directory_mkb ";
$result_classifiers=mysqli_query($con, $classifiers) or die ( mysqli_error($con));
for ($data = []; $row = mysqli_fetch_assoc($result_classifiers); $data[] = $row);
?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" >

<style>
    @keyframes pulsate{50%{color:#138b5b;text-shadow:0 -1px rgba(0,0,0,.3),0 0 5px #2d7080,0 0 8px #4f9342;}
    }
    .pulse {
        color: rgb(245,245,245);
        text-shadow: 0 -1px rgba(0,0,0,.1);
        font-size: 20px;
        font-weight: 600;
        text-decoration: none;
        -webkit-animation: pulsate 3.2s linear infinite;
        animation: pulsate 3.2s linear infinite;
    }
    </style>


<div class="col-12">


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Справочник Международной статистической классификации болезней и проблем, связанных со здоровьем - МКБ-10</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


                  <table id="tClassifiers" class="table table-striped" style="width:100%;">
                    <thead class="fintable">
                    <tr>
                      <th>Код МКБ</th>
                      <th>Наименование</th>
                      <th>ID класса</th>

                    </tr>
                    </thead>

                    <tbody><?php foreach ($data as $user) { ?>
                      <tr>
                        <td> <?=$user['code_mkb']?></td>
                        <td> <?=$user['name_mkb']?></td>
                        <td> <?=$user['class_id']?></td>

                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


<script src="dist/js/jquery-3.5.1.js"></script>

<script>
    let classifiers_org = document.getElementById("directory_mkb");
    classifiers_org.className = "nav-item menu-is-opening menu-open";
    let classifiers_orgTree = document.getElementById("directoryTree");
    classifiers_orgTree.style = "display: block;";
    let itemMenu = document.querySelector("[href='index.php?directory_mkb']");
    itemMenu.style = "color: #148A8A;";


  $(document).ready(function () {
    $('#tClassifiers').DataTable();
      let inp = document.getElementById("tClassifiers_filter");
      inp.classList.add("pulse");

  });
</script>



    <!-- КОНЕЦ ПОДКЛЮЧЕНИЕ API -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










