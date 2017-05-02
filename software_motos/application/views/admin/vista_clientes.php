<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">

<title>Administrador de Registro Clientes</title>
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
   <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <link href="http://localhost/software_motos/css/style_ingreso.css" type="text/css" rel="stylesheet" media="all">
    <link href="http://localhost/software_motos/css/estilo.css" type="text/css" rel="stylesheet" media="all">


</head>
<body oncontextmenu="return false">
	<section>  
            <h1 style="color:white;text-align:center;font-size:40px;">Registro Clientes</h1>

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
    <div class="Clientes btns">
                    <form id="formulario" name="formulario" method="post" action="agregar">
                        <input id="idd" name="idd" type="hidden">
                        <div style="float: left;" class="Campos">
                         <p style="color:white;float: left;margin-right: 10px;margin-top: 5px;">Nombre:</p>
                        <input id="nombre" name="nombre" class="easyui-textbox" required="true" style="width:40%;float:left;" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" >
                        </div>
                        <div style="float: left;" class="Campos">
                        <p style="color:white;float: left;margin-right: 10px;margin-top: 5px;">Identificacion:</p>
                        <input id="identificacion" name="identificacion" class="easyui-textbox" required="true" style="width:40%;float:left;" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                        </div>
                        <div style="float: left;" class="Campos">
                        <p style="color:white;float: left;margin-right: 10px;margin-top: 5px;">Telefono:</p>
                        <input id="telefono" name="telefono" class="easyui-textbox" required="true" style="width:40%;float:left;" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                        </div>
                        <div style="float: left;" class="Campos">
                        <p style="color:white;float: left;margin-right: 10px;margin-top: 5px;">Direccion:</p>
                        <input id="direccion" name="direccion" class="easyui-textbox" required="true" style="width:40%;float:left;" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                        </div>
                        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="guardar()" style="width:90px">Guardar</a>

                      <!-- <a href="indexSoftware.html" class="btn btn-primary btn-block btn-large">Ingresar</a>-->

                    </form>
                </div>
<div class="FormularioD">
<table id="dg" title="Registro Motos" class="easyui-datagrid" style="width:100%;height:250px;margin-top:20px;"
            url="areas"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="idd" width="50">Id</th>
                <th field="nombre" width="50">Nombre</th>
                <th field="identificacion" width="50">Identificación</th>
                <th field="telefono" width="50">Teléfono</th>
                <th field="direccion" width="50">Dirección</th>



            </tr>
        </thead>
        <?php foreach($listRegistro_clientes as $vista_clientes): ?>
        <?php
            echo '<tr><td>'.$vista_clientes['id'].'</td><td>'.$vista_clientes['nombre'].'</td> <td>'.$vista_clientes['identificacion'].'</td> <td>'.$vista_clientes['telefono'].'</td> <td>'.$vista_clientes['direccion'].'</td> </tr>'; 
        ?>
        <?php endforeach; ?>
    </table>
</div>
    <div style="background-color:white;margin-top:20px;text-align:center;border-radius:5px;" class="Botones">
        <a href="javascript:void(0)" class="easyui-linkbutton"  plain="true" onclick="nuevo()" style="border: 1px solid black;">Nuevo</a>
        <a href="javascript:void(0)" class="easyui-linkbutton"  plain="true" onclick="editar()" style="border: 1px solid black;">Editar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton"  plain="true" onclick="eliminar()" style="border: 1px solid black;">Eliminar</a>

    <span> || </span>
    <input id="pe1" name="pe1" style="line-height:18px;border:1px solid #ccc; width:100px;height:40px;margin-top:10px;padding:3px;"/>
    <a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()" style="border: 1px solid black;">Buscar</a>
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
            nombre = document.getElementById("nombre").value;
            identificacion = document.getElementById("identificacion").value;
        if( (nombre == "") || (identificacion == "") ) {
                alert("Error, Campo Nombre Vacío...");
        }
        else{

            document.getElementById("formulario").submit();
        }
         	       
        }
        

	function doSearch(){
		Object.get = function(obj) {
		    var size= new Array(); 
		    res = new Object; var key, i=0;
		    for (key in obj) {
			size[i]={idd:obj[i].idd,nombre:obj[i].nombre, identificacion:obj[i].identificacion,telefono:obj[i].telefono, direccion:obj[i].direccion,};
			i++;
		    }
		    return size;
		};
		$.post( "listarFiltroClientes", { key: valor=$('#pe1').val() })
		  .done(function( data ) {
		  var res = data.split("----");
		  var info = new Object();
		  for(i=0; i<res.length-1; i++){
			var res2 = res[i].split("::::");
			info[i]={"idd":res2[0],"nombre":res2[1],"identificacion":res2[2],"telefono":res2[3], "direccion":res2[4] };
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
