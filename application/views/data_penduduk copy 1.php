	<title>
   <?php echo($title);?> 
  </title>
  <div class="container-fluid">
   <div class="col-md-4">
     <div class="col-md-12">
       <div class="panel panel-default">
        <form class="form-group" method="post" action="<?php echo site_url('beranda/data_per_desa');?>"> 
         <div class="panel-body">
            <div class="input-group">
              <select required name="kode_desa" id="select" class="form-control ">
                  <option value="" selected=""> --Cari Desa--</option>
                  <?php foreach ($desa->result() as $row):?>
                   <option value="<?php  echo $row->kode_desa;?>"> <?php  echo $row->nama_desa;?></option> 
                 <?php endforeach;?>
              </select>
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
                 <a class="btn btn-primary" href="<?php echo site_url('beranda/data_kependudukan');?>"><i class="glyphicon glyphicon-refresh"></i> Semua</a>
          
              </span>
            </div>
         </div>
        </form> 
       </div>
     </div>
     <div class="col-md-12">
       <div class="panel panel-default">
          <div class="panel-heading">
          <h3>Data Desa</h3>
          </div>
           <div class="panel-body">
              <table class="table table-striped table-bordered">
                <tr>
                  <td>Nama Desa</td><td><?php echo $tempat;?></td>
                </tr>
                <tr>
                  <td>Jumlah Penduduk</td><td><?php echo count($all->result());?> Orang </td>
                </tr>
                <tr>
                   <td>Luas Wilayah</td><td><?php echo $luas;?> Km 2 </td>
                </tr>
                 <tr>
                   <td>Ketinggian</td><td><?php echo $ketinggian;?> DPL</td>
                </tr>
                  <tr>
                   <td>Keadaan Permukaan</td><td><?php echo $keadaan_permukaan;?></td>
                </tr>
              </table>
           </div>   
       </div>
     </div>
   </div>
   <div class="col-md-8">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3>Data Penduduk - <?php echo $tempat;?></h3>
       </div>
       <div class="panel-body">
         <table class="table table-bordered table-striped">
          <tr>
            <td>Jumlah Penduduk</td><td colspan="3">: <?php echo count($all->result());?> Orang</td>
          </tr>
          <tr>
            <td>Jumlah Laki-Laki</td><td>: <?php echo count($laki->result());?> Orang</td>
            <td>Jumlah Perempuan</td><td>: <?php echo count($pr->result());?> Orang</td>
          </tr>
          </table>          
       </div>
     </div>
   </div> 
  </div>
