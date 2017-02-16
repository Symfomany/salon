        <section id="catOne">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="<?php echo e(asset('img/five.png')); ?>" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                <?php echo $__env->renderEach('provider.accord', $resultatOne, 'resultat'); ?>
                        </div>
                </div>
        </section>

        <section id="catTwo" class="hide">
            <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="<?php echo e(asset('img/one.png')); ?>" class="responsive-img" />
                        </div>

                        <div class="col l10 m10 s12">
                                <?php echo $__env->renderEach('provider.accord', $resultatTwo, 'resultat'); ?>
                        </div>
                </div>
        </section>

         <section id="catThree" class="hide">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="<?php echo e(asset('img/two.png')); ?>" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                <?php echo $__env->renderEach('provider.accord', $resultatThree, 'resultat'); ?>
                        </div>
                </div>
        </section>

         <section id="catFour" class="hide">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="<?php echo e(asset('img/three.png')); ?>" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                        <?php echo $__env->renderEach('provider.accord', $resultatFour, 'resultat'); ?>
                        </div>
                </div>
        </section>

         <section id="catFive" class="hide">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="<?php echo e(asset('img/four.png')); ?>" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                <?php echo $__env->renderEach('provider.accord', $resultatFive, 'resultat'); ?>
                        </div>
                </div>
        </section>
                       