


	function eliminarnoticia(id)
	{

		$.confirm({
			    title: '¿Deseas emiliminar esta noticia?',
			    content: 'La noticia sera borrada permanentemente',
			     type: 'red',
    			 typeAnimated: true,
			    buttons: {
			        
			        cancelar: function () {
			           
			        },aceptar: {
			            text: 'entendido',
			            btnClass: 'btn-red',
			            keys: ['enter', 'shift'],
			            action: function(){
			                eliminar_n(id);
			            }
			        }
			    }
			});
	}



	function eliminar_n(id){

		console.log(id);
		//document.getElementById("formdelete").value();
		document.getElementById("codigo").value = id;
		document.getElementById("formdelete").submit();
	}	


   	 $(document).ready(function(){  
  
          $("#checkboxPrimary3").click(function() {  
            if($("#checkboxPrimary3").is(':checked')) { 

			             $('#ctn-portada').hide();
			            

			        } else {  
			           $('#ctn-portada').show();
			           
			        }  
			  
			 
  
			});
		});