<center><br><br><br>
<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>TITLE</th><th>NOTES</th><th>ACTION</th></tr>
    <?php
    foreach ($datakontak as $kontak){
        echo "<tr>
              <td>$kontak->nama</td>
              <td>$kontak->notes</td>
              <td>".anchor('note/edit/'.$kontak->id,'Edit')."
                  ".anchor('note/delete/'.$kontak->id,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/CRUD_RestAPI/CrudRestAPI_Client/index.php/note/create">+ Tambah data<a>
</center>