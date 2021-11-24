<h1>Sorry you don't have permissions to view this</h1>

<?php  if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>


            <p><?php echo $error ?></p>


        <?php endforeach ?>
    </div>
<?php  endif ?>
