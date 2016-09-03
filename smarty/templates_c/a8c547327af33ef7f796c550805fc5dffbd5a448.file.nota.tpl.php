<?php /* Smarty version Smarty-3.1.11, created on 2016-05-29 21:18:40
         compiled from "..\smarty\templates\private\nota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1860552e3da1e18bb82-46889821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c547327af33ef7f796c550805fc5dffbd5a448' => 
    array (
      0 => '..\\smarty\\templates\\private\\nota.tpl',
      1 => 1464567518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860552e3da1e18bb82-46889821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3da1e21c426_63582425',
  'variables' => 
  array (
    'form' => 0,
    'idNote' => 0,
    'error' => 0,
    'notes' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3da1e21c426_63582425')) {function content_52e3da1e21c426_63582425($_smarty_tpl) {?><script type="text/javascript">
var form = "<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
";
var idNote = <?php echo $_smarty_tpl->tpl_vars['idNote']->value;?>
;

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

</script>
<div class="main_title"><h1>Nota</h1></div>
<div class="left_menu">
	<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
	<h3 class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
	<?php }?>
	<span>Buscar: </span><input type="text" id="text" onkeyup="buscar()">
	<br><br>
	<select id="select" onchange="selectChange()" size="20">
		<option value="0">Nueva Nota</option>
		<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
		  	<option value="<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
</option>
		<?php } ?>
	</select>
</div>
<div class="main" id="container">
	
</div><?php }} ?>