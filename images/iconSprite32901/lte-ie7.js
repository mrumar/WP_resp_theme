/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'iconSprite\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-feed' : '&#x21;',
			'icon-search' : '&#x22;',
			'icon-bubbles' : '&#x23;',
			'icon-unlocked' : '&#x24;',
			'icon-lock' : '&#x25;',
			'icon-radio-unchecked' : '&#x26;',
			'icon-radio-checked' : '&#x27;',
			'icon-arrow-right' : '&#x28;',
			'icon-arrow-right-2' : '&#x29;',
			'icon-bubble' : '&#x2a;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};