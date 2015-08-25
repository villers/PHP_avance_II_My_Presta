var productReference = $('#reference_id').text();
var productBlock = $('#product_reference');
var url = baseUri+'modules/mylabelgenerator/generate-barcode.php?id='+productReference;

var codeBarre = $('<img src="'+url+'"/>');
var br = $('<br/>');
productBlock.append(br).append(codeBarre);
