function createDiv(){
	var parentdiv=$('<div></div>');
    parentdiv.addClass('preview');
    var childdiv=$('<div></div>');
    var img=$('<img src="" />');
    img.appendTo(childdiv);
    var childspan=$('<span></span>');
    childspan.addClass('delete')
    childdiv.appendTo(parentdiv);
    childspan.appendTo(parentdiv);
    parentdiv.appendTo('.goods-img');
}
$('#inputfile1').bind('change',function(){
		$('.bk').css('display','none');
		$('.prompt').css('display','block');
		$('.file').css('display','inline-block');
		var file=document.getElementById("inputfile1").files[0];
		if (window.FileReader) {
			var fr=new FileReader();
			fr.onloadend=function(e){
				var src=e.target.result;
				createDiv();
				$("div.goods-img div.preview:last-child img").attr("src",src);
			};
			fr.readAsDataURL(file);
		}
	});
$('#inputfile2').bind('change',function(){
		var file=document.getElementById("inputfile2").files[0];
		if (window.FileReader) {
			var fr=new FileReader();
			fr.onloadend=function(e){
				var src=e.target.result;
				createDiv();
				$("div.goods-img div.preview:last-child img").attr("src",src);
				var len=$('.goods-img').children('div.preview').length;
				if (len>3) {
					$('.file').css('display','none');
				}
				else{
					$('.file').css('display','inline-block');
				}
			};
			fr.readAsDataURL(file);
		}
	});
$('.goods-img').on("click","span",function(){
	$(this).parent().remove();
	var len=$('.goods-img').children('div.preview').length;
	if(len<4&&len>0){
		$('.file').css('display','inline-block');
	}
	else{
		$('.bk').css('display','block');
		$('.prompt').css('display','none');
	}
});
$("#select").bind("change",function(){
	var options=$("#select option:selected");
	var v=options.val();
	document.getElementById("classify").value=v;
})
//用jquery的ajax,H5的formData对象上传照片
$("form").submit(function(e){
      e.preventDefault();
      var formData = new FormData($( "#uploadForm" )[0]);
      $.ajax({
	    url: 'php/fabushangping.php',
	    type: 'POST',
	    cache: false,
	    data: formData,
	    processData: false,
	    contentType: false
		}).done(function(res) {
		 if (res=='1') {
		 	alert("发布成功!");
		 	window.location.href="http://localhost/xihua%20Second%20hand%20Street/";

		 }
		 else{
		 	alert("发布失败!");
		 }
}).fail(function(res) {
	
    });
  
    });