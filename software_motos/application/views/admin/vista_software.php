<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">

<title>Registro Usuarios-Login</title>
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
   <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script> 

</head>
<body oncontextmenu="return false" >
	<section>  
		<table id="dg" title="Usuarios-Login" class="easyui-datagrid" style="width:800px;height:250px"
            url="areas"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="idd" width="50">Id</th>
                <th field="usuario" width="50">Usuario</th>
                <th field="clave" width="50">Clave</th>
               
            </tr>
        </thead>
		<?php foreach($listRegistro_usuario as $vista_usuarios): ?>
		<?php
			echo '<tr><td>'.$vista_usuarios['id'].'</td><td>'.$vista_usuarios['usuario'].'</td><td>'.$vista_usuarios['clave'].'</td></tr>'; 
		?>
		<?php endforeach; ?>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="nuevo()">Nuevo</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editar()">Editar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="eliminar()">Eliminar</a>

	<span>>></span>
	<input id="pe1" name="pe1" style="line-height:18px;border:1px solid #ccc"/>
	<a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()">Buscar</a>
    </div>
    
    <div name="dlg" id="dlg" class="easyui-dialog" style="width:300px;height:250px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">Informacion Usuario</div>
        <form id="formulario" name="formulario" method="post" action="agregar">
            <input id="idd" name="idd" type="hidden">
            <div class="fitem">
                <label>Usuario:</label>
                <input id="usuario" name="usuario" class="easyui-textbox" required="true">
                <label>Clave:</label>
                <input id="clave" name="clave" class="easyui-textbox" required="true">
                
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="guardar()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>



     <div name="dlg1" id="dlg1" class="easyui-dialog" style="width:300px;height:250px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">Eliminar</div>
        <form id="formularioEliminar" name="formularioEliminar" method="post">
            <input id="idd1" name="idd" type="hidden">
            <label> Desea Eliminar? </label>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-remove" onclick="confirEliminar()" style="width:90px">Eliminar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg1').dialog('close')" style="width:90px">Cancelar</a>
    </div>


    <script type="text/javascript">

        function nuevo(){
            $('#dlg').dialog('open').dialog('setTitle','Nuevo');
            $('#formulario').form('clear');
        }

        function editar(){ 
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','Editar');
	        $('#formulario').form('clear');
                $('#formulario').form('load', row);
            }
        }
         function eliminar(){ 
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg1').dialog('open').dialog('setTitle','Eliminar');
            $('#formularioEliminar').form('clear');
                $('#formularioEliminar').form('load', row);
            }
        }

        function confirEliminar(){
            window.location.reload(true);
            $.post( "eliminar", { key: valor=$('#idd1').val() })
        }

        function guardar(){
         	document.getElementById("formulario").submit();       
        }

	function doSearch(){
		Object.get = function(obj) {
		    var size= new Array(); 
		    res = new Object; var key, i=0;
		    for (key in obj) {
			size[i]={idd:obj[i].idd,usuario:obj[i].usuario, clave:obj[i].clave,};
			i++;
		    }
		    return size;
		};
		$.post( "listarFiltroUsuarios", { key: valor=$('#pe1').val() })
		  .done(function( data ) {
		  var res = data.split("----");
		  var info = new Object();
		  for(i=0; i<res.length-1; i++){
			var res2 = res[i].split("::::");
			info[i]={"idd":res2[0],"usuario":res2[1],"clave":res2[2]};
		  }
		  var data2 = {"total":Object.keys(info).length,"rows":Object.get(info)};
		  $('#dg').datagrid('loadData', data2);
		  });
	}
    </script>
    <style type="text/css">
    
        #fm{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:14px;
            font-weight:bold;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
        .fitem input{
            width:160px;
        }
    </style>
	</section>
</body>

</html>
