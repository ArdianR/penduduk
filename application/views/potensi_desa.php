
  <title>
   <?php echo($title);?>  
  
  </title>
  <div class="container-fluid">
   <div class="col-md-4">
     <div class="col-md-12">
       <div class="panel panel-default">
        <form class="form-group" method="post" action="<?php echo site_url('potensi_desa/satu');?>"> 
         <div class="panel-body">
            <div class="input-group">
              <select  name="kode_desa" id="pilih_desa" class="form-control" required>
                  <option value=""> --Pilih Desa--</option>
                  <?php foreach ($desa->result() as $row):?>
                   <option value="<?php  echo $row->kode_desa;?>"> <?php  echo $row->nama_desa;?></option> 
                 <?php endforeach;?>
              </select>
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
                <a class="btn btn-primary" href="<?php echo site_url('potensi_desa');?>"><i class="glyphicon glyphicon-refresh"></i> Semua</a>
          
              </span>
            </div>
         </div>
        </form> 
       </div>
     </div>
     <div class="col-md-12">
       <div class="panel panel-default">
          <div class="panel-heading">
          <h3>Data Desa- <?php echo $tempat;?></h3>
          </div>
           <div class="panel-body">
              <table class="table table-striped table-bordered">
                <tr>
                  <td>Nama Desa</td><td><?php echo $tempat;?></td>
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
         <h3>Data Potensi - <?php echo $tempat;?></h3>
       </div>
       <div class="panel-body">
            <table class="table table-bordered">
              <thead class="bg-primary">
                <th class="text-center">No</th>
                <th class="text-center">Potensi</th>
                <th class="text-center">Jenis Potensi</th>
                <th class="text-center">Deskripsi</th>
                
                

              </thead>
              <tbody>
              <?php $no=1;foreach ($potensi->result() as $row):?>
                  <tr title="<?php echo "$row->nama_potensi";?>">
                    <td><?php echo $no++ ;?></td>
                    <td><?php echo $row->nama_potensi;?></td>
                    <td><?php echo $row->jenis_potensi;?></td>
                    <td><?php echo $row->deskripsi;?></td>
                  </tr>
              <?php endforeach;?>    
              </tbody>
            </table>
       </div>
     </div>
   </div> 
  </div>
