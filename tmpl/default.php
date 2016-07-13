<?php 
// No direct access
defined('_JEXEC') or die; 
?>

<?php if($gwt_module==0):?>

	<div id="transparency-container">
		<a href="<?php echo $Logo_URL; ?>">
			<img src="<?php echo $imagepath?>/transparencyseal.png" style="width:<?php echo $Logo_Size; ?>; display:block; margin-left:auto; margin-right:auto; text-align:center;" alt="Transparency Seal" title="Transparency Seal"/>
		</a>
	</div>

<?php elseif($gwt_module==1):?>

	<div id="pst-container" style="width:100%;">
	  <div style="background:<?php echo $pst_bckcolor; ?>; font-style:Roboto; color:<?php echo $pst_fontcolor; ?>; text-align:<?php echo $pst_align; ?>;">
	    <div style="font-size:1rem;"><b>Philippine Standard Time</b></div>
	    <div style="font-size:0.875rem;">
	      <span id="pst-date"></span>
	      <span id="pst-time"></span>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" id="gwt-pst">
	(function(d, eId) {
	  var js, gjs = d.getElementById(eId);
	  js = d.createElement('script'); js.id = 'gwt-pst-jsdk';
	  js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?"+new Date().getTime();
	  gjs.parentNode.insertBefore(js, gjs);
	}(document, 'gwt-pst'));

	var gwtpstReady = function(){
	  var otherFormat = 'dddd, mmmm dd, yyyy h:mm:ss TT';
	  var firstPst = new gwtpstTime('pst-date', {format: otherFormat});
	}
	</script>

<?php endif; ?>