<!DOCTYPE html>
<html>
<head>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
    <div id="recargar">
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(
                    function(){
                        $('#recargar').load('php.php');
                    },2000
            );
        });
    </script>
</body>
</html>
