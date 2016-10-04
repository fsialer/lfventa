$(document).ready(function(){
	$('#btnAgregar').on('click',function(){
		detail.agregar();
	});
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
		}else{
			console.log('Error revisa');
		}
		
	},
	eliminar:function(index){
		total=total-subtotal[index];
		ctotal="<input value="+total+" name='total' type='hidden'/>";
		$('#fila'+index).remove();
		$('#total').html('S/. '+total+ctotal);
		
		}
	};
	


	