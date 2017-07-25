<head>
    <title>teste</title>

    <script>


        var checkobj

        function agreesubmit(el){
            checkobj=el
            if (document.all||document.getElementById){
                for (i=0;i<checkobj.form.length;i++){ //hunt down submit button
                    var tempobj=checkobj.form.elements[i]
                    if(tempobj.type.toLowerCase()=="text"||tempobj.type.toLowerCase()=="radio")
                        tempobj.disabled=!checkobj.checked
                }
            }
        }

        function defaultagree(el){
            if (!document.all&&!document.getElementById){
                if (window.checkobj&&checkobj.checked)
                    return true
                else{
                    alert("Please read/accept terms to submit form")
                    return false
                }
            }
        }

    </script>

</head>
<body>

<form name="agreeform" onSubmit="return defaultagree(this)">
    <input name="agreecheck" type="checkbox" onClick="agreesubmit(this)">
    <b>Abilita/Desabilita</b><br>
    <br>
    <input type="text" nome="teste" disabled>
    <br>
    <br>
    <input type="radio" name="radiobutton" value="radiobutton" disabled>
</form>

<script>