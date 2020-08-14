
<?php $__env->startSection('content'); ?>
<div>
<h2> List of users</h2>


<?php if(Session::get('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
 <?php echo e(Session::get('status')); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td scope="row"><?php echo e($item->id); ?></td>
      <td scope="row"><?php echo e($item->Name); ?></td>
      <td scope="row"><?php echo e($item->Email); ?></td>
      <td scope="row"><?php echo e($item->Mobile); ?></td>
      <td scope="row"><?php echo e($item->Address); ?></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppserver\htdocs\laravel\login\resources\views/userlist.blade.php ENDPATH**/ ?>