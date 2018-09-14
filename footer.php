<?php do_action('sp_pre_footer');?>
<footer>
	<div class="container-fluid">
		<div class="row">
		<?php 
			
			global $sp_theme, $sp_customize;

			$option = $sp_customize->get_option();

			$footer_cols = $option['footer']['column'];	
			
			for( $i = 1; $i<=$footer_cols; $i++ ){
				
				$footer_col_class = $sp_theme->get_col_class( $footer_cols );
				
				_e('<div id="footer-sidebar'.$i.'" class="'.$footer_col_class.'">');
				if( is_active_sidebar( 'footer-sidebar-'.$i ) ){ dynamic_sidebar( 'footer-sidebar-'.$i ); }
				_e('</div>');
			}
		?>
		</div>
	</div>
	<?php do_action('sp_copyright');?>
</footer>



<?php 
	/* CLOSING THE CONTAINER DIVS FOR HEADER 1 */
	global $sp_customize;
	$header_type = $sp_customize->get_header_type();
	if( $header_type == 'header1' ):
?>
	<div id="header1-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<?php do_action('sp_nav_menu');?>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->	
<?php endif;?>

<?php wp_footer();?>
</body>
</html>