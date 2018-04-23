
-- SWEF PLUGIN REGISTRATION --

INSERT IGNORE INTO `swef_config_plugin`
    (
      `plugin_Dash_Allow`, `plugin_Dash_Usergroup_Preg_Match`, `plugin_Enabled`,
	  `plugin_Context_LIKE`, `plugin_Classname`, `plugin_Handle_Priority`
	)
  VALUES
    (1, '<^(sysadmin|admin)$>', 0, 'dashboard', '\\EgVendor\\EgPlugin', 100 ),
    (0, '', 1,  'www-%',  '\\EgVendor\\EgPlugin',  100 );
