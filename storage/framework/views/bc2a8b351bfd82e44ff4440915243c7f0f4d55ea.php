<h3>Hello <?php echo e($user->firstname); ?> <?php echo e($user->firstname); ?></h3>

 <p>Email: <b><a><?php echo e($user->email); ?></a></b></p>
 <p>Phone:  <b><a><?php echo e($user->phone); ?></a></b></p>
<p>Employé en tant que <i><?php echo e($user->fonction); ?></i> Entreprise:  <b><?php echo e($user->compagny); ?> </b> 
<i>(Siren: <?php echo e($user->siren); ?>)</i></p>
<p>Les accords pour la coopérative <b><?php echo e($user->cooperative); ?></b> sont: </p>
<ul>
    <?php $__currentLoopData = $user->accords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $accord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li <?php if($accord == "subscribed"): ?> style="color:#A2BC55;" <?php else: ?> style="color: #149A86;" <?php endif; ?>><?php echo e($key); ?> : <b> <?php if($accord == "subscribed"): ?> Souhaite être inscrit <?php else: ?> Dejà inscrit  <?php endif; ?> </b></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>