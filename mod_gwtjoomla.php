<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
/** GWT Module Selection **/
$gwt_module = $params->get("GWT_Module");

/** Transparency **/
$imagepath = JURI::base()."modules/mod_gwtjoomla/images";
$Logo_URL = $params->get("logourl");
$Logo_Size = $params->get("logosize");

/** PST **/
$pst_fontcolor = $params->get("pst_fontcolor");
$pst_bckcolor = $params->get("pst_bckcolor");
$pst_alignment = $params->get("pst_alignment");

if($pst_alignment==0)
	{$pst_align='left';}
elseif($pst_alignment==1)
	{$pst_align='center';}
elseif($pst_alignment==2)
	{$pst_align='right';}

$gwt_module_helper = modgwtjoomlamoduleHelper::gwt($params);

require JModuleHelper::getLayoutPath('mod_gwtjoomla');