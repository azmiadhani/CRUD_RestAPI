<center><br><br><br>
<?php echo form_open('note/edit');?>
<?php echo form_hidden('id',$datakontak[0]->id);?>

<table>

    <tr><td>TITLE</td><td><?php echo form_input('nama',$datakontak[0]->nama);?></td></tr>
    <tr><td>NOTES</td><td><?php echo form_input('notes',$datakontak[0]->notes);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('note','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
</center>