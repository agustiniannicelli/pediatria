<h2 class="title_form">{$title}</h2>
<form id="form" method="post" action="../bridge/Bridge.php" enctype="multipart/form-data">
	<div>
		<label>Fecha</label> 
		<input name="Note_date" id="datepicker" value="{$note->date|date_format:'%Y-%m-%d'}" type="text"/>
	</div>
	<div>
		<label>Categoria</label>
		<select name="Note_idCategory">
			{foreach from=$categories item=category}
				<option value="{$category->id}" {if $note->category->id == $category->id}selected="selected"{/if}>{$category->name}</option>
			{/foreach}
		</select>
	</div>
	<div>
		<label>Titulo:</label> 
		<input name="Note_title" value="{$note->title}" type="text"/>
	</div>
	<div>
		<label>Subtitulo:</label>
		<textarea name="Note_subtitle" rows="5" cols="29">{$note->subtitle}</textarea>
	</div>
	<div>
		<label>Texto:</label>
		<textarea cols="80" rows="20" class="textrich" name="Note_text">{$note->text}</textarea>
	</div>
	<div>
		<label>Topics:</label>
		<input name="Note_topic" value="{$note->topic}" type="text"/>
	</div>
	<div>
		<label>Publicada:</label> 
		<input name="Note_published" type="checkbox" value="1" {if $note->published} checked="checked" {/if} />
	</div>
	<div>
		<label>Imagenes:</label>
		<a id="addImage" href="javascript:addImage()">agregar</a>
		<div id="imagesDiv">
			{foreach from=$note->images item=image}
			<div class="imageDiv">
				<input type="hidden" name="Image_id[]" value="{$image->id}" />
				<img src="{$filePath}{$image->path}" />
				<img onclick="removeImage(this, {$image->id})" src="styles/images/remove.jpg" />
				<div><label>Posicion: </label><input name="Image_position[]" value="{$image->position}" /></div>
				<input type="file" name="Image_file[]" />
				<div><label>Texto: </label><input type="text" class="imgText" name="Image_text[]" value="{$image->text}"/></div>
			</div>
			{/foreach}
		</div>
	</div>
	
	<input type="hidden" id="action" name="action" value="Note-{$operation}">
	<input type="hidden" name="Note_id" value="{$note->id}">
	<input type="hidden" name="redirectTo" value="private/{$back}">
	
	<div class="operations">
		{if isset($note->id)}
			<a href="javascript:seeNote({$note->id})">Ver</a>
		
			<a href="javascript:remove()">Eliminar</a>
		{/if}
		<a href="javascript:sendForm()">Guardar</a>
	</div>
</form>

<div id="templateImage">
	<div class="imageDiv">
		<input type="hidden" name="Image_id[]" value="null" />
		<img onclick="removeImage(this, null)" src="styles/images/remove.jpg" />
		<div><label>Posicion: </label><input type="text" name="Image_position[]" /></div>
		<input type="file" name="Image_file[]" />
		<div><label>Texto: </label><input class="imgText" type="text" name="Image_text[]" /></div>
	</div>
</div>
