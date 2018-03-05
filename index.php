<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap.min.css" >
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="./dist/admin4b.min.css">
  <link rel="stylesheet" href="./dist/admin4b-highlight.min.css">
  <title>Grupo 7 - Crawling</title>
</head>
<body>

<div class="app">
  <div class="app-body">
    <div class="app-sidebar sidebar-dark sidebar-slide-left">
  <div class="text-right">
    <button type="button" class="btn btn-sidebar" data-dismiss="sidebar">
      <span class="x"></span>
    </button>
  </div>
  <div class="sidebar-header">
    <img src="img/logo.png" class="user-photo">
    <p class="username">Diego Herrera <br> Jairo Solarte <br> Jorge Gonzales</p>
  </div>
  <div id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">
    <a href="./index.php" class="sidebar-nav-link">
      <i class="fa fa-play"></i> Inicio
    </a>
    <a href="./programas.php" class="sidebar-nav-link">
      <i class="fa fa-building-o"></i> Programas
    </a>
    <a href="./departamentos.php" class="sidebar-nav-link">
      <i class="fa fa-university"></i> Departamentos
    </a>
    <a href="./profesores.php" class="sidebar-nav-link">
      <i class="fa fa-users"></i> Profesores
    </a>
    <a href="./noticias.php" class="sidebar-nav-link">
      <i class="fa fa-newspaper-o"></i> Noticias
    </a>
    <a href="./noticias_rss.php" class="sidebar-nav-link">
      <i class="fa fa-rss"></i> Noticias RSS
    </a>
    
  </div>
  <div class="sidebar-footer">
    <a href="https://github.com/jairosolarte/scrapy" data-toggle="tooltip" title="GitHub">
      <i class="fa fa-github"></i>
    </a>
    <!--a href="./pages/sample-pages/settings.html" data-toggle="tooltip" title="Settings">
      <i class="fa fa-cog"></i>
    </a>
    <a href="./pages/sample-pages/signin.html" data-toggle="tooltip" title="Logout">
      <i class="fa fa-power-off"></i>
    </a-->
  </div>
</div>

    <div class="app-content">
      <nav class="navbar navbar-expand navbar-light bg-white">
  <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
    <i class="fa fa-bars"></i>
  </button>
  <div class="navbar-brand">
    Uniandes - Análisis de Información sobre Big Data - Grupo 7 - Crawling - Scrapy Python 
  </div>
  
  <!--<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="badge badge-pill badge-primary">3</span>
        <i class="fa fa-bell-o"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (today)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (yesterday)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (12/25/2017)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item text-primary">
          See all notifications
        </a>
      </div>
    </li>
  </ul>-->

</nav>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Descubrimiento de información y manejo básico de fuentes semiestructuradas y no estructuradas</li>
  </ol>
</nav>
<div class="container-fluid">

<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<title>Español</title>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Batang;
	panose-1:2 3 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Monotype Sorts";}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"\@Batang";
	panose-1:2 3 6 0 0 1 1 1 1 1;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
h1
	{mso-style-link:"Título 1 Car";
	margin:0cm;
	margin-bottom:.0001pt;
	text-indent:0cm;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Times New Roman",serif;
	font-variant:small-caps;
	font-weight:bold;}
h2
	{margin:0cm;
	margin-bottom:.0001pt;
	text-indent:0cm;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;
	font-variant:small-caps;
	font-weight:bold;}
h3
	{margin:0cm;
	margin-bottom:.0001pt;
	text-indent:0cm;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	font-variant:small-caps;
	font-weight:bold;}
h4
	{margin:0cm;
	margin-bottom:.0001pt;
	text-indent:0cm;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	font-variant:small-caps;
	font-weight:normal;}
h5
	{margin:0cm;
	margin-bottom:.0001pt;
	text-indent:0cm;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	font-variant:small-caps;
	font-weight:normal;}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;
	text-transform:uppercase;
	font-weight:bold;}
p.MsoToc2, li.MsoToc2, div.MsoToc2
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:12.0pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;
	font-variant:small-caps;}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:24.0pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;
	font-style:italic;}
p.MsoToc4, li.MsoToc4, div.MsoToc4
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;}
p.MsoToc5, li.MsoToc5, div.MsoToc5
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:48.0pt;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;}
p.MsoToc6, li.MsoToc6, div.MsoToc6
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:60.0pt;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;}
p.MsoToc7, li.MsoToc7, div.MsoToc7
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;}
p.MsoToc8, li.MsoToc8, div.MsoToc8
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:84.0pt;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;}
p.MsoToc9, li.MsoToc9, div.MsoToc9
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:96.0pt;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;}
p.MsoFootnoteText, li.MsoFootnoteText, div.MsoFootnoteText
	{mso-style-link:"Texto nota pie Car";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:21.3pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-21.3pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin-top:0cm;
	margin-right:9.6pt;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	text-align:justify;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;
	color:#1F497D;
	font-style:italic;}
span.MsoFootnoteReference
	{vertical-align:super;}
span.MsoEndnoteReference
	{vertical-align:super;}
p.MsoEndnoteText, li.MsoEndnoteText, div.MsoEndnoteText
	{mso-style-link:"Texto nota al final Car";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{mso-style-link:"Subtítulo Car";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	text-align:justify;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	color:#5A5A5A;
	letter-spacing:.75pt;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoDocumentMap, li.MsoDocumentMap, div.MsoDocumentMap
	{margin:0cm;
	margin-bottom:.0001pt;
	background:navy;
	font-size:12.0pt;
	font-family:"Tahoma",sans-serif;}
p
	{margin-right:0cm;
	margin-left:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Texto de globo Car";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.MsoBibliography, li.MsoBibliography, div.MsoBibliography
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.enum3, li.enum3, div.enum3
	{mso-style-name:enum3;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-18.0pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.enum2, li.enum2, div.enum2
	{mso-style-name:enum2;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.enum1, li.enum1, div.enum1
	{mso-style-name:enum1;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:1.0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-21.25pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.enum4, li.enum4, div.enum4
	{mso-style-name:enum4;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:4.0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-21.25pt;
	font-size:11.0pt;
	font-family:"Times New Roman",serif;}
p.T-Normal, li.T-Normal, div.T-Normal
	{mso-style-name:T-Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.T-enum1, li.T-enum1, div.T-enum1
	{mso-style-name:T-enum1;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:8.5pt;
	margin-bottom:.0001pt;
	text-indent:-8.5pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.T-enum2, li.T-enum2, div.T-enum2
	{mso-style-name:T-enum2;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:17.0pt;
	margin-bottom:.0001pt;
	text-indent:-8.5pt;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.T-code, li.T-code, div.T-code
	{mso-style-name:T-code;
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Courier New";}
p.Code, li.Code, div.Code
	{mso-style-name:Code;
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Courier New";}
span.Type
	{mso-style-name:Type;
	font-family:"Courier New";}
span.T-Type
	{mso-style-name:T-Type;
	font-family:"Courier New";}
span.TextonotapieCar
	{mso-style-name:"Texto nota pie Car";
	mso-style-link:"Texto nota pie";}
span.TextodegloboCar
	{mso-style-name:"Texto de globo Car";
	mso-style-link:"Texto de globo";
	font-family:"Tahoma",sans-serif;}
span.Ttulo1Car
	{mso-style-name:"Título 1 Car";
	mso-style-link:"Título 1";
	font-variant:small-caps;
	font-weight:bold;}
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	margin:0cm;
	margin-bottom:.0001pt;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	color:black;}
span.apple-converted-space
	{mso-style-name:apple-converted-space;}
p.ParaAttribute0, li.ParaAttribute0, div.ParaAttribute0
	{mso-style-name:ParaAttribute0;
	margin:0cm;
	margin-bottom:.0001pt;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
span.CharAttribute0
	{mso-style-name:CharAttribute0;
	font-family:"Times New Roman",serif;}
span.SubttuloCar
	{mso-style-name:"Subtítulo Car";
	mso-style-link:Subtítulo;
	font-family:"Calibri",sans-serif;
	color:#5A5A5A;
	letter-spacing:.75pt;}
p.paragraph, li.paragraph, div.paragraph
	{mso-style-name:paragraph;
	margin-right:0cm;
	margin-left:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.normaltextrun
	{mso-style-name:normaltextrun;}
span.eop
	{mso-style-name:eop;}
span.spellingerror
	{mso-style-name:spellingerror;}
span.contextualspellingandgrammarerror
	{mso-style-name:contextualspellingandgrammarerror;}
span.TextonotaalfinalCar
	{mso-style-name:"Texto nota al final Car";
	mso-style-link:"Texto nota al final";}
.MsoChpDefault
	{font-size:10.0pt;}
 /* Page Definitions */
 @page WordSection1
	{size:612.1pt 792.1pt;
	margin:2.0cm 2.0cm 63.8pt 2.0cm;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=ES-CO link=blue vlink=purple>

<div class=WordSection1>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=657 style='width:492.55pt;border-collapse:collapse;border:none;
 margin-left:4.8pt;margin-right:4.8pt'>
 <tr style='height:27.85pt'>
  <td width=142 rowspan=2 valign=top style='width:106.65pt;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:27.85pt'>
  <p class=MsoNormal><span style='position:absolute;z-index:251658240;
  margin-left:0px;margin-top:31px;width:129px;height:51px'><img width=129
  height=51 src="img/image005.jpg"
  alt="http://fisicaexpdemostrativos.uniandes.edu.co/Images/logo_uniandes.jpg"></span></p>
  </td>
  <td width=515 valign=top style='width:385.9pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt;height:27.85pt'>
  <p class=MsoNormal align=center style='margin-left:18.0pt;text-align:center'><span
  lang=ES>Taller 1</span></p>
  <h3 align=center style='margin-right:2.25pt;text-align:center;background:
  white'><span style='font-variant:normal !important;text-transform:uppercase'>Análisis
  de Información sobre Big Data</span></h3>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;margin-left:-2.25pt;margin-right:
   -2.25pt'>
   <tr style='height:5.8pt'>
    <td width=486 valign=top style='width:364.85pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
    height:5.8pt'>
    <p class=MsoNormal align=center style='margin-top:.45pt;text-align:center'><b><span
    lang=ES>&nbsp;</span></b></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal align=center style='text-align:center'></p>
  </td>
 </tr>
 <tr style='height:14.0pt'>
  <td width=515 valign=top style='width:385.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:14.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES>Jorge
  Andrés González Sierra </span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES>Jairo
  Fernando Solarte Palacios </span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES>Diego
  Alonso Herrera Castro </span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><a name="OLE_LINK2"></a><a name="OLE_LINK1"><span
lang=EN-US> </span></a></p>

<p class=MsoNormal><b><span lang=ES style='color:black'>DOCUMENTACIÓN DE
RESULTADOS</span></b></p>

<p class=Default style='margin-bottom:.25pt'><span >Enlace
a la aplicación Web </span></p>

<p class=Default style='margin-bottom:.25pt'><span >http://172.24.101.71/scrapy/</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><b><span >Métodos
y tecnología </span></b><span >concretos
utilizados en cada uno de los retos propuestos </span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:36.0pt;text-indent:-18.0pt'><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Punto 1:
Descubrimiento de información utilizando crawling:</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:36.0pt'><span >Lenguaje
de programación utilizado: Python. </span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:36.0pt'><span >Framework
de apoyo para la obtención de información de las páginas web Scrapy. </span><a
href="https://scrapy.org/"><span >https://scrapy.org/</span></a><span
> . Este permite utilizar selectores
para seleccionar ciertas partes del codigo html para extraer la información que
se desea. Puede usarse expresiones regulares para filtrar información</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:36.0pt'><span >En la
página web esta es su función: &quot;Scrapy es un framework de aplicación para
rastrear sitios web y extraer datos estructurados que se pueden utilizar para
una amplia gama de aplicaciones útiles, como extracción de datos, procesamiento
de información o archivo histórico.&quot;<a href="#_ftn1" name="_ftnref1"
title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference><span
style='font-size:12.0pt;font-family:"Times New Roman",serif;color:black'>[1]</span></span></span></a></span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:36.0pt'><span >&nbsp;</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:36.0pt;text-indent:-18.0pt'><span lang=ES style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=ES >Punto
2: Utilización de fuentes de sindicación/suscripción, RegEX y XQuery</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:18.0pt;text-indent:17.4pt'><span >Lenguaje
de programación utilizado: Python</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:18.0pt;text-indent:17.4pt'><span >Librería
de apoyo: <i>feedparser </i></span><a
href="https://github.com/kurtmckee/feedparser"><span >https://github.com/kurtmckee/feedparser</span></a></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:18.0pt;text-indent:17.4pt'>&nbsp;</p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:18.0pt;text-indent:17.4pt'><span >Fuentes
de sindicación (RSS) utilizadas:</span></p>

<p class=Default style='margin-bottom:.25pt;text-indent:35.4pt'><a
href="http://www.france24.com/es/eco-tecno/rss"><span >http://www.france24.com/es/eco-tecno/rss</span></a></p>

<p class=Default style='margin-bottom:.25pt;text-indent:35.4pt'><a
href="http://www.france24.com/es/deportes/rss"><span >http://www.france24.com/es/deportes/rss</span></a></p>

<p class=Default style='margin-bottom:.25pt;text-indent:35.4pt'><a
href="http://www.france24.com/es/noticias/rss"><span >http://www.france24.com/es/noticias/rss</span></a></p>

<p class=Default style='margin-bottom:.25pt;text-indent:35.4pt'><a
href="http://cnnespanol.cnn.com/feed/"><span >http://cnnespanol.cnn.com/feed/</span></a></p>

<p class=Default style='margin-bottom:.25pt;text-indent:35.4pt'><a
href="http://feeds.bbci.co.uk/mundo/rss.xml"><span >http://feeds.bbci.co.uk/mundo/rss.xml</span></a></p>

<p class=Default style='margin-bottom:.25pt;text-indent:35.4pt'><span
>&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><b><span >Expresiones
en XQuery y las RegEx </span></b><span >que
utiliza en la solución </span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:18.0pt'><span >Punto
1:Descubrimiento de información utilizando crawling:</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt'><span >Regex:</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt'><span >Seleccionar
Correo:</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt;text-indent:35.4pt'><a href="mailto:.*@uniandes[%5e\n\r"><span
>.*@uniandes[^\n\r]*</span></a><span
>   </span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt'><span >Seleccionar
Extensión:</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt;text-indent:35.4pt'><span >(?i)Ext.:\s*\d{1,4}</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt'><span >Seleccionar
oficina:</span></p>

<p class=Default style='margin-top:0cm;margin-right:0cm;margin-bottom:.25pt;
margin-left:35.4pt;text-indent:35.4pt'><span >(?i)oficina[^\n\r]*</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >El
<b>algoritmo básico </b>para resolver cada uno de los retos, de manera que
puedan percibirse los elementos interesantes para poner en valor en la solución
</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >Punto
1:Descubrimiento de información utilizando crawling:</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >Para
obtener las unidades académicas, se buscó en el sitio uniandes.edu.co URLs
relacionadas con listado de facultades/departamentos para luego ir a cada una
de ellas y realizar la obtención de nombres de departamento, nombre de
facultad, y código si aplica. Al estar allí en el listado se hace una obtención
recorriendo una estructura identificada de tags de html, y extraída mediante
selectores de Scrapy,</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default align=center style='margin-bottom:.25pt;text-align:center'><img
border=0 width=502 height=315 src="img/image006.jpg"></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >La
siguiente grafica muestra parte del código que recorre cada una de estas
estructuras de tags, en este caso de los programas de la universidad,
obteniendo luego el nombre, url, y código SNIES. </span></p>

<p class=Default align=center style='margin-bottom:.25pt;text-align:center'><img
border=0 width=606 height=146 src="img/image007.jpg"></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >De
la misma manera similar sucede para los profesores se recorre una estructura
identificada mediante tags y se obtiene la información.</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default align=center style='margin-bottom:.25pt;text-align:center'><img
border=0 width=432 height=301 id=picture src="img/image008.jpg"></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default style='margin-bottom:.25pt'><span >Punto
2</span></p>

<p class=Default style='margin-bottom:.25pt;text-align:justify'><span
>La obtención del titular, el link y
la fecha de publicación de cada noticia se realiza con una implementación en
python de la librería <i>feedparser</i>. Dicha librería tiene toda la lógica
para descubrir todas las etiquetas RSS y Atom. La implementación consistió en
utilizar la función parser del módulo, con la que se logra realizar la
obtención de la información en forma de lista. La información de cada item
queda almacenada en la tupla entries, por lo que acceder a la información se
hace como de cualquier lista de python se tratase. El primer registro de
entries es el primer feed consultado, por lo que no se pierde esta secuencia en
caso de ser necesaria.</span></p>

<p class=Default style='margin-bottom:.25pt'><span >&nbsp;</span></p>

<p class=Default><b><span >Análisis
de resultados obtenidos</span></b><span >:</span></p>

<p class=Default><span >Dificultades:
</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Demasiada
variedad en las versiones del software, librerías y componentes que se deben utilizar.
</span><span style='font-size:11.0pt;font-family:"Times New Roman",serif'>Los
frameworks y librerías utilizadas para el desarrollo tienen como requerimiento
python 2.7 mínimo, lo cual presento dificultad ya que la versión del sistema
operativo Centos 6.9 maneja Python 2.6. y su actualización genera conflicto con
utilidades del Sistema operativo como YUM. Finalmente se logra utilizar las
librerías y frameworks con cierta dificultad. </span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;font-family:"Times New Roman",serif'>Información
en Javascript no es posible seleccionarla únicamente mediante scrapy. </span></p>

<p class=Default style='text-align:justify'><span >Logros:</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Encontrar e
implementar la librería feedparser que simplifica mucho la adquisición de la
información contenida en las etiquetas xml de los <i>feeds rss</i>.</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Implementación
de framework scrapy destinado para la extraer información de los sitios web, lo
que facilito obtener la información sin necesidad de una implementación desde
cero. </span></p>

<p class=Default style='text-align:justify'><span >Posibilidades
de generalización de la solución:</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Sería necesario
definir una especie de diccionario de etiquetas para acceder con mayor
facilidad a la información de las páginas de la Universidad.</span></p>

<p class=Default style='text-align:justify'><span > Calidad
de los resultados obtenidos desde el punto de vista de la información entregada
al usuario.</span></p>

<p class=Default style='margin-left:36.0pt;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Se puede
mejorar la calidad de los resultados debido a que aparecen muy diversos a pesar
de que deben hacer referencia a la misma información. Por ejemplo, en la
información de contacto de profesores, hay distintos tipos de etiquetas para el
correo electrónico y para el número de teléfono.</span></p>

<p class=Default><span >Problemas
encontrados:</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Se encuentra
mucha diversidad en los componentes de software y librerías que se deben
utilizar, causando conflictos de incompatibilidad en varias ocasiones.</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Para el segundo
punto, la manera en que cada portal utilizaba las etiquetas, a pesar de estar
estandarizadas. Sobre todo, en los formatos de categoría de la noticia y fecha
de publicación.</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;font-family:"Times New Roman",serif'>Se
encuentra dificultad en realizar un barrido para obtener la información de los
profesores, dado que la estructura en cada página web por facultad o por
departamento no es genérica, aunque pareciese idéntica no hay </span><span
>atributos</span><span
style='font-size:11.0pt;font-family:"Times New Roman",serif'> o tags de html
que se puedan reutilizar en la búsqueda, y que pueda aprovechar el framework de
scrapy al máximo. Si tuviese la misma estructura de tags facilitaría en gran
medida la búsqueda y obtención de la información. </span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-size:11.0pt;font-family:Symbol;color:black'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >   En algunos
casos información como correos están mal escritos por lo que una selección o
búsqueda de información muy estricta por REGEX dejaría por fuera esta
información. </span></p>

<p class=Default style='text-align:justify'><span >Mejoras
posibles:</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Para el segundo
punto, la implementación de xquery se hizo complicada, por lo que se sugiere
para una próxima entrega, utilizar componentes disponibles más robustos y
funcionales como XPath o feedparser</span></p>

<p class=Default><span >&nbsp;</span></p>

<p class=Default style='text-align:justify'><span >Retos
por resolver:</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Entregar un
filtrado de xml más robusto, en la medida de que hubo dificultad en la
implementación de xquery.</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Tener una
máquina virtual que no obstaculice la implementación de la solución. La instalación
de los componentes y librerías requeridos, garantizando que no haya conflictos
y que funcione para toda la lógica que debe implementarse, es una tarea que
consumió mucho tiempo y es posible que se repita si los requerimientos para
próximos talleres llegan a ser diferentes.</span></p>

<p class=Default><span >&nbsp;</span></p>

<p class=Default><span >Posibles
extensiones de valor agregado.</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Que el usuario
tenga la posibilidad de generar un filtrado antes de solicitar la información,
lo que podría ayudar disminuir la cantidad de elementos que trae el <i>scrapy, </i>lo
que a su vez disminuiría la carga de información que hay que procesar.</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Permitirle al
usuario escoger qué <i>feeds rss</i> desea consultar</span></p>

<p class=Default style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt'><span
style='font-family:Symbol;color:black'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span >Entregar
información categorizada de los feeds rss. Por ejemplo, entregar información
solamente de deportes, de todos los feeds a los que se les haya solicitado
información. Se puede hacer con etiquetas existentes, leyendo el titular o el
link (Como en el caso del <i>feed </i>de la BBC)</span></p>

<p class=Default style='margin-left:18.0pt'><span >&nbsp;</span></p>

<p class=Default><span >&nbsp;</span></p>

<p class=MsoNormal style='margin-left:18.0pt'>&nbsp;</p>

</div>

<div><br clear=all>

<hr align=left size=1 width="33%">

<div id=ftn1>

<p class=MsoFootnoteText><a href="#_ftnref1" name="_ftn1" title=""><span
class=MsoFootnoteReference><span class=MsoFootnoteReference><span
style='font-size:10.0pt;font-family:"Times New Roman",serif'>[1]</span></span></span></a>
Scrapy <a href="https://docs.scrapy.org/en/latest/intro/overview.html">https://docs.scrapy.org/en/latest/intro/overview.html</a></p>

</div>

</div>

</body>

</html>



</div>

    </div>
  </div>
</div>

  <script src="jquery-3.2.1.slim.min.js"></script>
  <script src="popper.min.js" ></script>
  <script src="bootstrap.min.js" ></script>
  <script src="highlight.min.js"></script>
  <script src="./dist/admin4b.min.js"></script>
  <script src="./assets/js/admin4b.docs.js"></script>
</body>
</html>

