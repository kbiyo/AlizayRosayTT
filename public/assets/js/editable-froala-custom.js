$(function(){
	$('textarea').editable({
		inlineMode: false,
		imageUploadURL: var_url+'/editorUpload',
		//blockTags: ["n", "p", "pre"],
	});
});