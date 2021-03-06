<div class="row item animated fadeIn">
        <div class="col s12 l5 m5">
            <p class="truncate intitule"><?php echo e($resultat['intitule']); ?></p>
        </div>

       <div class="col s12 l7 m7">
        <?php $__currentLoopData = $resultat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!empty($item) && $loop->index != 'intitule'): ?>
                <div class="row feature">
                 <div class="center-align">
                        <div class="col l4 m4 s12">
                            <p class="marque"><?php echo e($item); ?></p>
                        </div>
                        <div class="col  l4 m4 s12">
                            <div class="switch">
                                <label>
                                    <input name="accords[<?php echo e(trim($item)); ?>]" value="subscribed" id="<?php echo e($item); ?>" type="checkbox" class="discover">
                                    <span class="lever"></span>
                                    <span class="hide-on-med-and-up">Je m'inscris</span>
                                </label>
                        </div>
                    </div>
                    </div>

                    <div class="col l4 m4 s12">
                        <div class="center-align">
                            <input name="accords[<?php echo e(trim($item)); ?>]" value="member" class="already" 
                            value="ok" type="checkbox" id="<?php echo e($item.$loop->index); ?>two" />
                            <label for="<?php echo e($item.$loop->index); ?>two"><span class="hide-on-med-and-up">Deja inscrit</span></label>
                        </div>
                    </div>
                    
                 </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

                       