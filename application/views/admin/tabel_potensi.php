<title>
   <?php echo($title);?>  
  
  </title>
  <div class="container-fluid">
   <div class="col-md-4">
     <div class="col-md-12">
       <div class="panel panel-default">
        <form class="form-group" method="post" action="<?php echo site_url('admin/kelola_potensi/potensi_desa');?>"> 
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
                <a class="btn btn-primary" href="<?php echo site_url('admin/kelola_potensi');?>"><i class="glyphicon glyphicon-refresh"></i> Semua</a>
          
              </span>
            </div>
         </div>
        </form> 
       </div>
     </div>
     <div class="col-md-12">
       <div class="panel panel-default">
          <div class="panel-heading">
          <div class="pull-right">
            </div>
          <h3> Desa - <?php echo $tempat;?></h3>
          
          </div>
          <form class="form-group" method="post" action="<?php echo site_url('admin/kelola_potensi/tambah_potensi');?>">
           <div id="form_tambah" class="panel-body">
              <label>Nama Desa</label>
              <input id="kode_desa" type="hidden" class="form-control" name="kode_desa" value="<?php echo $kode_desa;?>">
              <input class="form-control" name="desa" value="<?php echo $tempat;?>" readonly>
              <label>Nama Potensi</label>
              <input id="form_isi" required  class="form-control" name="nama_potensi">
              <label>Jenis Potensi</label>
              <select id="form_isi"   required class="form-control" name="jenis_potensi">
                <option value="">--Pilih--</option>
                <option value="Pertanian">Pertanian</option>
                <option value="Usaha">Usaha</option>
                <option value="Pariwisata">Pariwisata</option>
              </select>
              <label>Deskripsi</label>
              <textarea id="form_isi" required class="form-control" name="deskripsi" >
              	
              </textarea> 
             
              <br>
              <div class="text-right">
              <button type="reset" class="btn btn-primary"><i class="glyphicon glyphicon-off"></i> Reset</button> 
                 <button id="form_isi" class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-save"></i> Simpan</button>
              </div>
           </div> 
          </form>   
       </div>
     </div>
   </div>
   <div class="col-md-8">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3>Data Potensi - <?php echo $tempat;?></h3>
       </div>
       <div class="panel-body">
       <div class="text-center">
          <?php echo $this->session->flashdata('pesan');?>
       </div>
      
            <table class="table table-bordered">
              <thead class="bg-primary">
                <th class="text-center">No</th>
                <th class="text-center">Potensi</th>
                <th class="text-center">Jenis Potensi</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Aksi</th>

              </thead>
              <tbody>
              <?php $no=1;foreach ($potensi->result() as $row):?>
                  <tr title="<?php echo "$row->nama_potensi";?>">
                    <td><?php echo $no++ ;?></td>
                    <td><?php echo $row->nama_potensi;?></td>
                    <td><?php echo $row->jenis_potensi;?></td>
                    <td><?php echo $row->deskripsi;?></td>
                    <td class="text-center">
                     <a id="edit" title="Edit Data Penduduk" class="btn btn-warning btn-sm" href="<?php echo site_url("admin/kelola_potensi/form_edit/$row->kode_potensi");?>"><i class="glyphicon glyphicon-edit"></i> </a>
                     <a title="Hapus Data Penduduk" class="btn- btn-danger btn-sm" href="<?php echo site_url("admin/kelola_potensi/hapus/$row->kode_potensi");?>"><i class="glyphicon glyphicon-remove"></i> </a>
                    </td>
                  </tr>
              <?php endforeach;?>    
              </tbody>
            </table>
       </div>
     </div>
   </div> 
  </div>
<div class="java">
  
  <script type="text/javascript">
  $(document).ready(function  () {
    var kode=$('#kode_desa').val()
    
    if (kode=="-") {
      $('#form_tambah').hide()
    };
  })
  </script>
</div>