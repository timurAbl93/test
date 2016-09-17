
<?php echo $__env->make(Request::ajax()?'layouts.ajax':'layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>