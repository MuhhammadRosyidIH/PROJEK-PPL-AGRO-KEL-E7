$(document).ready(function(){

	getProduction();
	
	function getProduction(){
		$.ajax({
			url : '../admin/classes/Production.php',
			method : 'POST',
			data : {GET_PRODUCTION:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var adminHTML = '';

					$.each(resp.message, function(index, value){
						adminHTML += '<tr>'+
										'<td>#</td>'+
										'<td>'+ value.object +'</td>'+
										'<td>'+ value.quantity +'</td>'+
										'<td>'+ value.price +'</td>'+
                    '<td>'+ value.date +'</td>'+
                    '<td>'+ value.description +'</td>'+
										'<td><a class="btn btn-sm btn-info edit-trx_log" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a pid="'+value.id+'" class="btn btn-sm btn-danger delete-trx_log" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';
					});

					$("#production_list").html(adminHTML);

				}else if(resp.status == 303){
					$("#production_list").html(resp.message);
				}

				

				

			}
		})
		
	}


});