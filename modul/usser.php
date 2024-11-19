<div class="container mt-5">
<div class="row">
<div class="col-sm-4">
    <form method="POST">
        <div class=""mb-3>
                <label>Username</label>                                                                                                     
                <input type="text" name="username" class="form-control">
        </div>
        <div class=""mb-3>
                <label>email</label>                                                                            
                <input type="text" name="email" class="form-control">
        </div>
        <div class=""mb-3>                                                     
                <button type="submit" name="btn" class="btn btn-primary mt-2">Input Data</button>
        </div>
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $sqlusser = $conn->query("INSERT INTO usser(username,email,)VALUES('$username','$email',)");
        if ($sqlusser) {
                echo"Data berhasil diinput";
        }else{
                print($conn->error);
        }

    }
    ?>
</div>

</div>
</div>