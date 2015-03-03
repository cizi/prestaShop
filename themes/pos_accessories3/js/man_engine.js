/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// JavaScript Document
var items_on_figur = new Array();

function dress_it(item) {
  if (item == "") return;
  // jaka je to vrstva
  var z_index = item.substring(0,item.indexOf("-"));
  var help = item.substring(item.indexOf("-")+1, item.length);
  // part = partie kam to chci dat 
  var part = help.substring(0,help.indexOf("-"));           
  var full_path = "./support/img_huge/" + item;
  var element_id = item.replace(".png", "");
  
  // nemam to uz nahodou oblecene? kdyz jo sundat
  if (already_dressed(element_id)) return;

  // overim zda neoblikam 2 mikiny, kalhoty proste stejnou vrstvu?
  check_same_level(part);        
  
  // pripravim element
  var element = "<img class='items_to_dress' src='" + full_path + "' id='" + element_id +"' style='z-index: " + z_index + "' />";
  $("body").append(element);
  fit_to_page(element_id);  // dam ho na spravne misto
  items_on_figur.push(z_index + "~" + part + "~" + element_id);
}

// sundat vsechno
function undress_all() {
  var array_length = items_on_figur.length;
  for (var i = 0; i < array_length; i++) 
  {
    var info = items_on_figur[i].split("~");
    $("#" + info[2]).remove();
  }  
  items_on_figur = new Array();
}

// tupe umistuju veci do stranka
function fit_to_page(id) {
  $("#" + id).css("position", "absolute");
  if (id.indexOf("jeans") != -1)
  {
    set_to_page(id, "-420px", "22px");          
  }
  if (id.indexOf("triko_dlouhy_rukav") != -1)
  {
    set_to_page(id, "-640px", "2px");
  }
  if (id.indexOf("triko_kratky_rukav") != -1)
  {
    set_to_page(id, "-640px", "4px");
  }
  if (id.indexOf("bunda") != -1)
  {
    set_to_page(id, "-670px", "-10px");
  }
  if (id.indexOf("sala") != -1)
  {
    set_to_page(id, "-670px", "30px");
  }
  if (id.indexOf("svetr") != -1)
  {
    set_to_page(id, "-640px", "-5px");
  }
  if (id.indexOf("mikina") != -1)
  {
    set_to_page(id, "-648px", "0px");
  }
  if (id.indexOf("leginy") != -1)
  {
    set_to_page(id, "-420px", "26px");
  }
}

function set_to_page(id, margin_top, margin_left)
{
   $("#" + id).css("margin-top", margin_top);
   $("#" + id).css("margin-left", margin_left);
}

// vyjmu jeden kus obleceni podle ID
function undress_item(id) {
  var array_length = items_on_figur.length;
  var index = -1;
  for (var i = 0; i < array_length; i++) 
  {
    var info = items_on_figur[i].split("~");
    if ( info[2] == id )
    {
      $("#" + info[2]).remove();
      index = i;
      break;
    }
  }
  // jeste ho vyjmu z pole
  if (index > -1) {
    items_on_figur.splice(index, 1);
  }
}

// zkontroluje zda uz toto neni obleceno, pokud ano svleknu to
function already_dressed(id)
{
  var array_length = items_on_figur.length;
  var ret = 0;
  for (var i = 0; i < array_length; i++) 
  {
    var info = items_on_figur[i].split("~");
    if (info[2] == id)
    {
      undress_item(id);
      ret = 1;
      break;
    }
  }
  return Boolean(ret); 
}

// zchecknu zda nemam oblecenou uz stejnou vrstvu - pokud ano tak ji vyjmu 
function check_same_level(level)
{
  var array_length = items_on_figur.length;
  for (var i = 0; i < array_length; i++) 
  {
    var info = items_on_figur[i].split("~");
    if (info[1] == level)
    {
       undress_item(info[2]);
    }
  }
} 



