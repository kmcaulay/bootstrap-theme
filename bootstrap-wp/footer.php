<hr>

      <footer>
        <p>&copy; <?php bloginfo( 'name'); ?> <?php echo date('Y'); ?></p>
      </footer>
    </div> <!-- /container -->

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactForm">Contact Me</button>

    <div id="contactForm" class="modal fade" tabindex="-1" role="dialog">
 			<div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Contact Me</h4>
      		</div>
      		<div class="modal-body">
        		
      		<?php if( function_exists( 'ninja_forms_display_form' ) ){ Ninja_Forms()->display( 1 ); } ?>


      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


    <?php wp_footer(); ?>

  </body>
</html>
