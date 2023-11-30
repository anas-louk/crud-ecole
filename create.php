
<?php include "partial/nav_bar.php";?>


    <div class="container pt-5">
    <form action="Store.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label">nom</label>
            <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">photo</label>
            <input type="file" class="form-control" id="photo" name="photo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">class</label>
            <input type="text" class="form-control" id="class" name="class" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">tel</label>
            <input type="text" class="form-control" id="tel" name="tel" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <?php include "partial/footer.php";?>
