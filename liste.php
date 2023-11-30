<?php 
$cnx=mysqli_connect("localhost",'root','','ecole');
$result=mysqli_query($cnx,"select * from etudiant");
$classe=mysqli_query($cnx,"select DISTINCT class from etudiant");


?>
<?php include "partial/nav_bar.php";?>



<div class="container">
    <div class="row">
        <div class="col">
        <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php 
    while ($c = $classe->fetch_assoc()) {
    ?>
<option value="<?= $c['class']?>"><a target="_blank" href="liste.php?classe=<?= $c['class']?>"><?= $c['class']?></a></option>
  
<?php }?>
</select>
        </div>
    </div>
  <section class=" my-5" >

      <div class="row">


      <?php 
    while ($p = $result->fetch_assoc()) {
    ?>
        <div class="col-md-4">
<a href="show.php?id=<?= $p['id']?>">
        <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="<?=$p['photo']?>" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold"><?= $p['nom']?></h4>
        <hr>
        <p>        <h4 class="card-title font-weight-bold"><?= $p['email']?></h4>
</p>
      </div>
    </div>
    </a>
        </div>

        <?php }?>
      </div>
   
    
  </section>
</div>










<?php include "partial/footer.php";?>
