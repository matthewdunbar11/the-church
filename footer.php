		<footer>
			
			<?php global $row_number; ?>
			<?php $row_number = '1'; ?>
			<?php include(TEMPLATEPATH.'/footer-row.php'); ?>
			
			<?php $row_number = '2'; ?>
			<?php include(TEMPLATEPATH.'/footer-row.php'); ?>
			
			<?php $row_number = '3'; ?>
			<?php include(TEMPLATEPATH.'/footer-row.php'); ?>				
			
		</footer>

			<?php wp_footer(); ?>
		</div>	
	</body>
</html>