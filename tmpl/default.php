<?php 
defined('_JEXEC') or die; 
?>

<?php if($gwt_module==0):?>

	<div id="transparency-container">
		<a href="<?php echo $Logo_URL; ?>">
			<img src="<?php echo $imagepath?>/transparencyseal.png" style="width:<?php echo $Logo_Size; ?>; display:block; margin-left:auto; margin-right:auto; text-align:center;" alt="Transparency Seal" title="Transparency Seal"/>
		</a>
	</div>

<?php elseif($gwt_module==1):?>
<?php $pst_style = "display:block background:".$pst_bckcolor."; text-align:".$pst_align."; color:".$pst_fontcolor."; font-family:'Roboto Condensed', sans-serif; font-size:0.8rem;"; ?>

	<div id="pst-container" style="<?php echo $pst_style; ?>">
	  <div>
	    <div>Philippine Standard Time</div>
	    <div>
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
	  new gwtpstTime('pst-time');
	}
	</script>

<?php endif; ?>