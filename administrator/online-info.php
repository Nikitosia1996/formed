<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../dist/css/global.css">

<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .hiden{
            display: none;
        }
    </style>
</head>
<body >
<?php
include '../connection.php';
$query = "SELECT `user`, login, `name`, last_time_online, last_page FROM users, roles where `users`.id_role = `roles`.id_role";
$result=mysqli_query($con, $query) or die ( mysqli_error($con));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>

<?php
$query = "SELECT DISTINCT ip FROM `ips`;";
$result=mysqli_query($con, $query) or die ( mysqli_error($con));
for ($data_ips = []; $row = mysqli_fetch_assoc($result); $data_ips[] = $row);
?>

<div class="col-12">

    <div class="card hiden">
        <div class="card-header">
            <h3 class="card-title">Пользователи</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Login</th>
                    <th>Role</th>
                    <th>Last online</th>
                    <th>Last page</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($data as $user) {

                    ?>

                    <tr style="cursor: pointer;">

                        <td><?= $user['user'] ?></td>
                        <td><?= $user['login'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['last_time_online'] ?></td>
                        <td><?= $user['last_page'] ?></td>

                    </tr>
                    <?php
                }
                ?>

                </tbody>
                <tfoot>
                <tr>
                    <th>User</th>
                    <th>Login</th>
                    <th>Role</th>
                    <th>Last online</th>
                    <th>Last page</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card hiden">
        <div class="card-header">
            <h3 class="card-title">IP адреса</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>ips</th>
                    <th>country</th>
                    <th>regionName</th>
                    <th>city</th>
                    <th>org</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $kol = 1;
                foreach ($data_ips as $user) {
//                    $url = 'http://ip-api.com/json/'.$user['ip'];
//                    $json = file_get_contents($url);
//                    $obj = json_decode($json);
                    ?>

                    <tr style="cursor: pointer;">

                        <td><?= $kol++ ?></td>
                        <td><?= $user['ip'] ?></td>
<!--                        <td>--><?//= isset($obj->country)? $obj->country : "локал" ?><!--</td>-->
<!--                        <td>--><?//= isset($obj->regionName)? $obj->regionName : "локал" ?><!--</td>-->
<!--                        <td>--><?//= isset($obj->city)? $obj->city : "локал" ?><!--</td>-->
<!--                        <td>--><?//= isset($obj->org)? $obj->org : "локал" ?><!--</td>-->

                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<script>
    function getCookie(name) {
        let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    if (getCookie("login") === "admin@admin.by") {
        let card = document.getElementsByClassName("card hiden")[0];
        let card1 = document.getElementsByClassName("card hiden")[1];
        card.classList.remove("hiden");
        card1.classList.remove("hiden");
    }

</script>


</body>
</html>
