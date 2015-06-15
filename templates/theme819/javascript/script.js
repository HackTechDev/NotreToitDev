 jQuery(document).ready( function($){
				$j("#two").hide();
				$j("#one_a").click(function() {
  					$j("#two").hide();
					$j("#one").show();
				});
				$j("#two_a").click(function() {
  					$j("#one").hide();
					$j("#two").show();
				});
		});