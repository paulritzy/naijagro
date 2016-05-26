// creating fixed column, top-row and top-left cell
function createCompareTable(originalTable){
	// make fixed size column
	var col = originalTable.clone().removeAttr('id').appendTo('.compare-outer-wrapper').addClass('clone column');
	col.find('td').remove();
	col.find('thead th').not(':first-child').remove();

	// make fixed size header
	var head = originalTable.clone().removeAttr('id').appendTo('.compare-inner-wrapper').addClass('clone header');
	head.find('tbody').remove();
	head.find('.spacer').remove();

	// make fixed size top left corner cell
	var intersection = head.clone().appendTo('.compare-outer-wrapper').addClass('intersection');
	intersection.find('th').not(':first-child').remove();
}

// adjust sticky header location
// stickyHeader should have both header and crossing cell
function checkTop(stickyHeader, originalTable){
	var curTop = $(window).scrollTop();
	var scrollbarTop = originalTable.parents('.compare-inner-wrapper').find('.mCSB_scrollTools.mCSB_scrollTools_horizontal').offset({ top: $('.compare-table').find('.spacer').offset().top+1 });;
	var stickyHeight = stickyHeader.height();
	var origHeight = originalTable.height();
	var tableTop = originalTable.offset().top;
	var switchTop = originalTable.find('tbody').offset().top - stickyHeight;
	if (curTop > switchTop){
		stickyHeader.show();
		if (curTop + stickyHeight + 200 >= tableTop+origHeight){
			stickyHeader.offset({ top: tableTop+origHeight-stickyHeight-200 });
			scrollbarTop.offset({ top: tableTop+origHeight-200-5 })
		} else {
			stickyHeader.offset({ top: curTop });
			scrollbarTop.offset({ top: curTop+stickyHeight - 5 });
		}
		
	} else {
		stickyHeader.hide();
		scrollbarTop.offset({ top: originalTable.find('.spacer').offset().top+1 });
	}
}

function repaintSticky(original, col, head, topleft){
	// set column width and its rows height
	col.width(original.find('thead th:first-child').outerWidth());
	var origRows = original.find('th:first-child');
	col.find('th').each(function(i){
		$(this).height(origRows.eq(i).height());
	});

	// set header and all its columns width
	head.width(original.width());
	var origCols = original.find('thead th');
	head.find('thead th').each(function(i){
		$(this).width(origCols.eq(i).width());
	});

	topleft.width(original.find('thead th:first-child').outerWidth());
	topleft.find('tr').height(head.find('th:first-child').outerHeight());
}

function destroyClones(original, col, head, topleft){
	col.remove();
	head.remove();
	topleft.remove();
	original.closest('.compare-inner-wrapper').mCustomScrollbar("destroy");
}

$( document ).ready(function(){
	if (Modernizr.mq('(max-width: 767px)')){
		return;
	}
	var origTable = $('#compare-table');
	
	console.log(origTable.find('thead > tr:first-child').height());
	setTimeout(function(){
		console.log(origTable.find('thead > tr:first-child').height());
	}, 1);
	// creating fixed panels, repainting them to be sure that everything
	// is OK
	createCompareTable(origTable);
	var stickyCol = $('.compare-outer-wrapper').find('.clone.column');
	var stickyHead = $('.compare-outer-wrapper').find('.clone.header');
	var stickyIntersection = $('.compare-outer-wrapper').find('.intersection');
	setTimeout(function(){
		repaintSticky(origTable, stickyCol, stickyHead, stickyIntersection);
		checkTop($('.compare-table.clone.header'), origTable);
	},1);
	$('.compare-inner-wrapper').mCustomScrollbar({
		axis: 'x',
		contentTouchScroll: 100,
		mouseWheel: { enable: false }
	});
	// move stylized scrollbar to the top part of table
	var firstColWidth = $('#compare-table').find('thead th:first-child').outerWidth();
	$('.compare-inner-wrapper .mCSB_scrollTools.mCSB_scrollTools_horizontal').offset({ top: $('.compare-table').find('.spacer').offset().top+1 }).css('left', firstColWidth+2);



	$(window).scroll(function(){
		checkTop($('.compare-table.clone.header'), origTable);
	});

	$(window).resize(function(){
		repaintSticky(origTable, stickyCol, stickyHead, stickyIntersection);
		checkTop($('.compare-table.clone.header'), origTable);
	});
})