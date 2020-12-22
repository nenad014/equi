<?php require_once 'inc/top.inc.php'; ?>
<?php
    if(isset($_SESSION['admin'])) {
        if(isset($_GET['id'])) {
            $item = $product->show($_GET['id']);
        }
        $kategorije = $category->read();
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
                                    <li class="breadcrumb-item active" aria-current="page">Ažuriraj proizvod</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-top">
                                    <h3>
                                        <i class="fa fa-pencil"></i> Ažuriraj proizvod
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Naziv</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="name" value="<?php echo $item->name; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label">Detalji</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="details" id="textarea-input" rows="9" class="form-control"><?php echo $item->details; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Cena</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="price" value="<?php echo $item->price; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Outlet</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="outlet" id="select" class="form-control">
                                                    <option value="0">Ne</option>
                                                    <option value="1">Da</option>                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Snižena cena</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="lower_price" value="<?php echo $item->lower_price; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Veličina</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <?php $sizes = (array_map('trim', array_filter(explode(' ', $item->size)))); ?>
                                                <div class="form-check-inline form-check">
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox4" name="size[]" value="S" class="form-check-input" <?php if(in_array('S', $sizes)) : ?> checked <?php endif; ?>>S
                                                    </label>
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox6" name="size[]" value="M" class="form-check-input" <?php if(in_array('M', $sizes)) : ?> checked <?php endif; ?>>M
                                                    </label>
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox7" name="size[]" value="L" class="form-check-input" <?php if(in_array('L', $sizes)) : ?> checked <?php endif; ?>>L
                                                    </label>
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox5" name="size[]" value="Unikat" class="form-check-input" <?php if(in_array('Unikat', $sizes)) : ?> checked <?php endif; ?>>Unikat
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Boje</label>
                                            </div>
                                            <div class="col col-md-9">
                                            <?php $colors = (array_map('trim', array_filter(explode(' ', $item->color)))); ?>
                                                <div class="form-check-inline form-check">
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox1" name="color[]" value="Crna" class="form-check-input" <?php if(in_array('Crna', $colors)) : ?> checked <?php endif; ?>>Crna
                                                    </label>
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox2" name="color[]" value="Crvena" class="form-check-input" <?php if(in_array('Crvena', $colors)) : ?> checked <?php endif; ?>>Crvena
                                                    </label>
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox2" name="color[]" value="Narandžasta" class="form-check-input" <?php if(in_array('Narandžasta', $colors)) : ?> checked <?php endif; ?>>Narandžasta
                                                    </label>
                                                    <label for="" class="form-check-label">
                                                        <input type="checkbox" id="inline-checkbox5" name="color[]" value="Pink" class="form-check-input" <?php if(in_array('Pink', $colors)) : ?> checked <?php endif; ?>>Pink
                                                    </label>
                                                    <label for="" class="form-check-label">
                                                        <input type="checkbox" id="inline-checkbox7" name="color[]" value="Plava" class="form-check-input" <?php if(in_array('Plava', $colors)) : ?> checked <?php endif; ?>>Plava
                                                    </label>
                                                    <label for="" class="form-check-label">
                                                        <input type="checkbox" id="inline-checkbox7" name="color[]" value="Šampanj" class="form-check-input" <?php if(in_array('Šampanj', $colors)) : ?> checked <?php endif; ?>>Šampanj
                                                    </label>
                                                    <label for="" class="form-check-label">
                                                        <input type="checkbox" id="inline-checkbox7" name="color[]" value="Siva" class="form-check-input" <?php if(in_array('Siva', $colors)) : ?> checked <?php endif; ?>>Siva
                                                    </label>
                                                    <label for="" class="form-check-label">
                                                        <input type="checkbox" id="inline-checkbox6" name="color[]" value="Tirkizna" class="form-check-input" <?php if(in_array('Tirkizna', $colors)) : ?> checked <?php endif; ?>>Tirkizna
                                                    </label>
                                                    <label for="" class="form-check-label">
                                                        <input type="checkbox" id="inline-checkbox4" name="color[]" value="Zlatna" class="form-check-input" <?php if(in_array('Zlatna', $colors)) : ?> checked <?php endif; ?>>Zlatna
                                                    </label>
                                                    <label class="form-check-label ">
                                                        <input type="checkbox" id="inline-checkbox3" name="color[]" value="Žuta" class="form-check-input" <?php if(in_array('Žuta', $colors)) : ?> checked <?php endif; ?>>Žuta
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Naslovna slika</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="img[]" class="form-control-file">
                                                <br>
                                                <img src="../<?php echo $item->cover_img; ?>" alt="" width="120" height="180" class="img-thumbnail">
                                                <input type="hidden" name="img1" value="<?php echo str_replace('uploads/', '', $item->cover_img); ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Slika 2</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="img[]" class="form-control-file">
                                                <br>
                                                <img src="../<?php echo $item->img_2; ?>" alt="" width="120" height="180" class="img-thumbnail">
                                                <input type="hidden" name="img2" value="<?php echo str_replace('uploads/', '', $item->img_2); ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Stanje</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="status" id="select" class="form-control">
                                                    <option value="Na zalihama">Na zalihama</option>
                                                    <option value="Rasprodato">Rasprodato</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Kategorija</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="cat_id" id="select" class="form-control">
                                                    <?php foreach($kategorije as $cat) : ?>
                                                    <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="item_id" value="<?php echo $item->id; ?>">
                                        <input type="submit" class="btn btn-success" name="updateItemBtn" value="Ažuriraj">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'details' );
    </script>

<?php require_once 'inc/bottom.inc.php'; ?>