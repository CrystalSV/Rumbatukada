<?php

/* CrystalRumbaBundle:Multimedia:addMultimedia.html.twig */
class __TwigTemplate_affb653f405185514d52ce59e011dfc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<! Doctype html>
<html lang=\"es\">
\t<head>
\t\t<title>Agregar Archivos multimedia</title>

\t\t<style>
\t\t\t.preview
\t\t\t{
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.play
\t\t\t{
\t\t\t\tposition: absolute;
\t\t\t\ttop: 49px; 
\t\t\t\tleft: 76px;
\t\t\t\topacity: .7;
\t\t\t}

\t\t\t.video
\t\t\t{
\t\t\t\tborder: 3px dashed #000;
\t\t\t\tdisplay: inline-block;
\t\t\t\twidth: 200;
\t\t\t\theight: 130;
\t\t\t\t-webkit-border-radius: 10px;
\t\t\t\t-moz-border-radius: 10px;
\t\t\t\tmargin-bottom: 40px;
\t\t\t\tmargin-right: 20px;
\t\t\t\tvertical-align: bottom;
\t\t\t}

\t\t</style>

\t\t<script>
\t\t\tvar numVideos = 0;
\t\t\tfunction getVideoId(control)
\t\t\t{
\t\t\t\tvar url = document.getElementById(control).value;
\t\t\t\tvar array = url.split('=');
\t\t\t\tvar videoId = array[1];
\t\t\t\t
\t\t\t\treturn videoId;
\t\t\t}

\t\t\tfunction generateThumbnail(control, id)
\t\t\t{
\t\t\t\tvar container = document.getElementById(id + numVideos);
\t\t\t\tvar videoId = getVideoId(control);

\t\t\t\tvar img = container.getElementsByTagName('img')[0];
\t\t\t\timg.src = 'http://img.youtube.com/vi/' + videoId + '/0.jpg';

\t\t\t\tvar link = container.getElementsByTagName('a')[0].href = 'http://www.youtube.com/watch?v=' + videoId;

\t\t\t\tcontainer.getElementsByTagName('input')[0].value = videoId;

\t\t\t\tcontainer.getElementsByTagName('div')[0].style.display = 'none';
\t\t\t\tcontainer.getElementsByTagName('div')[1].style.display = 'block';

\t\t\t\tnumVideos++;
\t\t\t\tdocument.getElementById('numVideos').value = numVideos;

\t\t\t\tcloneVideo(control, id + (numVideos - 1), videoId);
\t\t\t}

\t\t\tfunction cloneVideo(control, id, videoId)
\t\t\t{
\t\t\t\tvar newDiv = document.getElementById(id).cloneNode(true);

\t\t\t\tnewDiv.id = 'video' + numVideos;

\t\t\t\tnewDiv.getElementsByTagName('input')[0].name = 'txtVideo' + (numVideos);

\t\t\t\tnewDiv.getElementsByTagName('div')[0].style.display = 'block';
\t\t\t\tnewDiv.getElementsByTagName('div')[1].style.display = 'none';

\t\t\t\tdocument.getElementById('videos').appendChild(newDiv);

\t\t\t\tdocument.getElementById(control).value = '';
\t\t\t}

\t\t</script>
\t</head>
\t<body>
\t\t<form method=\"post\">
\t\t\t<div id=\"videos\">
\t\t\t\t<div id=\"video0\" class=\"video\">
\t\t\t\t\t<div style=\"display: block; line-height: 8; text-align: center;\">
\t\t\t\t\t\tVideo
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"preview\" style=\"display: none\">
\t\t\t\t\t\t<a target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"\" width=\"200\" height=\"130\" />
\t\t\t\t\t\t\t<img class=\"play\" src=\"http://www.symmetrix.ca/wp-content/themes/symmetrix/images/vom-playbutton.png\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"txtVideo0\" value=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div display=\"block\">
\t\t\t\tURL de Youtube: <input type=\"url\" name=\"txtVideo\" id=\"txtVideo\" />
\t\t\t\t <a onClick=\"generateThumbnail('txtVideo', 'video')\">Guardar</a>\t\t\t\t 
\t\t\t</div>

\t\t\t<br /><br />
\t\t\t<input type=\"hidden\" name=\"numVideos\" id=\"numVideos\" value=\"\">
\t\t\t<input type=\"submit\" value=\"Enviar\">
\t\t</form>
\t</body>\t
</html>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Multimedia:addMultimedia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
