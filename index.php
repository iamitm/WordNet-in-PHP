<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">


<head>


<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" media="screen"
      href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css"/>
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0, 0, 0, 0.6);
        -o-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -moz-transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
        -o-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    a.fancybox:hover img {
        position: relative;
        z-index: 999;
        -o-transform: scale(1.03, 1.03);
        -ms-transform: scale(1.03, 1.03);
        -moz-transform: scale(1.03, 1.03);
        -webkit-transform: scale(1.03, 1.03);
        transform: scale(1.03, 1.03);
    }
</style>

<!-- TemplateBeginEditable name="doctitle" -->

<title>Query WordNet: PHP WordNet</title>

<style type="text/css">
<!--
.STYLE6 {
    color: #fffef7;
    font-size: 70px;
}

.STYLE7 {
    font-size: 30px;
    color: #fffef7;
}

body, td, th {
    font-family: Georgia, Times New Roman, Times, serif;
    font-size: x-large;
    color: #000000;
}

.STYLE9 {
    font-size: 50px;
    font-family: "Times New Roman", Times, serif;
    color: #FF6600;
    font-weight: bold;
}

.STYLE10 {
    color: #000000;
}

body {
    background-color: #DFDFFF;
    margin-left: 100px;
    margin-right: 100px;
}

.STYLE20 {
    font-weight: bold;
    font-family: Times, serif;
    font-size: x-large;
    color: #0000FF;
}

.STYLE24 {
    color: #000000
}

.STYLE28 {
    color: #66FFFF
}

.STYLE31 {
    font-size: medium;
    color: #000000;
}

.STYLE32 {
    color: #FF6600;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
    font-size: 24px;
}

.STYLE34 {
    color: #FF6600
}

.STYLE35 {
    font-size: 16px;
    color: #000000;
}

.STYLE37 {
    color: #66FFFF;
    font-size: x-large;
}

.STYLE39 {
    font-size: x-large;
}

.STYLE40 {
    font-size: 16px;
    color: #000000;
    font-weight: bold;
}

.loader {
    position: fixed;
    left: 400px;
    top: 400px;
    width: 50%;
    height: 50%;
    z-index: 9999;
    background: url('./images/page2-loading.gif') center center no-repeat #DFDFFF;
}

#overlay {
    display: none;
    position: fixed;
    background: #000;
    z-index: 2000;
}

#loading {
    padding: 10px 10px 10px 60px;
    width: 400px;
    height: 75px;
    background: url('./images/page2-loading.gif') 10px 50% no-repeat #DFDFFF;
    position: fixed;
    display: none;
    z-index: 3000;
}

#loading h3 {
    margin: 3px 0 0 0;
    padding: 0;
}

.hidden {
    display: none;
}

.rounded_edges {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: lightblue;
    border: 1px solid lightblue;
}

.round_edge2 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: limegreen;
    border: 1px solid limegreen;
}

.round_edge3 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: yellowgreen;
    border: 1px solid yellowgreen;
}

.round_edge4 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: darkgoldenrod;
    border: 1px solid darkgoldenrod;
}

.round_edge5 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: lightseagreen;
    border: 1px solid lightseagreen;
}

.round_edge6 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: darkgreen;
    border: 1px solid darkgreen;
}

.round_edge7 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: deepskyblue;
    border: 1px solid deepskyblue;
}

#checkoutbutton {
    width: 67px;
    height: 40px;
    background-color: #33FF00;
    -moz-border-radius: 15px;
    -webkit-border-radius: 15px;
    border: 5px solid #009900;
    padding: 5px;
}

.header-outer {
    background: linear-gradient(135deg, rgba(37, 79, 117, 0.9) 0%, rgba(78, 129, 182, 0.9) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    padding-top: 25px;
    padding-bottom: 5px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    border: 1px solid limegreen;
}

.footer-outer {
    background: #8888bb;
    padding-top: 15px;
    padding-bottom: 10px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    border: 1px solid white;
}

.footer {
    color: #fff;
    font-size: 14px;
}

.last-modify {
    float: left;
}

.univr-logo {
    float: right;
}

.vips-logo {
    float: left;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;

#thediv {
    margin: 0 auto;
    height: 400px;
    width: 400px;
    overflow: hidden;
}

img {
    position: relative;
    left: 50%;
    top: 50%;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>
<center>
    <body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript"
            src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
    <script type="text/javascript">
        $(function ($) {
            var addToAll = false;
            var gallery = true;
            var titlePosition = 'inside';
            $(addToAll ? 'img' : 'img.fancybox').each(function () {
                var $this = $(this);
                var title = $this.attr('title');
                var src = $this.attr('data-big') || $this.attr('src');
                var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
                $this.wrap(a);
            });
            if (gallery)
                $('a.fancybox').attr('rel', 'fancyboxgallery');
            $('a.fancybox').fancybox({
                titlePosition: titlePosition
            });
        });
        $.noConflict();
    </script>

    <div class="header-outer">
        <div class="container">
            <div class="univr-logo">
                <a href="http://vips.sci.univr.it/" target="_blank">
                    <img src="./images/vipslogo.png" alt="VIPS logo" width="70px">
                </a>
            </div>
            <div class="vips-logo">
                <a href="http://www.univr.it" target="_blank">
                    <img src="./images/logo-univr.png" alt="University Logo" width="170px" height="60px"> </a>
            </div>

                <span class="STYLE9">WORDNET in PHP (PEACE) </span>

        <div class="STYLE6"> Vision, Image Processing & Sound Lab</div>
        <div class="STYLE7">Department of Computer Science, University of Verona (ITALY)</div>

        </div>
    </div>

    <form class="rounded_edges" method="post" action="">
        <table class=" rounded_edges" width="1000" border="0">
        <span class="STYLE4">
          keyword: <input type="text" name="search"
                          value="<?php echo isset($_POST['search']) ? $_POST['search'] : ''; ?>"
                          placeholder="e.g., car"> &nbsp;             
        <br> <input type="submit" value="Search"
                    style="height:50px; width:90px; -moz-border-radius:15px;  border-radius: 15px;  border: 1px solid yellowgreen; " " />
    </span>
        </table>
        <p></p>
    </form>
    </a>


    <?php
    // error_reporting(E_ALL);
    ###############################################################
    #    input data configuration
    ###############################################################
    $queryInput = $_POST['search'];
    $urlstr = urlencode($queryInput);
    header("Location: http://klimble.com/sami/IMCAD/index.php?q=$urlstr");
    if (empty($queryInput)) {
        echo 'Please fill up the required fields';
        exit;
    }
    echo '<div class="row">';
    ###############################################################
    #    WordNet query (Synonym)
    ###############################################################
    $cmd = 'wn ' . '' . $queryInput . ' ' . '-synsn';
    $result = shell_exec($cmd);
    preg_match_all('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s*\=> [\w+\s*|\,|\-]*/', $result, $senses);
    $synonBank = preg_replace('/\Sense 1/', ' ', $senses[0]);
    $synonBank = preg_replace('/=>/', ',', $synonBank);
    $synonBank = preg_replace('/Sense 2\s[\w+\s*|\,|\-]*/', '', $synonBank);
    $synonBank = preg_replace('/' . $queryInput . '/', '', $synonBank);
    $word = strtok($synonBank[0], ',');
    $sysnon[] = $word;
    while (false !== $word) {
        $word = strtok(',');
        $sysnon[] = trim(str_replace($queryInput, '', $word));
    }
    $myarray = array_filter($sysnon);


    echo '<div class="text-center">';
    echo '<h3 style="margin: 10px 0 5px;font-size:28px">Synonymy &nbsp; &nbsp;&nbsp;</h3>';
    echo '<hr style="margin-top:0;margin-bottom:30px;">';
    echo ' <div class="row">';
    echo  '<div class="col-sm-12">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-body">';

    if (!empty($myarray)){
        foreach($myarray as $key=>$value) {

            echo '<p>'. $value . '</p>';

    }
    }
    else {
        print 'there is not synonymy for the word';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    ###############################################################

    #  re-Query flickr for bigrams obtained by QUALITY

    ###############################################################
    echo '<div class="text-center">';
    echo '<h3 style="margin: 10px 0 5px;font-size:28px">Hyponymy &nbsp; &nbsp;&nbsp;</h3>';
    echo '<hr style="margin-top:0;margin-bottom:30px;">';
    echo ' <div class="row">';
    echo  '<div class="col-sm-12">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-body">';
    ###############################################################
    #    WordNet query (Hyponymy)
    ###############################################################
    $cmd = 'wn ' . ' ' . $queryInput . ' -n1 ' . '-hypon';
    $result2 = shell_exec($cmd);
    preg_match_all('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s* [\=> [\w+\s*|\,|\-]*[\n]]*/', $result2, $senseshyp);
    $hypoBank = preg_replace('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s*/', ' ', $senseshyp[0]);
    $hypoBank = preg_replace('/=>/', ',', $hypoBank);
    $hypoBank = preg_replace('/^' . $queryInput . '$/', '', $hypoBank);
    $hypoBank = preg_replace('/Sense 2\s[\w+\s*|\,|\-]*/', '', $hypoBank);
    $word2 = strtok($hypoBank[0], ',');
    while (false !== $word2) {
        $word2 = strtok(',');
        $hypon[] = trim(str_replace($queryInput, '', $word2));
    }
    if (!empty($hypon)) {
        foreach ($hypon as $key => $value) {

            echo '<p>' . $value . '</p>';

        }
    }
        else{
            print 'there is not hyponymy for the word';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    ###############################################################

    #  re-Query flickr for bigrams obtained by QUALITY

    ###############################################################
    echo '<div class="row">';
    $cmd = 'wn ' . ' ' . $queryInput . ' -n1 ' . '-hypern';
    $result2 = shell_exec($cmd);
    preg_match_all('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s* [\=> [\w+\s*|\,|\-]*[\n]]*/', $result2, $senseshyp);
    $hypoBank = preg_replace('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s*/', ' ', $senseshyp[0]);
    $hypoBank = preg_replace('/=>/', ',', $hypoBank);
    $hypoBank = preg_replace('/^' . $queryInput . '$/', '', $hypoBank);
    $hypoBank = preg_replace('/Sense 2\s[\w+\s*|\,|\-]*/', '', $hypoBank);
    $word2 = strtok($hypoBank[0], ',');
    while (false !== $word2) {
        $word2 = strtok(',');
        $hypern[] = trim(str_replace($queryInput, '', $word2));
    }

    echo '<div class="text-center">';
    echo '<h3 style="margin: 10px 0 5px;font-size:28px">Hyperymy &nbsp; &nbsp;&nbsp;</h3>';
    echo '<hr style="margin-top:0;margin-bottom:30px;">';
    echo ' <div class="row">';
    echo  '<div class="col-sm-12">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-body">';

    if (!empty($hypern)){
        foreach($hypern as $key=>$value) {
            echo '<p>'. $value . '</p>';
        }
    }
    else {
        print 'there is not hypernymy for the word';
    }
    echo '<div class="text-center">';
    echo ' <div class="row">';
    echo  '<div class="col-sm-2">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-body">';
    ?>


    </body>
</center>
</html>
