<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Display -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.23
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<div class="container">
<div>Ahora en Santiago:</div>
<div id="clima"></div>

<!-- <button style="margin-bottom: 20px;" id="clima_daily" class="button" type="button" data-hover="CLICK" data-active="click"><span>VER CLIMA PARA 8 DIAS</span></button>
<table id="print" class="display" style="width: 30%;"></table> -->

				<!-- Button trigger modal -->
			<button id="clima_daily" data-hover="CLICK" data-active="click" style="margin-bottom: 20px;" type="button" class="button" data-toggle="modal" data-target="#exampleModal">
			 <span> VER CLIMA PARA 8 DIAS</span>
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Clima</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <table id="print" class="display"></table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        
			      </div>
			    </div>
			  </div>
			</div>

</div>
<main id="tribe-events-pg-template" class="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</main> <!-- #tribe-events-pg-template -->
<?php
get_footer();
