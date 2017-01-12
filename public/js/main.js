$(document).ready(function(){
	$('#btnAgregar').on('click',function(){
		detail.agregar();
	});
	$('#btnAgregar2').on('click',function(){
		detail_v.agregar();
	});
	$(".customer_id-select").chosen({
		allow_single_deselect: true,
		placeholder_text_single:'Elija un cliente',
		width:'100%'
	});
	$(".provider_id-select").chosen({
		allow_single_deselect: true,
		placeholder_text_single:'Elija un cliente',
		width:'100%'
	});
	$(".type_voucher-select").chosen({
		allow_single_deselect: true,
		width:'100%',
		placeholder_text_single:'Elija un tipo de comprobante'
	});
	$(".article_id-select").chosen({
		allow_single_deselect: true,
		width:'100%',
		placeholder_text_single:'Elija un articulo'
	});
	$(".type_us-select").chosen({
		allow_single_deselect: true,
		width:'100%',
		placeholder_text_single:'Elija un tipo de usuario'
	});
	$(".category-select").chosen({
		allow_single_deselect: true,
		width:'100%',
		placeholder_text_single:'Elija un categoria'
	});
	$(".type_document-select").chosen({
		allow_single_deselect: true,
		width:'100%',
		placeholder_text_single:'Elija un tipo de documento'
	});

	$("#article_id2").on('change',function(){
		var article_id=$("#article_id2").val();
    	$.get('/admin/sales/'+article_id+'/loadop', function(data){ 
        	//console.log(data); 
        	$("#stock").val(data.stock);
        	$("#price_sale").val(data.avg);
    	});
	});
	$(".confirm").confirm({
		title:"Confirmacion de eliminación",
		text:"¿Estas seguro de querer eliminar este registro?",
		confirmButton:"Si",
		cancelButton:"No"
	});
	$(".confirm2").confirm({
		title:"Confirmacion de Cancelación",
		text:"¿Estas seguro de querer cancelar este registro?",
		confirmButton:"Si",
		cancelButton:"No"
	});

	$("#btnRegistrar").hide();
	
});
	var cont=0;
	var subtotal=[];
	var total=0;
	var detail={
		agregar:function(){
		var article_id=$('#article_id').val();
		var article=$('#article_id option:selected').text();
		var quantity=$('#quantity').val();
		var price_sale=$('#price_sale').val();
		var price_buy=$('#price_buy').val();
		if (article_id>0 && quantity>0 && price_buy>0 && price_sale>0) {
			var btnEliminar="<td><button type='button' id='btnEliminar' class='btn btn-danger' onClick='detail.eliminar("+cont+")'>X</button></td>";
			var carticle="<td>"+article+"<input value="+article_id+" name='articles[]' type='hidden'/></td>";
			var cquantity="<td><input value= "+quantity+" name='quantity[]' type='number' class='form-control'/></td>";
			var cprice_sale="<td><input value= "+price_sale+" name='price_sale[]' type='number' class='form-control'/></td>";
			var cprice_buy="<td><input value= "+price_buy+" name='price_buy[]' type='number' class='form-control'/></td>";
			subtotal[cont]=quantity*price_buy;
			total=total+subtotal[cont];
			var ctotal="<input value="+total+" name='total' type='hidden'/>";
			var csubtotal="<td> S/. "+subtotal[cont]+"</td>";						
			var fila="<tr id='fila"+cont+"'>"+btnEliminar+carticle+cquantity+cprice_sale+cprice_buy+csubtotal+"</tr>";
			$("#detail").append(fila);
			$('#total').html('S/. '+total+ctotal);
			cont++;
			detail.limpiar();
			detail.evaluar();
		}else{
			alert('Revise los datos ingresados');
			console.log('Error revisa');
		}
		
	},
	eliminar:function(index){
		total=total-subtotal[index];
		ctotal="<input value="+total+" name='total' type='hidden'/>";
		$('#fila'+index).remove();
		$('#total').html('S/. '+total+ctotal);
		detail.evaluar();
		
		},
	limpiar:function(){
		//('#article_id').text('');
		$('#quantity').val("");
		$('#price_sale').val("");
		$('#price_buy').val("");

		},
	evaluar:function(){
		if (total<=0) {
			$("#btnRegistrar").hide();
		}else{
			$("#btnRegistrar").show();
		}
	}

	};

	var detail_v={
		agregar:function(){
			var article_id=$('#article_id2').val();
			var article=$('#article_id2 option:selected').text();
			var quantity=$('#quantity').val();
			var stock=$('#stock').val();
			var price_sale=$('#price_sale').val();
			var discount=$('#discount').val();
			if (article_id>0 && quantity>0 && stock>0 && price_sale>0 && discount>0) {
				if (quantity<stock) {
					var btnEliminar="<td><button type='button' id='btnEliminar' class='btn btn-danger' onClick='detail_v.eliminar("+cont+")'>X</button></td>";
					var carticle="<td>"+article+"<input value="+article_id+" name='articles[]' type='hidden'/></td>";
					var cquantity="<td><input value= "+quantity+" name='quantity[]' type='number' class='form-control'/></td>";
					var cprice_sale="<td><input value= "+price_sale+" name='price_sale[]' type='number' class='form-control'/></td>";
					var cdiscount="<td><input value= "+discount+" name='discount[]' type='number' class='form-control'/></td>";
					subtotal[cont]=(quantity*price_sale)-discount;
					total=total+subtotal[cont];
					var ctotal="<input value="+total+" name='total' type='hidden'/>";
					var csubtotal="<td> S/. "+subtotal[cont]+"</td>";						
					var fila="<tr id='fila"+cont+"'>"+btnEliminar+carticle+cquantity+cprice_sale+cdiscount+csubtotal+"</tr>";
					$("#detail").append(fila);
					$('#total').html('S/. '+total+ctotal);
					cont++;
					console.log('stock'+stock);
					console.log('cantidad'+quantity);
					detail_v.limpiar();
					detail_v.evaluar();
				}else{
					alert('La cantidad excede al stock');
					console.log('La cantidad excede al stock');
				}
				
			}else{
				alert('Revise los datos ingresados');
				console.log('Error en ventas');
			}

		},
		eliminar:function(index){
			total=total-subtotal[index];
			ctotal="<input value="+total+" name='total' type='hidden'/>";
			$('#fila'+index).remove();
			$('#total').html('S/. '+total+ctotal);
			detail_v.evaluar();
		},
		limpiar:function(){
			$('#quantity').val("");
			$('#stock').val("");
			$('#price_sale').val("");
			$('#discount').val("");

		},
		evaluar:function(){
			if (total<=0) {
				$("#btnRegistrar").hide();
			}else{
				$("#btnRegistrar").show();
			}
		}
	}
	
