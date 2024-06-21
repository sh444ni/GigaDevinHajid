<?php 
include './P_profile.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSW Store Profile</title>
    <link rel="stylesheet" href="./css/s_profilePlz.css">
    <link rel="stylesheet" href="./css/s_sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <?php include './header.php'; ?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>My Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="profile-picture">
                            <img src="https://via.placeholder.com/150" alt="Foto Profil" class="rounded-circle">
                        </div>
                        <div class="profile-info">
                            <h5>Full Name</h5>
                            <p><?php echo htmlspecialchars($fullName); ?></p>
                            <h5>Email</h5>
                            <p><?php echo htmlspecialchars($email); ?></p>
                            <h5>Bio</h5>
                            <p>Saya adalah seorang pengembang perangkat lunak yang antusias.</p>
                        </div>
                        <div class="text-center">
                            <a href="./setting_profile.html" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php 
include './footer.php';
?>
</html>