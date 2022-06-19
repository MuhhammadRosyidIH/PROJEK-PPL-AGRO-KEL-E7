$(document).ready(function(){

	getTrx_log();
	
	function getTrx_log(){
		$.ajax({
			url : '../admin/classes/Trx_log.php',
			method : 'POST',
			data : {GET_TRX_LOG:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var adminHTML = '';

					$.each(resp.message, function(index, value){
						adminHTML += '<tr>'+
										'<td>#</td>'+
										'<td>'+ value.activity +'</td>'+
										'<td>'+ value.income +'</td>'+
										'<td>'+ value.outcome +'</td>'+
                    '<td>'+ value.date +'</td>'+
                    '<td>'+ value.description +'</td>'+
										'<td><a class="btn btn-sm btn-info edit-trx_log" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a pid="'+value.id+'" class="btn btn-sm btn-danger delete-trx_log" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';
					});

					$("#trx_log_list").html(adminHTML);

				}else if(resp.status == 303){
					$("#trx_log_list").html(resp.message);
				}

				

			}
		})
		
	}

	$(".add-trx_log").on("click", function(){

		$.ajax({

			url : '../admin/classes/Trx_log.php',
			method : 'POST',
			data : new FormData($("#add-trx_log-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				if (response.status == 202) {
					$("#edit-trx_log-form").trigger("reset");
					$("#edit_trx_log_modal").modal('hide');
					getProducts();
					alert(response.message);
					window.location.href = "Trx_log.php";
				}else if(response.status == 303){
					// window.location.href = "products.php";
					alert(response.message);
					
				}
			}

		});

	});



});