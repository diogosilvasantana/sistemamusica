<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/mootools-for-crop.js" type="text/javascript"> </script>
    <script src="js/UvumiCrop-compressed.js" type="text/javascript"> </script>
    <link href="css/uvumi-crop.css" media="screen" rel="stylesheet" type="text/css"></link>

    <style type="text/css">
        body,html{
            background-color:#333;
            margin:0;
            padding:0;
            font-family:Trebuchet MS, Helvetica, sans-serif;
        }

        hr{
            margin:20px 0;
        }

        #main{
            margin:5%;
            position:relative;
            overflow:auto;
            color:#aaa;
            padding:20px;
            border:1px solid #888;
            background-color:#000;
            text-align:center;
        }

        #resize_coords{
            width:50px;
        }

        #previewExample3{
            margin:10px;
        }

        .yellowSelection{
            border: 2px dotted #FFB82F;
        }

        .blueMask{
            background-color:#00f;
            cursor:pointer;
        }
    </style>
    <script type="text/javascript">
        exampleCropper1 = new uvumiCropper('imagem',{
            coordinates:false,
            preview:true,
            downloadButton:false,
            saveButton:true,
            serverScriptSave:'crop_it.php',  //aqui a pagina que recebe os parametros do crop
            onCropSuccess:function(){
                document.location = 'sucesso.php';
            },

            onCropFail:function(){
                document.location = 'error.php';
            },
            mini:{
                x:150,
                y:150
            },
            parameters:{
                usuario_id:'<?php echo $_REQUEST['user_id']?>'
            }
        });
    </script>
</head>
<body>
<div>
    <img alt="cropping test" id="imagem" src="uploads/?php echo $time . $file_name;?" />
</div>
<div id="saida">
</div>
</body>
</html>