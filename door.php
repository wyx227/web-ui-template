<!DOCTYPE html>

<html>

<head>
    <title>Website</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <?php


        $queue = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_SUB, "");


        $queue->connect("tcp://127.0.0.1:5555");
        $queue->setSockOpt(ZMQ::SOCKOPT_SUBSCRIBE, "");

        $var = $queue->recv();
        $obj = json_decode($var);
    ?>    
    <div class="header">
        Template
    </div>
    <div class="container">
        <div class="left-aside">
            <div class="title">
                Template
            </div>

            <ul>
                <li>
                    <a href="">A</a>
                </li>

                <li>
                    <a href="">B</a>
                </li>

                <li>
                    <a href="">C</a>
                </li>
                <li>
                    <a href="">D</a>
                </li>
            </ul>

            <ul class="bottom">
                <li>
                    <a href="#">Logout</a>
                    
                </li>
                <!--img src="/img/CTA3.png" /-->
            </ul>
        </div>
        <div class="main-content">
            <table class="blueTable">
                <thead>
                <tr>
                <th>Item</th>
                <th>Value</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <td colspan="2">
                </td>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                <td>Temp_SET</td>
                <td>%s</td>
                </tr>
                <tr>
                <td>cell1_2</td>
                <td>%s</td>
                </tr>
                <tr>
                <td>cell1_3</td>
                <td>%s</td>
                </tr>
                <tr>
                <td>cell1_4</td>
                <td>%s</td>
                </tr>
                <tr>
                <td>cell1_5</td>
                <td>%s</td>
                </tr>
                </tbody>
            </table>


            <!--button type="reset">Refresh</button-->    
        </div>
    </div>
</body>

</html>