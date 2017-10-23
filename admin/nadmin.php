<?php include("header.php"); ?>

<div id="admin">
    <h2>Add Another Admin</h2>
    <br><br>
    <form action="nadd.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <p><b>Details of New Admin:<b></p>
                <input type="text" class="form-control" name="namenew" placeholder="Name" required><br>
                <input type="text" class="form-control" placeholder="Email" name="emailnew" required><br>
                <br>
                <input type="password" class="form-control" name="opass" placeholder="Enter Your Password"><br>
                <button type="submit" name="add" class="btn btn-block btn-primary">Submit</button>
            </div>
            <div class="col-md-6">
                <p><?php if(isset($_GET['m']))
                          {
                            $a=$_GET['m'];
                            if($a==0)
                            {
                              echo "Invalid Authorization!";
                            }
                            elseif ($a==1) {
                              echo "New Admin added successfully!";
                            }
                            else {
                              session_destroy();
                              header("location:index.php");
                            }
                          }
                 ?></p>
            </div>
        </div>
    </form>
</div>
<?php include("footer.php"); ?>
