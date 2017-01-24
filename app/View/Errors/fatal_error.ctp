 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Error Fatal 
      </h1>
      
    </section>



<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
    <h2><?php echo $message; ?></h2>
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php echo __d('cake', 'An Internal Error Has Occurred.'); ?>
</p>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
    
    
    </div>
  </div>
</section>

</div>
    