<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").hide("slow", function(){
                    alert("the witcher are here");
                });
            });
        });
    </script>
</head>
<body>

<button>Presse le boutton</button>

<p>This is a paragraph with little content.</p>

</body>
</html>

