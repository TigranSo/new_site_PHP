<?php require "base.php" ?>

    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-center">CONTACT</h1>
        </p>
    </div><br>

    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="message"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">send</button>
    </form>

<?php require "footer.php" ?>       

