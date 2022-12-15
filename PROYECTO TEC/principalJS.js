$(document).ready(function() {
	$("#sidebarCollapse").on("click", function() {
	  $("#sidebar").toggleClass("active");
	  $(this).toggleClass("active");
	});
  });


// filtrado
$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.card-grid-space').css('transform', 'scale(0)');
		function hideProduct(){
			$('.card-grid-space').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			$('.card-grid-space[category="'+catProduct+'"]').show();
			$('.card-grid-space[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.card-grid-space').show();
			$('.card-grid-space').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});