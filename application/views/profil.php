<style>
  a.MyButton {
  width: 200px;
  padding: 5px;
  cursor: pointer;
  font-weight: bold;
  font-size: 70%;
  background: #FF8C00;
  color: #fff;
  border: 1px solid #FF8C00;
  border-radius: 5px;
  }
  a.MyButton:hover {
  color: #ffff00;
  background: #000;
  border: 1px solid #fff;
  }
</style>

<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" alt="User profile picture">
        <?php
    foreach($dataAdmin as $admin){ ?>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Username</b> <a class="pull-right"><?php echo $admin->username; ?></a>
          </li>
        </ul>

        <a class="MyButton" href="<?php echo site_url('profil/Edit_profil/'.$penawaran->id);?>"><em class="fa fa-pencil-square-o"></em></a>

      </div>
    </div>
  </div>