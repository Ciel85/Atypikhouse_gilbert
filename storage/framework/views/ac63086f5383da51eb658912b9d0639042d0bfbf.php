<?php $__env->startSection('title', 'Etape 3'); ?>
<?php $__env->startSection('content'); ?>
<div class="container margin-top">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Créer un hébergement</div>
                <?php echo Breadcrumbs::render('page3'); ?>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('house.postcreate_step3')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <p>3. Décrivez nous votre bien et les disponibilités</p>                     
                            <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Titre de votre bien</label>
                                <div class="col-md-6">
                                    <input id="name" required type="text" class="form-control" name="title" maxlength="40" value="<?php echo e($title); ?>">
                                    <?php if($errors->has('title')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('title')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('category_id') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Categorie</label>
                                <div class="col-md-6">
                                    <select id="select_category" required name="category_id" class="form-control">
                                        <option id="" value="">Choisissez votre categorie</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($category->id > 1): ?>
                                                <option <?php echo e($categorySelected == $category->id ? "selected" : ""); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('category_id')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('category_id')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="proprietes"></div>
                            <div class="form-group<?php echo e($errors->has('nb_personnes') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Nombre de personnes</label>
                                <div class="col-md-6">
                                    <select id="select_nb_personnes" required name="nb_personnes" class="form-control">
                                        <option id="" value="" autofocus>Nombre de personnes</option>
                                        <?php for($i=1;$i<17;$i++): ?>
                                            <option value="<?php echo e(($i > 16 || $i < 0) ? "" : $i); ?>" <?php echo e(($i == $nb_personnes) ? "selected" : ""); ?>><?php echo e($i); ?></option>
                                        <?php endfor; ?> 
                                    </select>
                                    <?php if($errors->has('nb_personnes')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('nb_personnes')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('start_date') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Date de début</label>
                                <div class="col-md-6">
                                    <input type="text" required class="form-control" id="from" placeholder="Date de début" name="start_date" value="<?php echo e($start_date); ?>" />
                                    <?php if($errors->has('start_date')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('start_date')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('end_date') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Date de fin</label>
                                <div class="col-md-6">
                                    <input type="text" required class="form-control" id="to" placeholder="Date de fin" name="end_date" value="<?php echo e($end_date); ?>" />
                                    <?php if($errors->has('end_date')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('end_date')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="description" rows="5" placeholder="Ne pas saisir plus de 500 caractères"><?php echo e($description); ?></textarea>
                                    <?php if($errors->has('description')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('description')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-color">
                                        Continuer
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
    <script src="<?php echo e(asset('js/jquery-ui.min.js')); ?>"></script>
    <script>let site = "<?php echo e(env('APP_URL_SITE')); ?>";</script>
    <script src="<?php echo e(asset('js/calendarCreateAnnonce.js')); ?>"></script>
    <script src="<?php echo e(asset('js/create_house.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>