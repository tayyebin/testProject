<?php require_once 'section/header.php'; ?>
        
        <div class="col-lg-6 col-lg-offset-3">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="uname">User Name:</label>
                    <input type="text" name="uname" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Login</button>
                </div>
                
            </form>
        </div>
<?php require_once 'section/footer.php'; ?>