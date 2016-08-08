<title><?php echo $title; ?></title>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><?php echo $title; ?></h4>
                        </div>
                        <div class="panel-body">
                            <?php foreach($record1->result() as $c):?>
                            <form class="form-horizontal">
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo $c->nama_barang; ?>" disabled="">
                                    </div>
                                </div>
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo $c->jenis; ?>" disabled="">
                                    </div>
                                </div>
                            </form>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"></h4>
                        </div>
                        <div class="panel-body">
                        
                        
                            <?php echo form_open_multipart('admin/barang/do_upload','class=form-horizontal')?>
                            <?php foreach($record->result() as $r){ ?>
                                <input type="hidden" name="id" value="<?php echo $r->id_barang ?>">
                                <?php } ?>
                                <div class="hr-dashed"></div>
                                <input type="file" name="userfile" class="form-control" required="">
                                <div class="hr-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-5 col-sm-offset-2">
                                        <input class="btn btn-primary" type="submit" name="submit" value="SImpan">
                                    </div>
                                </div>
                            
                        <hr>
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                            <?php $no=1; foreach ($record2->result() as $g) { ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><a href="<?php echo base_url('upload/'.$g->image_name); ?>"><img src="<?php echo base_url('upload/'.$g->image_name);?>"></center></td>
                            <td><center><a class='btn btn-primary' href='<?php echo base_url('index.php/admin/barang/hapusimg/'.$g->id_gambar) ?>'>Hapus</a></center></td>
                        </tr>   
                    
             <?php $no++; } ?>
                    
            </tbody>
            </table>
            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

