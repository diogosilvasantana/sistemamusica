<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Preloader Activation Js---->

    <script type="text/javascript">

        var overlay = document.getElementById("loader");

        window.addEventListener('load', function(){
            overlay.style.display = 'none';
        })

    </script>



    <style>
        body{background:#ECF0F1}
        .overlay {
            background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .loader{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
            /*change these sizes to fit into your project*/
            width:100px;
            height:100px;
        }
        .loader hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-;animation:spin 2s ease infinite}

        .loader :first-child{background:#35A9DA;animation-delay:-1.5s}
        .loader :nth-child(2){background:#71D0C8;animation-delay:-1s}
        .loader :nth-child(3){background:#35A9DA;animation-delay:-0.5s}
        .loader :last-child{background:#35A9DA}

        @keyframes spin{
            0%,100%{transform:translate(0)}
            25%{transform:translate(120%)}
            50%{transform:translate(120%, 120%)}
            75%{transform:translate(0, 120%)}
        }

    </style>


</head>
<body>

<!-- ---------------
     Preloader Html-Markup
---------------- -->
<div class="overlay" id="loader">
    <div class="loader">
        <hr/><hr/><hr/><hr/>
    </div>
</div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/hySRqYFWT4M" frameborder="0" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hySRqYFWT4M" frameborder="0" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hySRqYFWT4M" frameborder="0" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hySRqYFWT4M" frameborder="0" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hySRqYFWT4M" frameborder="0" allowfullscreen></iframe>
<!-- END -->


<!-- Preloader Activation Js---->

<script type="text/javascript">

    var overlay = document.getElementById("loader");

    window.addEventListener('load', function(){
        overlay.style.display = 'none';
    })

</script>

</body>
</html>