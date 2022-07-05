<?php $minPrices = getMinPrice();?>
<div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="<?= $categorie['price_image']?>" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3"><?= $categorie['name']?></h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">ab $</small>
                                    <?= $minPrices[$categorie['slug']]?? 0?>
                                    <small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ tag</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i></li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i></li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i></li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i></li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="/boat.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Lern mehr</a>
                        </div>
                    </div>
                </div>