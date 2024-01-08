<?php
$file = './post_1.json';
$jsonData = file_get_contents("./{$file}", FILE_USE_INCLUDE_PATH);

$un_post = json_decode($jsonData);

//imprimir suelto la fecha y el titulo

$fecha = date("d/m/Y",$un_post->date);
$titulo_es = $un_post->title->es;
print("La fecha es " . $fecha);
print("<br>");
print("Titulo en castellano ". $titulo_es);

imprimirPost($un_post);

function imprimirPost($noticia)
{
    if(is_object($noticia)){
  echo("<h2>{$noticia->title->es}</h2>");  
  echo("{$noticia->description->es}");  
  echo("<hr>");  
  echo("<h2>{$noticia->title->en}</h2>");  
  echo("{$noticia->description->en}");  
  echo("<img src='{$noticia->image}' alt='imagen de playa' width:'20px' height:'20px'>");
  }else if(is_array($noticia)){
  //lo trato como un array
  echo("<h2>{$noticia['title']['es']}</h2>");
  echo("<h2>{$noticia['description']['es']}</h2");
  echo("<br>");
  echo("<h2>{$noticia['title']['en']}</h2");
  echo("<h2>{$noticia['description']['en']}</h2");
    }
}
?>