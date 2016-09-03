<script type="text/javascript">
var form = "{$form}";
var idNote = {$idNote};
{literal}
$(document).ready(
	function() 
	{
		$("#select option:first-child").attr("selected", "selected");
		if(idNote != null)
		{
			$("#select option").filter(
				function() {
			    	return $(this).val() == idNote; 
				}
			).attr('selected', true);
		}
		selectChange();
	}
);

function selectChange()
{
	var obj = $("#select option:selected")[0];
	$("#container").html("");
	$.post(form, { id: obj.value },
		function(data) 
		{
			$("#container").html(data);
			$("#datepicker").datepicker({dateFormat: "yy-mm-dd"});

			$('.textrich').tinymce({
				
				width: '900',
	    		height: '600',			

                	// Location of TinyMCE script
                	script_url : 'js/tiny_mce/tiny_mce.js',
                
		        // General options
		        theme : "advanced",
		        plugins : "autolink",

		        // Theme options
		        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,link,unlink,bullist,numlist,",
		        theme_advanced_buttons2 : "forecolor,backcolor,formatselect,fontselect,fontsizeselect",
		        theme_advanced_buttons3 : "removeformat",
		        theme_advanced_buttons4 : "",
		        theme_advanced_toolbar_location : "bottom",
		        theme_advanced_toolbar_align : "center"
			});
		}
	);
}


var textOld = "";
var list = new Array();
var index = 0;

jQuery.expr[':'].contains = function(a, i, m) { 
	  return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0; 
	};
	
function buscar()
{
	var text = $("#text").val();
    if(textOld != text)
    {
        index = 0;
        list = new Array();
        textOld = text;
       
        $("#select option:contains('" + text + "')").each(function(key, value){
             list[key] =  value.index;
         });
    }
   
    $("#select option").eq(list[index]).attr("selected","selected");
    index++;
    if(list.length <= index)
    {
        index = 0;
    }
}


function remove()
{
	var title = ($("#select option:selected")[0]).text;
	if(confirm("Desea eliminar la nota: '" + title + "'")) 
	{
		$("#action").val("Note-delete");
		sendForm();
	}
}

function addImage()
{
	$("#imagesDiv").append($("#templateImage").html());
}

function removeImage(obj, id)
{
	if(confirm("Desea remover la imagen ?")) 
	{
		$("#form").append("<input type='hidden' name='Note_image_deleted[]' value='" + id + "'>")
		$(obj).parent().remove();
	}
}

function seeNote(id)
{
	 window.open("../note.php?id=" + id);
}

function sendForm()
{
	$('#form').submit();
}
{/literal}
</script>
<div class="main_title"><h1>Nota</h1></div>
<div class="left_menu">
	{if $error != ""}
	<h3 class="error">{$error}</h3>
	{/if}
	<span>Buscar: </span><input type="text" id="text" onkeyup="buscar()">
	<br><br>
	<select id="select" onchange="selectChange()" size="20">
		<option value="0">Nueva Nota</option>
		{foreach from=$notes item=note}
		  	<option value="{$note->id}">{$note->title}</option>
		{/foreach}
	</select>
</div>
<div class="main" id="container">
	
</div>