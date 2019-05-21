<!DOCTYPE html>
<html>
    <head>
        <title>Note Now</title>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- CSS 
            ================================================== -->
        <!-- Bootstrap 3-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
        <!-- Template Styles -->
        <link href="css/style.css" rel="stylesheet" media="screen">

    </head>
  <body>
<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
<!-- GET IT 
    ================================================== -->
<section class="get-it">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Note Now</h1>
                <p class="lead">Simple note application, simple as click-click</p>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                            <th><center>Title</center></th>
                            <th><center>Notes</center></th>
                            <th><center>Action</center></th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
                <a href="http://localhost/CRUD_RestAPI/CrudRestAPI_Client/index.php/note/create">+ Tambah data<a>
            </div>
        <div class="col-md-12">
                <hr />
                <ul>
                        <li><a href="#link-here">Muhammad Azmi ADdhani</a></li>
                        <li><a href="#link-here">1611016110005</a></li>
                    </ul>
            </div>
        </div>
    </div>
</section>
<?php echo base_url(); ?>
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animatescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/retina.min.js"></script>

