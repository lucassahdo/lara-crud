/*
  Author: Lucas Sahdo
  Version: 1.0
*/

/* ========================================================================= */
/*	Ajax Setup
/* ========================================================================= */
$.ajaxSetup({
	headers:{
		'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
	}
});


/* ========================================================================= */
/*	Add New Row to Table
/* ========================================================================= */
function addRow(data){
	var row = '<tr id="client'+data.id+'" data-id="'+data.id+'">'+
			//   '<td>'+ data.id +'</td>'+
			  '<td>'+ data.name +'</td>'+
			  '<td>'+ data.address +'</td>'+
			  '<td>'+ data.phone +'</td>'+
			  '<td>'+ data.email +'</td>'+
			  '<td>'+
			  '<button type="button " class="btn btn-success btn-edit" style="margin-right:10px; width:100%;">Editar</button>'+
			  '</td>'+
			  '<td>'+
			  '<button type="button " class="btn btn-danger btn-delete" style="width:100%">Apagar</button>'+
			  '</td>'+
			  '</tr>';
	$('tbody').append(row);
};

/* ========================================================================= */
/*	Update a Row from the Table
/* ========================================================================= */
function updateRow(data){
	var row = '<tr id="client'+data.id+'" data-id="'+data.id+'">'+
			//   '<td>'+ data.id +'</td>'+
			  '<td>'+ data.name +'</td>'+
			  '<td>'+ data.address +'</td>'+
			  '<td>'+ data.phone +'</td>'+
			  '<td>'+ data.email +'</td>'+
			  '<td>'+
			  '<button type="button " class="btn btn-success btn-edit" data-id="{{ $client->id }}" data-url="{{ URL::to("/getUpdate") }}" style="margin-right:10px; width:100%;">Editar</button>'+
			  '</td>'+
			  '<td>'+
			  '<button type="button " class="btn btn-danger btn-delete" data-id="{{ $client->id }}" data-url="{{ URL::to("/delete") }}" style="width:100%">Apagar</button>'+
			  '</td>'+
			  '</tr>';

	$('tbody #client'+data.id).replaceWith(row);
};


/* ========================================================================= */
/*	On clink events
/* ========================================================================= */

// open add clint modal
$('#btn-add').on('click',function(){
	//reset new client form
	$('#frmNewClient').trigger('reset');
	$('#newClientModal').modal('show');
});

// delete client
$('tbody').delegate('.btn-delete','click',function(){
	//$('#editClientModal').modal('show');
	//alert($(this).data('id'));

	var id =$(this).closest('tr').data('id');
	var url = '/delete';

	// alert(id);

	swal({
		title: "Tem certeza?",
		text: "Ação Irreversível",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Sim, deletar!',
		closeOnConfirm: true,
		closeOnCancel: true
	},
	function(){
		$.ajax({
			type : 'post',
			url : url,
			data : {"id":id},
			dataType: 'json',
			sucess : function(data,status){
				console.log("[AJAX] COMPLETE: "+status);
				console.log(data);
			},
			error : function(data,status){
				console.log("[AJAX] ERROR: "+status);
				console.log(data);
			},
			complete : function(data,status){
				console.log("[AJAX] COMPLETE: "+status);
			}
		}).done(function(data){
			console.log("[AJAX] DONE: "+status);
			console.log(data);

			$('#client'+id).remove();
			toastr.success('OK', 'Cliente Removido', {timeOut: 2000});
	    });
	});
});

// get client data and shows modal
$('tbody').delegate('.btn-edit','click',function(){
	//$('#editClientModal').modal('show');

	var id =$(this).closest('tr').data('id');
	var url = '/getUpdate';

	//alert(id);

	$.ajax({
		type : 'post',
		url : url,
		data : {"id":id},
		dataType: 'json',
		sucess : function(data,status){
			console.log("[AJAX] COMPLETE: "+status);
			console.log(data);
		},
		error : function(data,status){
			console.log("[AJAX] ERROR: "+status);
			console.log(data);
		},
		complete : function(data,status){
			console.log("[AJAX] COMPLETE: "+status);
		}
	}).done(function(data){
		console.log("[AJAX] DONE: "+status);
		console.log(data);

		$('#editClientModal #edit-id').val(data.id);
		$('#editClientModal #edit-name').val(data.name);
		$('#editClientModal #edit-address').val(data.address);
		$('#editClientModal #edit-phone').val(data.phone);
		$('#editClientModal #edit-email').val(data.email);

		$('#editClientModal').modal('show');
    });
});

/* ========================================================================= */
/*	On submit events
/* ========================================================================= */

// add client in database via ajax
$('#frmNewClient').on('submit',function(e){
	e.preventDefault();
	e.stopImmediatePropagation();

	var form = $('#frmNewClient');
	var url = form.attr("action");

	var name = form.find("input[name='name']").val();
    var address = form.find("input[name='address']").val();
	var phone = form.find("input[name='phone']").val();
	var email = form.find("input[name='email']").val();

	$.ajax({
		type : 'post',
		url : url,
		data : {name:name, address:address, phone:phone, email:email},
		datatype : 'json',
		sucess : function(data,status){
			console.log("[AJAX] SUCESS: "+status);
			console.log(data);
		},
		error : function(data,status){
			console.log("[AJAX] ERROR: "+status);
			console.log(data);
		},
		complete : function(data,status){
			console.log("[AJAX] COMPLETE: "+status)
		}
	}).done(function(data){
		console.log("[AJAX] DONE: "+status);
		console.log(data);

		//atualiza tabela
		addRow(data);

		$(this).trigger('reset');
		$('#newClientModal').modal('hide');
		toastr.success('OK', 'Cliente Adicionado', {timeOut: 2000});
	});

	// avoid ajax submit twice
	//(http://stackoverflow.com/questions/14993047/why-does-my-jquery-ajax-form-submit-once-on-first-submit-twice-on-second-submit)
	$(this).unbind('submit');

	return false;
});

// update client in database via ajax
$('#frmEditClient').on('submit',function(e){
	e.preventDefault();
	e.stopImmediatePropagation();

	var form = $('#frmEditClient');
	var url = form.attr("action");

	var id = form.find("input[name='id']").val();
	var name = form.find("input[name='name']").val();
	var address = form.find("input[name='address']").val();
	var phone = form.find("input[name='phone']").val();
	var email = form.find("input[name='email']").val();

	$.ajax({
		type : 'post',
		url : url,
		data : {id:id, name:name, address:address, phone:phone, email:email},
		datatype : 'json',
		sucess : function(data,status){
			console.log("[AJAX] SUCESS: "+status);
			console.log(data);
		},
		error : function(data,status){
			console.log("[AJAX] ERROR: "+status);
			console.log(data);
		},
		complete : function(data,status){
			console.log("[AJAX] COMPLETE: "+status)
		}
	}).done(function(data){
		console.log("[AJAX] DONE: "+status);
		console.log(data);

		//atualiza tabela
		updateRow(data);

		$(this).trigger('reset');
		$('#editClientModal').modal('toggle');
		toastr.success('OK', 'Cliente Atualizado', {timeOut: 2000});
	});

	// avoid ajax submit twice
	//(http://stackoverflow.com/questions/14993047/why-does-my-jquery-ajax-form-submit-once-on-first-submit-twice-on-second-submit)
	$(this).unbind('submit');

	return false;
});


/* ========================================================================= */
/*	Sweet Alerts
/* ========================================================================= */
