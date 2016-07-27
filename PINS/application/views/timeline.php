<div class="box box-success" style="position: relative; left: 0px; top: 0px;">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-retweet"></i>
              <h3 class="box-title">Timeline</h3>
              
            </div>
            <div class="box-body chat" id="chat-box" style="overflow: hidden; width: auto; height: 250px;">

              <!-- chat item -->
              <?php foreach ($data as $row) {?>
              <div class="item">
                <img src="<?php echo base_url().'assets/img/photo_profil/'.$row->foto; ?>" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $row->tanggal ?></small>
                    <?php echo $row->firstname.' '.$row->lastname ?>
                  </a>
                  <?php echo $row->firstname.$row->keterangan ?>
                </p>
              </div>
              <?php } ?>
              <!-- /.item -->
              <h4><?php echo $halaman; ?></h4> 
            </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 184.911px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
            <!-- /.chat -->
          