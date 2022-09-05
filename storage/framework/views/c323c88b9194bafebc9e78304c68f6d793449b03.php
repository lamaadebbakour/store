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
<!-- <center>        <h1 style="color:rgba(0, 136, 169, 1);font-size:60px">Welcome to your online store</h1><br>
</center>            -->
        <!-- <br>style="background-color: #292c2f;width=20% ;hight=2%;" -->
       <center><strong><a href="/summer season"style="color:white;">
        <h1 style="font: size 100px;background-color: rgba(0, 136, 169, 1);; width: 40%;
         hight:15%; align-items: left;display: inline-block;
	vertical-align: top;">Women's clothing</h1>
        </a> <br><br>
 <br><br><br><br><br><br>
 <a href="/summer season"style="color:white;"><h1 style="font: size 100px;background-color: rgba(0, 136, 169, 1); width: 40%; hight:15%; align-items: left;display: inline-block;
	vertical-align: top;">Men's clothing</h1></a> </strong></center>  <br><br>
        </strong>  <center>
        


    
 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\stor\resources\views/women.blade.php ENDPATH**/ ?>