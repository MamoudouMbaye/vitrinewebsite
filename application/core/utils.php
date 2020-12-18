<?php

 function page($pagename, $params=""){
   $parameters = empty($params)? "" : "&{$params}";
   echo URL . "page={$pagename}{$parameters}";
 }


function add_message($type, $message){

    if(!isset($_SESSION['messages'])){
      $_SESSION['messages'] = [];
    }

    if(!isset($_SESSION['messages'][$type])){
      $_SESSION['messages'][$type] = [];
    }

    $_SESSION['messages'][$type][] = $message;
}

function show_message() {
    $html = "";
    if (isset($_SESSION['messages'])){
        foreach ($_SESSION['messages'] as $type => $listMessage) {
          $html .="<div class='alert alert-{$type}' role='alert'>";
          $html .= implode('<br>', $listMessage);
          $html .= "</div>";
        }
        $html .= "</div>";
        unset($_SESSION['messages']);
    }
    echo $html;
}

function message_exists(){
  return !empty($_SESSION['messages']);
}
