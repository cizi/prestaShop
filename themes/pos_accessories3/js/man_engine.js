/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// JavaScript Document
var items_on_figur = new Array();

function dress_it(layer,item) {
  if ((item === "") || (layer === "")) return;
  // jaka je to vrstva
  z_index = 900 + parseInt(layer);

  temp = item.substring(item.lastIndexOf("/")+1, item.length);
  element_id = temp.replace(".png", "");
  
  // nemam to uz nahodou oblecene? kdyz jo sundat
  if (already_dressed(element_id)) return;

  // overim zda neoblikam 2 mikiny, kalhoty proste stejnou vrstvu?
  //check_same_level(part);        
  
  // pripravim element
  var element = "<img class='mannequin_clothes' src='" + item + "' id='" + element_id +"' style='z-index: " + z_index + "' ondblclick=\"undress_item('" + element_id + "');\" />";
  $("#dressing_cabin").append(element);
  items_on_figur.push(element_id);
}

// sundat vsechno
function undress_all() {
  array_length = items_on_figur.length;
  for (var i = 0; i < array_length; i++) 
  {
    $("#" + items_on_figur[i]).remove();
  }  
  items_on_figur = new Array();
}

// vyjmu jeden kus obleceni podle ID
function undress_item(id) {
  array_length = items_on_figur.length;
  index = -1;
  for (var i = 0; i < array_length; i++) 
  {
    if ( items_on_figur[i] === id )
    {
      $("#" + items_on_figur[i]).remove();
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
  array_length = items_on_figur.length;
  ret = 0;
  for (var i = 0; i < array_length; i++) 
  {
    if (items_on_figur[i] === id)
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



