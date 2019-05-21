<?php echo form_open_multipart('note/create');?>
<table>
    <tr><td>TITLE</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>NOTES</td><td><?php echo form_input('notes');?></td></tr>        
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('note','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>