<script type="text/javascript">
Ecwid.OnPageLoaded.add(function(page){   
	if ((page.type == "PRODUCT")) { 
	    jQuery(".ecwid-productBrowser-details-qtyAvailInfo").hide();
	    var qty_val = jQuery(".ecwid-productBrowser-details-qtyAvailInfo").html().split(" ")[1].replace('(', '');
		if (qty_val < 500)
	    jQuery(".ecwid-productBrowser-details-inStockLabel").text("Low stock!");   
	}
})
</script>


<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
