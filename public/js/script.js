/*
Index made by Hid3ky, please don't touch at my copyright !
This index was made on 02.27.2015
If you have any question, please contact me on facebook : Hid3ky Sp
Thank's for reading
*/

$(document).ready(function() {

   $(".page_support").hide();
   $(".page_version").hide();
   $(".page_visit").hide();

   $("li#version").click(function() {
      $(".nav").slideUp("fast");
      $(".page").hide("fast");
      $(".page_version").show("slow");
  	  return false;
   });
  $("a#button_version_back").click(function() {
    $(".page_version").hide("fast");
    $(".nav").slideDown("slow");
    $(".page").fadeTo("slow", 1);
    return false;
  });
  $("li#support").click(function() {
    $(".nav").slideUp("fast");
    $(".page").hide("fast");
    $(".page_support").show("slow");
  	  return false;
    // Faites bien attention à la syntaxe et à l'imbrication des
   // parenthèses et accolades
  });
  $("a#input_button_back_support").click(function() {
    $(".page_support").hide("fast");
    $(".nav").slideDown("slow");
    $(".page").fadeTo("slow", 1);
    return false;
  });
  $("li#visit").click(function() {
    $(".nav").slideUp("fast");
    $(".page").hide("fast");
    $(".page_visit").show("slow");
  	  return false;
    // Faites bien attention à la syntaxe et à l'imbrication des
   // parenthèses et accolades
  });
  $("a#exit_visit").click(function() {
    $(".page_visit").hide("fast");
    $(".nav").slideDown("slow");
    $(".page").fadeTo("slow", 1);
    return false;
  });
});