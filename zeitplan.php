<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="fullwidth">
      <div class="language" style="max-width: 80%;"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/zeitplan">en</a></div>
    </div>
		<div class="wrap-contact" style="width: 80%;" >
			<?php 
      $title = "Zeitplan";
      include('banner.php'); 
      ?>

		<div class="success table-responsive">
			


<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Montag</th>
      <th scope="col">Dienstag</th>
      <th scope="col">Mittwoch</th>
      <th scope="col">Donnerstag</th>
      <th scope="col">Freitag</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
		

	</div>
		</div>



<?php include('footer.php'); ?>