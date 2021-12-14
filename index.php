<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14fa96d7be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex align-items-center">
    <form action="main.php" method="post" class="container w-25 bg-light d-flex justify-content-center p-5 shadow p-3 mb-5 bg-body rounded">

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
                    <input type="text" class="form-control" name="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <?php
                if (isset($_GET['errors']['user'])) { ?>
                    <p style="color:red;" class="mb-3"><?= $_GET["errors"]['user']; ?></p>
                <?php
                } ?>
            </div>
            <div class="col-12">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                    <input type="password" class="form-control" name="pass" placeholder="password" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <?php
                if (isset($_GET['errors']['pass'])) { ?>
                    <p style="color:red;" class="mb-3"><?= $_GET["errors"]['pass']; ?></p>
                <?php
                } ?>
            </div>
            <div class="col-5">
                <input type="submit" class="btn btn-outline-primary" value="Log in">
            </div>


        </div>

    </form>


</body>

</html>