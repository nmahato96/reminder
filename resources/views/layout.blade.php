<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #4fc08d;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            ::-moz-selection { /* Code for Firefox */
    color: black;
    background: yellow;
}

::selection {
    color: black;
    background: yellow;
}
.welcome {
    margin-left: 34%;
    font-weight: 600;
    color: #4fc08d;
    animation-name:blink;
    animation-duration: 0.8s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

.content {
    border: 2px solid #47ad7f;
    width: 30%;
    border-radius: 10px;
    padding: 2%;
    background: white;
    box-shadow: 0px 0px 15px #0003;
}
            .todo {

border: 2px solid #4fc08d;
border-radius: 34px;
font-size: 15px;
width: 72%;
line-height: 40px;
text-indent: 1rem;
color: #4fc08d;
font-weight: 700;
letter-spacing: 1px;
margin-bottom: 18px;

}
.far.fa-trash-alt:hover {
    color: #e16969;
}
.todo_submit {

width: 86px;
border: 2px solid #4fc08d;
border-radius: 36px;
margin-left: 6px;
color: #4fc08d;
font-size: 17px;
padding: 8px;
font-weight: 600;
background: white;

}
.title.m-b-md {

padding: 0;
margin: 0;

}
.todo_list {

list-style-type: none;
padding: 0;
}
.todo_list li {

font-size: 94%;
padding: 0px 10px;
margin-left: 0;
color: #4fc08d;
font-weight: 600;
width: 240px;
display: inline-block;
margin-bottom: 6px;

}
.edit {

color: #36b3b299;
font-size: 88%;
margin: 0px 5px;

}
.delete {

color: #848484b3;
font-size: 88%;
}

            .title {
                font-size: 24px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            hr{
                margin:0;
                padding:0;
            }
            .todo_submit:hover {

color: white;
background: #4fc08d;
cursor: pointer;
transition: 0.5s ease all;

}
.alert.alert-success {
    font-weight: 600;
    color: #4fc08d;
}
@keyframes blink{
    0%{
        opacity:0;
    }
    25%{
        opacity:1;
    }
    100%{
        opacity:1;
    }
}
        </style>
    </head>
    <body>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
        </div>
        @endif
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
