<?php


   include 'connection.php';
    $error = array(); //массив для ошибок

    if ($_POST['search_field'] != "") //если поля заполнены
    {
        $search_result       = $_POST['search_field'];
        foreach ($array_names_categ as $category => $value) {

            $insertquery = "SELECT * FROM subcategories, category WHERE category.id_category=subcategories.id_categ AND category.name_category = '$value'";

            $rez = mysqli_query($con, $insertquery) or die("Ошибка " . mysqli_error($con));

            if (mysqli_num_rows($rez) > 0) {
                while ($rowData = mysqli_fetch_array($rez)) {
                    $insertquery = "SELECT * FROM `{$rowData["name"]}` WHERE `num_akt` LIKE '%$search_result%' OR `name` LIKE '%$search_result%' OR `date_prik` LIKE '%$search_result%'";

                    $rez = mysqli_query($con, $insertquery) or die("Ошибка " . mysqli_error($con));

                    if (mysqli_num_rows($rez) > 0) {
                        while ($rowData = mysqli_fetch_array($rez)) {
                            $stroka = $rowData['file'];
                            $pos = strrpos($stroka, '.', 0);
                            $len = strlen($stroka) - $pos;
                            $ext = substr($stroka, 0 - $len, $len);
                            echo '<div class="card w-75" style="margin-left: 20px">
  <div class="card-body">
    <h5 class="card-title">'.$rowData["num_akt"].'</h5>
    <p class="card-text">'.$rowData["name"].'</p>
    <button onclick="showModalFiles(\''.$rowData["file"].'\',\''.$ext.'\')" class="btn btn-primary">Документ</button><br/>
    <a href="' . $rowData["url"] . '" target="_blank">ссылка на раздел</a>
  </div>
</div>';
                        }
                    }
                }
            }
        }
    }


    else {
        $error[] = "Поля не должны быть пустыми!";
        return $error;
    }



?>

<!--<script>-->
<!--    let getS = document.querySelector("[name='search_field']");-->
<!--    let val = getS.value;-->
<!--    let getEl = document.querySelector("[aria-controls='example1']");-->
<!--    getEl.value = val;-->
<!--</script>-->

