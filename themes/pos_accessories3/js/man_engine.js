/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// JavaScript Document
var items_on_figur = new Array();
var mannequin_position = "front";


function dress_it(layer,item,item_back) {
    if ((item === "") || (layer === "")) return;
    // jaka je to vrstva
    z_index = 99999 + parseInt(layer);

    element_id = create_element_id(item);

    // nemam to uz nahodou oblecene? kdyz jo sundat
    if (already_dressed(element_id)) return;

    // overim zda neoblikam 2 mikiny, kalhoty proste stejnou vrstvu?
    check_same_level(layer);

    // pripravim elementy
    var element_front = "<img class='mannequin_clothes' src='" + item + "' id='" + element_id +"' style='z-index: " + z_index + "; display: none;' ondblclick=\"undress_item('" + element_id + "');\" />";
    var element_back = "<img class='mannequin_clothes' src='" + item_back + "' id='" + element_id +"_back' style='z-index: " + z_index + "; display: none;' ondblclick=\"undress_item('" + element_id + "');\" />";

    $("#newDressing").append(element_front);
    $("#newDressing").append(element_back);
    items_on_figur.push(element_id);

    show_items_by_figur_position();
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
    var index = -1;
    for (var i = 0; i < array_length; i++)
    {
        if ( items_on_figur[i] === id )
        {
            $("#" + items_on_figur[i]).remove();
            $("#" + items_on_figur[i] + "_back").remove();
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
    for (var i = 0; i < items_on_figur.length; i++)
    {
        info = items_on_figur[i].split("-");
        if (info[0] == level)
        {
            undress_item(items_on_figur[i]);
        }
    }
}

function rotate_mannequin()
{
    move_to = (mannequin_position === "front") ? "back" : "front";

    $("#mannequin_playground").removeClass("mannequin_playground_" + mannequin_position);
    $("#mannequin_playground").addClass("mannequin_playground_" + move_to);

    mannequin_position = move_to;
    show_items_by_figur_position();
}

function show_items_by_figur_position()
{
    var array_length = items_on_figur.length;
    for (var i = 0; i < array_length; i++)
    {
        if (mannequin_position === "front")
        {
            $("#" + items_on_figur[i] + "_back").css("display", "none");
            $("#" + items_on_figur[i]).css("display", "block");
        }
        else
        {
            $("#" + items_on_figur[i]).css("display", "none");
            $("#" + items_on_figur[i] + "_back").css("display", "block");
        }
    }
}

function create_element_id(item)
{
    temp = item.substring(item.lastIndexOf("/")+1, item.length);
    temp = temp.replace(".png", "");
    element_id = temp.replace(".jpg", "");

    return element_id;
}