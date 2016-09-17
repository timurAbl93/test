<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"><?php echo e(trans('Toggle Navigation')); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/web/images/logo.png')); ?>"> LR CRM</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if(isset($balance)): ?>
            <ul class="nav navbar-top-links navbar-left flip">
                <li><a class="text-danger"><i class="fa fa-times-circle"></i> <?php echo e($balance[0]); ?> </a></li>
                <li><a><i class="fa fa-copyright bg-blue"></i> <?php echo e($balance[1]); ?> credits</a></li>
            </ul>
            <?php endif; ?>
            <ul class="nav navbar-top-links navbar-right language_bar_chooser flip">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-language"></i> <?php echo e(trans('site/site.languages')); ?> <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties): ?>
                            <li>
                                <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php if(Sentinel::guest()): ?>
                    <li class="<?php echo e((Request::is('auth/login') ? 'active' : '')); ?>"><a href="<?php echo e(URL::to('auth/login')); ?>"><i
                                    class="fa fa-sign-in"></i> Login</a></li>
                    <!--<li class="<?php echo e((Request::is('auth/register') ? 'active' : '')); ?>"><a
                                href="<?php echo e(URL::to('auth/register')); ?>">Register</a></li>-->
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> <?php echo e(Sentinel::getUser()->name); ?> <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                                <?php if(Sentinel::inRole('administrator')): ?>
                                    <li>
                                        <a href="<?php echo e(route('admin.index')); ?>"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                                    </li>
                                    <li role="presentation" class="divider"></li>
                                <?php endif; ?>
                            <li>
                                <a href="<?php echo e(URL::to('auth/logout')); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <?php $__env->startSection('sidebar'); ?>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo e(route('agent.lead.create')); ?>" class="dialog"><i class="icon icon-add-user"></i><?php echo app('translator')->get('site/sidebar.add_lead'); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('agent.sphere.index')); ?>"><i class="fa fa-sitemap"></i> Filtration customer</a>
                </li>
                <li>
                    <a href="<?php echo e(route('agent.lead.obtain')); ?>"><i class="icon icon-buy"></i><?php echo app('translator')->get('site/sidebar.lead_obtain'); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('agent.lead.deposited')); ?>"><i class="icon icon-sell"></i><?php echo app('translator')->get('site/sidebar.lead_deposit'); ?></a>
                </li>
                <li>
                    <a href="#"><i class="icon icon-document"></i><?php echo app('translator')->get('site/sidebar.lead_opened'); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('agent.salesman.index')); ?>"><i class="fa fa-users"></i> Salesmen</a>
                </li>
                <hr/>
                <li>
                    <a href="<?php echo e(route('operator.sphere.index')); ?>" ><i class="fa fa-list"></i> Leads filter</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
    <?php echo $__env->yieldSection(); ?>
</nav>