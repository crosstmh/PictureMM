$(document).ready(function()
{
	$('div.tag-option').click(function(){selectPictureTag(this);});
	$('div.picture-tile').mouseenter(function(){ hoverTile(this); });
	$('div.picture-tile').mouseleave(function(){ leaveTile(this); });
	$('div.picture-slider-left').click(function(){ preFrag(); });
	$('div.picture-slider-right').click(function(){ nextFrag(); });
	$('a.plaza-pager-btn').mouseover(function(){ hoverPlaza(this); });
});

function selectPictureTag(target)
{
	target = $(target);
	if(target.hasClass('tag-focus'))
		return;
		
	$('div.tag-focus').removeClass('tag-focus');
	target.addClass('tag-focus');
	var pos = target.offset().left - target.parent().offset().left;
	$('div.focus-line').animate({left:pos},180);
}

function hoverTile(target)
{
	target = $(target).find('div.tile-desc');
	target.animate({'margin-top':'-=39'},180);
}

function leaveTile(target)
{
	target = $(target).find('div.tile-desc');
	target.animate({'margin-top':'+=39'},180);
}

function preFrag()
{
	$('div.slider-fragment').animate({left:'+=980'},180);
}

function nextFrag()
{
	$('div.slider-fragment').animate({left:'-=980'},180);
}

function hoverPlaza(target)
{
	var flag = $(target).attr('tag');
	target = $('div.top-plaza').find('#plaza-fragment'+flag);
	var lof = -parseInt(target.css('left'),10);
	
	$('div.plaza-fragment').animate({left:'+='+lof},180);
}
