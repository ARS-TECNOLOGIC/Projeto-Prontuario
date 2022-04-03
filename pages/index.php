<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRONTUARIO</title>
</head>

<body>
    <div id="main">
        <nav class="side-bar">
            <ul>
                <li class="">Menu 1</li>
                <li id="box-1" class="">Menu 2</li>
                <ul id="box-1sub">
                    <li class="">Submenu 1</li>
                    <li class="">Submenu 1</li>
                    <li class="">Submenu 1</li>
                </ul>
                <li class="">Menu 3</li>
                <li id="box-2"class="">Menu 4</li>
                <ul id="box-2sub">
                    <li class="">Submenu 2</li>
                    <li class="">Submenu 2</li>
                    <li class="">Submenu 2</li>
                </ul>

            </ul>

        </nav>

    </div>



    <script>
        function alt(classMudar) {

            var valID = document.getElementById(classMudar+"sub").className;
            if (valID == 'menu-show') {
                document.getElementById(classMudar+"sub").className = 'menu'
            } else {
                document.getElementById(classMudar+"sub").className = 'menu-show'
            }

        };


        document.getElementById('box-1').addEventListener('click', function() {
            alt('box-1');
        });
        document.getElementById('box-2').addEventListener('click', function() {
            alt('box-2');
        });
 
    </script>
</body>

</html>