<style type="text/css">
<?php include XMLSF_DIR . '/views/styles/admin.css'; ?>
</style>
<div class="wrap">

	<h1><?php _e('Google News Sitemap','xml-sitemap-feed'); ?></h1>

	<p>
	    <?php printf( __( 'These settings control the Google News Sitemap generated by the %s plugin.', 'xml-sitemap-feed' ), __( 'XML Sitemap & Google News', 'xml-sitemap-feed' ) ); ?>
		<?php printf( /* translators: Writing Settings URL */ __( 'For ping options, go to %s.', 'xml-sitemap-feed' ), '<a href="'.admin_url('options-writing.php').'#xmlsf_ping">'.translate('Writing Settings').'</a>' ); ?>
	</p>

	<?php do_action('xmlsf_news_settings_before'); ?>

	<div class="main">
		<form method="post" action="options.php">

			<?php settings_fields( 'xmlsf-news' ); ?>

			<?php do_settings_sections( 'xmlsf-news' ); ?>

			<?php do_action('xmlsf_news_settings_after'); ?>

			<?php submit_button(); ?>

		</form>
	</div>

	<div class="sidebar">
		<h3><span class="dashicons dashicons-welcome-view-site"></span> <?php echo translate('View'); ?></h3>
		<p>
			<?php
			printf (
			/* translators: Sitemap name with URL */
			__( 'Open your %s', 'xml-sitemap-feed' ),
			'<strong><a href="'.$url.'" target="_blank">'.__('Google News Sitemap','xml-sitemap-feed') . '</a></strong><span class="dashicons dashicons-external"></span>'
			); ?>
		</p>

		<h3><span class="dashicons dashicons-admin-tools"></span> <?php echo translate('Tools'); ?></h3>
		<form action="" method="post">
			<?php wp_nonce_field( XMLSF_BASENAME.'-help', '_xmlsf_help_nonce' ); ?>
			<p>
				<input type="submit" name="xmlsf-check-conflicts" class="button button-small" value="<?php _e( 'Check for conflicts', 'xml-sitemap-feed' ); ?>" />
			</p>
			<p>
				<input type="submit" name="xmlsf-flush-rewrite-rules" class="button button-small" value="<?php _e( 'Flush rewrite rules', 'xml-sitemap-feed' ); ?>" />
			</p>
			<p>
				<input type="submit" name="xmlsf-ping-sitemap-news" class="button button-small" value="<?php _e( 'Ping Google News', 'xml-sitemap-feed' ); ?>" />
			</p>
		</form>

		<?php include XMLSF_DIR . '/views/admin/sidebar-help.php'; ?>

		<?php include XMLSF_DIR . '/views/admin/help-tab-news-sidebar.php'; ?>

		<?php include XMLSF_DIR . '/views/admin/sidebar-contribute.php'; ?>

	</div>

</div>
