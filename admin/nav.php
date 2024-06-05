<ul class="list-group">
    <li class="list-group-item"><a href="?page=dashboard">Dashboard</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-show">Data Mahasiswa</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-add">Tambah Data Mahasiswa</a></li>

    // matakuliah
    case "matakuliah-show";

    include "../matakuliah/matakuliah_show.php";

    break;
    case "matakuliah-add";

    include "../matakuliah/matakuliah_add.php";

    break;
    case "matakuliah-edit";

    include "../matakuliah/matakuliah_edit.php";

    break;
    case "matakuliah-delete";

    include "../matakuliah/matakuliah_delete.php";

    break;
    case "matakuliah-update";

    include "../matakuliah/matakuliah_update.php";

    break;
    <?php
    //session_start();
    if ($_SESSION['username'] == 'admin') {
        echo '
<li class="list-group-item"><a href="?page=user-show">Data User</a></li>
<li class="list-group-item"><a href="?page=user-add">Tambah Data User</a></li>
';
    }
    ?>
    <li class="list-group-item"><a href="logout.php ">Logout</a></li>
</ul>