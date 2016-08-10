<?php
/**
 * Hooks for BoilerPlate extension
 *
 * @file
 * @ingroup Extensions
 */

class DesktopNotificationHooks {
	public static function extensionFunction() {
		global $wgOut;
//		$wgOut->addModules( 'jquery.min.js' );

		$wgOut->addModules( 'ext.desktopnotification.load' ); // Adds confirmation dialog box

	}

}
