$(document).ready(function(){		var config =[];	var sinGuardar=[];	$("#jmy_web").hide(250);	function initConfig (){		$.getJSON("javascript/configuracion.json", function(result){			config=result;		});			}	function jmy_web_guardar(data){				console.log(data);		var d = data;		if(d.data.id!=''){			var guardar ={	"valor":$("#"+d.data.id).html(),							"pagina":d.data.page,							"tabla":d.data.tabla,							"opciones":{"href":$("#jmy_web_href").val()},							"id":d.data.id,							};			if(guardar.href!=undefined){				$("#"+d.data.id).attr("href",guardar.href);			}			$.ajax({	            url: location.origin+'/jmyWebAjG', 	            type: 'post', 	            dataType: 'json', 	            success: function (res) {	        		mensajeGuardado(); },	            error: function (res) {	               console.log(res);			  	            }, data:guardar			});			console.log(guardar);		}else{			console.log("Falta datos para poder guardar");			}	}	function botones(data=[]){		var left = data.pageX;		var top = data.pageY+30;		console.log(data);		$("#jmy_web").html("");		$("#jmy_web").addClass("jmyweb-botones");		$("#jmy_web").css({ 'left': left+'px','top':top+'px','z-index': '10000' ,'position': 'absolute' ,'border-radius': '5px' ,'padding': '5px' ,'background-color': 'rgba(200,200,200,0.65)' });		var href = ($("#"+data.data.id).attr("href")!=undefined) ? $("#"+data.data.id).attr("href") : false;		var html = '';		/*if(href!==false)		//	html = html + '<input type="text" value="'+href+'" id="jmy_web_href" placeholder="href:'+data.data.id+'"> ';		*/		html = html + '<img src="http://social.comsis.mx/templet/images/logo.png" heigth="60"><button class="jmy_web_guardar" data-id="'+data.data.id+'" data-page="'+data.data.page+'" data-tabla="'+data.data.tabla+'" style="background-color:rgba(30,140,30,0.8);padding:8px;color:#fff;font-size:16px;border:0;border-radius:5px">[=] Guardar</button><button class="jmy_web_cancelar" style="background-color:rgba(140,30,30,0.8);padding:8px;color:#fff;font-size:16px;border:0;border-radius:5px">[x]</button>';		$("#jmy_web").html(html);		$("#jmy_web").show(250);		$(".jmy_web_guardar").click(function(){			jmy_web_guardar(data);		});		$(".jmy_web_cancelar").click(function(e){			$("#jmy_web").hide(250);		});	}	function herramientas(data=[]){		var left = 100;		var top = 5;		console.log(data);		$("#jmy_web_tools").html("");		$("#jmy_web_tools").addClass("jmyweb-botones");		$("#jmy_web_tools").css({ 'left': left+'px','top':top+'px','position': 'sticky','z-index': '10000' });				/*if(href!==false)		//	html = html + '<input type="text" value="'+href+'" id="jmy_web_href" placeholder="href:'+data.data.id+'"> ';*/		var html = '';		html = html + '<button class="jmy_t_guardar" style="background-color:rgba(30,140,30,0.8);padding:8px;color:#fff;font-size:16px;border:0;border-radius:5px;">[+] Guardar todos los cambios</button><button class="jmy_web_tools_cancelar" style="background-color:rgba(140,30,30,0.8);padding:8px;color:#fff;font-size:16px;border:0;border-radius:5px;"> [x] Descartar todos los cambios</button>';		$("#jmy_web_tools").html(html);		$("#jmy_web_tools").show(250);		$(".jmy_t_guardar").click(function(){			console.log(sinGuardar);			var t=[];			for(var i=0;i<sinGuardar.length;i++){				t = {					"id":sinGuardar[i],										"page":$("#"+sinGuardar[i]).data("page"),					"tabla":$("#"+sinGuardar[i]).data("tabla"),				};				console.log(t);				jmy_web_guardar({data:t});			}			sinGuardar=[];			$("#jmy_web_tools").hide(250);		});		$(".jmy_web_tools_cancelar").click(function(e){			$("#jmy_web_tools").hide(250);		});	}	function mensajeGuardado(){		$("#jmy_web").html("");		$("#jmy_web").html("<p>Dato guardado :) </p>").delay(2000).hide(500);	}	$(".jmy_web_div").click(function(e){		var data = {			"id":$(this).attr('id'),			"placeholder":$(this).data("placeholder"),			"page":$(this).data("page"),			"tabla":$(this).data("tabla"),		};				if(jQuery.inArray(data.id,sinGuardar) == -1){			sinGuardar.push(data.id);			console.log(sinGuardar);		}		herramientas();		if($(this).data('editor')!='no'){			/*CKEDITOR.remove(data.id);			CKEDITOR.replace(this);*/		}else{						console.log(e.pageX+ ' , ' + e.pageY);        	$(this).attr("contenteditable","true");        	CKEDITOR.remove(data.id);			botones({				pageX:e.pageX,				pageY:e.pageY,				data:data			});		}			});		/*Final de funciones Globales para el tema */		/* Funciones Editor de Blog */	function msk_add_blog(){		var html = '<button class="jmy_blog_guardar" >Agregar post en el Blog</button>';		html = html + '<input type="text" id="nombre_nuevo_post" placeholder="Nombre del nuevo post"> ';		$("#jmy_web_agregar_blog").html("");		$("#jmy_web_agregar_blog").html(html);		$(".jmy_blog_guardar").click(function (){			var str = $("#nombre_nuevo_post").val();			if(str!=''){				var r = str.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-').toLowerCase();				r = location.origin+"/blog/"+r+"/guardar";				window.location.href = r;			}else{ alert('Primero ingrese el titulo del post');}		});	}	function carga(d=[]){		$(".jmy_web_div").each(function(){			if($(this).data('editor')!='no')			    $(this).attr("contenteditable","true");			else				console.log(this);		});			} $( "#jmy_web" ).draggable({ cursor: "move", cursorAt: { top: 20, left: 20 } });	carga();	msk_add_blog();}); 