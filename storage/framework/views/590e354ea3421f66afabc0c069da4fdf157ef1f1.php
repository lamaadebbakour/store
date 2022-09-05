<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

            <br><br><br>
<center>        <h1 style="color:rgba(0, 136, 169, 1);font-size:60px">Welcome to your online store</h1><br>
</center>           
        <br>
        <!-- <marquee><h3><b>Welcome to SmartFits Online Store</b></h3></marquee> -->
        <br>
       
        <div width=100%><center><strong><a href="/womens_clothing"style="color:black;"><h1 style="font: size 100px;">Men's clothing</h1></a> </strong></center>  <br><br>
   <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($image->category_id ==6  ): ?>
   
      <a href="/<?php echo e($image->id); ?>"> <img src=<?php echo e($image->image_path); ?> width=200 hight=100 />
</a>
       <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
 
      
 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\stor\resources\views/MSP.blade.php ENDPATH**/ ?>