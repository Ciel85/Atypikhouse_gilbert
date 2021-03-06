<?php $__env->startSection('title', 'Etape 5'); ?>
<?php $__env->startSection('content'); ?>
<div class="container margin-top block-size">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Créer un hébergement</div>
                <?php echo Breadcrumbs::render('page5'); ?>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('house.postcreate_step5')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <p>5. Passons aux photos</p>
                        <div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control" name="photo" required value=<?php echo e($photo); ?>>
                                <?php if($errors->has('photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-color">
                                    Créer l'hebergement
                                </button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/create_house.js')); ?>"></script>
<?php $__env->stopSection(); ?>
           
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>