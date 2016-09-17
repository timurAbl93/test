<?php /* Web site Title */ ?>
<?php $__env->startSection('title'); ?> <?php echo trans('site/user.login'); ?> :: @parent  <?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?> <?php $__env->stopSection(); ?>

<?php /* Content */ ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="page-header">
            <h2><?php echo trans('site/user.login_to_account'); ?></h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php echo Form::open(['route' => 'auth.store']); ?>

            <div class="form-group label-floating <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                <?php echo Form::label('email', "E-Mail Address", array('class' => 'control-label')); ?>

                <?php echo Form::text('email', null, array('class' => 'form-control')); ?>

                <div class="controls">
                    <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
                </div>
            </div>
            <div class="form-group label-floating <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                <?php echo Form::label('password', "Password", array('class' => 'control-label')); ?>

                <div class="controls">
                    <?php echo Form::password('password', array('class' => 'form-control')); ?>

                    <span class="help-block"><?php echo e($errors->first('password', ':message')); ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-16 text-center">
                    <div class="checkbox">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <button type="submit" class="btn btn-primary btn-raised" style="margin-right: 15px;">
                        Login
                    </button>

                    <a href="<?php echo e(route('login')); ?>">Forgot Your Password?</a>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>