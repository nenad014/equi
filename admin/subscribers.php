<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        $subs = $sub->read();
    } else {
        header('Location: index.php');
    }
?>
<?php require_once 'inc/sidebar.inc.php'; ?>

<!-- Page Content  -->
<div id="content">

<?php require_once 'inc/navbar.inc.php'; ?>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 py-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pratioci</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top px-3">
                                    <h3>
                                        <i class="fa fa-users"></i> Pratioci
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Registrovan</th>
                                                    <th>Akcija</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($subs as $single) : ?>
                                                <tr>
                                                    <td><?php echo $single->sub_email; ?></td>
                                                    <td><?php echo $single->sub_created; ?></td>
                                                    <td><a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a> <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>                  
                                                </tr>
                                            <?php endforeach; ?>    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<?php require_once 'inc/bottom.inc.php'; ?>