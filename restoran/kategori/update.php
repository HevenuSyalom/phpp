<?php 

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql = "SELECT * FROM tblkategori WHERE idkotegori=$id";

        $row=$db->getITEM($sql);

    }

?>
<h3>Update kategori</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" required value="<?php echo $row['kategori']?>" class="form-control">

        </div>

        <div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id";

        echo $sql;
        
        $db->runSQL($sql);

        header("location:?f=kategori&m=select");
    }

?>