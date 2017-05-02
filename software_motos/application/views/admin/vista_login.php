<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">

    <title>Formulario Ingreso</title>
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
        <link href="http://localhost/software_motos/css/style_ingreso.css" type="text/css" rel="stylesheet" media="all">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
   <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script> 

</head>
<body oncontextmenu="return false">

    <div class="login">
    <h1>Ingresa con tu usuario</h1>
    <form method="post">
        <input type="text" name="usr" placeholder="Usuario" id="usr"/>
        <input type="password" name="clave" placeholder="claveseña" id="clave"/>
        <!--<button class="btn btn-primary btn-block btn-large"><a href="index__software">Ingresar</a></button>-->
        <a href="javascript:void(0)" class="btn btn-primary btn-block btn-large" onclick="ingreso1()">Ingresar</a>
        <a href="" style="color: #fff;">Haz olvidado tu clave?</a>



    </form>

</div>


    <script type="text/javascript">

        function login(){
            $('#dlg1').dialog('open').dialog('setTitle','Login');
            $('#formulario1').form('clear');
        }

        function ingreso1(){
        Object.get = function(obj) {
            var size= new Array(); 
            res = new Object; var key, i=0;
            for (key in obj) {
            size[i]={idd:obj[i].idd,usuario:obj[i].usuario, clave:obj[i].clave};
            i++;
            }
            return size;
        };
        $.post( "IngresoPersonal", { key: valor=$('#usr').val() })
          .done(function( data ) {
          var res = data.split("----");
          var info = new Object();
          var si = 0;
          for(i=0; i<res.length-1; i++){
            var res2 = res[i].split("::::");
            info[i]={"idd":res2[0],"usuario":res2[1],"clave":res2[2]};
              window.location="Admin";
                        var sii = si + 1;
          }
            if (sii == undefined) {
            alert("No Existe");
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
