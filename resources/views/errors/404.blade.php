<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erro de pagina</title>
</head>
<body>
    <div id="container"> 
         <div class="content">
             <h2>404</h2>
             <h4>Não encontramos esta pagína!</h4>
             <p>A pagína solicitada não estar disponivel ou não existe</p>
             <a href="/">Volta</a>
         </div>
    </div>
    <script type="text/javascript">
        var container = document.getElementById('container');
        window.onmousemove = function(e) {
            var x = - e.clientX / 5,
                y = - e.clientY / 5;
            container.style.backgroundPositionX = x + 'px';
            container.style.backgroundPositionY = y + 'px';

        }
    </script>
</body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }

    body {
        background: linear-gradient(32deg, #888a91, #e1e2e6);
        height: 100vh;
    }

    #container {
        position: absolute;
        top: 10%;
        left: 10%;
        right: 10%;
        bottom: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #3123;
        box-shadow: 0 15px 30px rgba(0, 0, 0, .5);
        background: url('../images/front_images/p404.png'), #111111;
    }

    #container .content {
        max-width: 600vw;
        text-align: center;
    }

    #container .content h2 {
        font-size: 18vw;
        color: #fff;
        line-height: 1em;
    }

    #container .content h4 {
        position: relative;
        font-size: 1.5em;
        color: #111;
        background: #fff;
        font-weight: 300;
        padding: 10px 20px;
        display: inline-block;
    }

    #container .content p {
        color: #fff;
        font-size: 1.2em;
    }

    #container .content a {
        position: relative;
        display: inline-block;
        padding: 10px 25px;
        background: #fff;
        color: rgb(116, 61, 61);
        text-decoration: none;
        margin-top: 25px; 
        border-radius: 25px;
        border-bottom: 3px solid #eee;

    }
</style>
</html>

