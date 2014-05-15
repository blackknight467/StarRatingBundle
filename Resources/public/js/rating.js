$(function(){
	var labelWasClicked = function labelWasClicked(){
        var input = $(this).prev();
        input.prop('checked',true);
    }
    
	var turnToStar = function turnToStar(){
        var labels = $(this).find('div');
        labels.removeClass();
        labels.addClass('star');
        $('.star').click(labelWasClicked);
    }

    var turnStarBack = function turnStarBack(){
        var rating = $(this).find('input:checked');
        if (rating != null) {
            var prevLabels = $(rating).nextAll().filter('div');
            prevLabels.removeClass();
            prevLabels.addClass('star-full');
        }
    }

    $('.rating-well').each(turnStarBack);
    $('.rating-well').hover(turnToStar,turnStarBack);

});