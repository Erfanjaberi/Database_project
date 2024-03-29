<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>

        html, body{
            padding:0px;
            margin:0px;
            font-family: 'Raleway', sans-serif;
            color:#FFF;
            height:100%;
        }
        body{
            background:url("grass.jpg");
            background-size: cover;
        }

        .container{
            max-width:200px;
            background:rgba(0, 0, 0, 0.75);
            margin:40px auto;
            padding:10px 0px 20px 0px;
            border:1px solid #111;
            border-radius:4px;
            box-shadow:0px 4px 5px rgba(0, 0, 0, 0.75);
        }
        .link{
            font-size:16px;
            font-weight:300;
            text-align:center;
            position:relative;
            height:40px;
            line-height:40px;
            margin-top:10px;
            overflow:hidden;
            width:90%;
            margin-left:5%;
            cursor:pointer;
        }
        .link:after{
            content: '';
            position:absolute;
            width:80%;
            border-bottom:1px solid rgba(255, 255, 255, 0.5);
            bottom:50%;
            left:-100%;
            transition-delay: all 0.5s;
            transition: all 0.5s;
        }
        .link:hover:after,
        .link.hover:after{
            left:100%;
        }
        .link .text{
            text-shadow:0px -40px 0px rgba(255, 255, 255, 1);
            transition:all 0.75s;
            transform:translateY(100%) translateZ(0);
            transition-delay:all 0.25s;
        }
        .link:hover .text,
        .link.hover .text{
            text-shadow:0px -40px 0px rgba(255, 255, 255, 0);
            transform:translateY(0%) translateZ(0) scale(1.1);
            font-weight:600;
        }
        a:link {
            text-decoration: none;
        }
        a:link {
            color: green;
        }
        a:visited {
            color: green;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="link">
        <div class="text"><a href="index.php/Leage/player_list">Players</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/team_list">Teams</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/competitions">Week matches</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/reserve_player">Buy players</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/insert_result">Insert result</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/register_goal">Register goal</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/results">Results</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/insert_player">Register player</a></div>
    </div>
    <div class="link">
        <div class="text"><a href="index.php/Leage/insert_team">Register team</a></div>
    </div>

</div>

</body>

</html>


<script>

    //For Demo only
    var links = document.getElementsByClassName('link')
    for(var i = 0; i <= links.length; i++)
        addClass(i)


    function addClass(id){
        setTimeout(function(){
            if(id > 0) links[id-1].classList.remove('hover')
            links[id].classList.add('hover')
        }, id*750)
    }

</script>

