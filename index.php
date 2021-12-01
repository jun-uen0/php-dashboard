<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ログイン もしくは 新規登録</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.php">ログイン もしくは 新規登録</a>
      <!-- Sidebar Toggle-->

      <!-- Navbar Search-->
      
    </nav>
    <div id="layoutSidenav">
     
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">ログイン もしくは 新規登録</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="index.php">ホーム</a></li>
        
            </ol>
    <div class="row" >
              <div class="col-xl-4 col-md-6" >
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body">まだ登録のお済みでない方</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="signup.php">新規登録</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
                </div>
              </div>
<div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body">既に登録がお済みの方</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="login.php">ログイン</a>
                  </div>
                </div>
              </div>

<div class="col-xl-4 col-md-6">
                <div class="card bg-danger text-white mb-4">
                  <div class="card-body">管理画面</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="admin">管理者ログイン</a>
              
                  </div>
                </div>
              </div>

              </div>
            <div style="height: 100vh"></div>
      
          </div>
        </main>
   <?php include_once('includes/footer.php');?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
