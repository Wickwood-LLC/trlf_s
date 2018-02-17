<?php
/**
 * Download button no count no filesize no file name
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/** @var DLM_Download $dlm_download */
?>
<p><a class="aligncenter download-button" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow" target="_blank">
		<?php printf( __( 'Download &ldquo;%s&rdquo;', 'download-monitor' ), $dlm_download->get_title() ); ?>
	</a></p>