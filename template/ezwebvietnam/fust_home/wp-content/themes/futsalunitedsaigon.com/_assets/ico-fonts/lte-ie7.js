/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-logo' : '&#x21;',
			'icon-home' : '&#x22;',
			'icon-home-2' : '&#x23;',
			'icon-home-3' : '&#x24;',
			'icon-office' : '&#x25;',
			'icon-newspaper' : '&#x26;',
			'icon-pencil' : '&#x27;',
			'icon-play' : '&#x28;',
			'icon-camera' : '&#x29;',
			'icon-music' : '&#x2a;',
			'icon-cart' : '&#x2b;',
			'icon-cart-2' : '&#x2c;',
			'icon-cart-3' : '&#x2d;',
			'icon-coin' : '&#x2e;',
			'icon-clock' : '&#x2f;',
			'icon-history' : '&#x30;',
			'icon-clock-2' : '&#x31;',
			'icon-map' : '&#x32;',
			'icon-map-2' : '&#x33;',
			'icon-address-book' : '&#x34;',
			'icon-user' : '&#x35;',
			'icon-users' : '&#x36;',
			'icon-bubbles' : '&#x37;',
			'icon-bubbles-2' : '&#x38;',
			'icon-user-2' : '&#x39;',
			'icon-mail' : '&#x3a;',
			'icon-mail-2' : '&#x3b;',
			'icon-mail-3' : '&#x3c;',
			'icon-mail-4' : '&#x3d;',
			'icon-google' : '&#x3e;',
			'icon-google-plus' : '&#x3f;',
			'icon-google-plus-2' : '&#x40;',
			'icon-google-plus-3' : '&#x41;',
			'icon-google-plus-4' : '&#x42;',
			'icon-google-drive' : '&#x43;',
			'icon-facebook' : '&#x44;',
			'icon-facebook-2' : '&#x45;',
			'icon-facebook-3' : '&#x46;',
			'icon-twitter' : '&#x47;',
			'icon-twitter-2' : '&#x48;',
			'icon-twitter-3' : '&#x49;',
			'icon-feed' : '&#x4a;',
			'icon-feed-2' : '&#x4b;',
			'icon-feed-3' : '&#x4c;',
			'icon-youtube' : '&#x4d;',
			'icon-youtube-2' : '&#x4e;',
			'icon-vimeo' : '&#x4f;',
			'icon-vimeo2' : '&#x50;',
			'icon-vimeo-2' : '&#x51;',
			'icon-windows' : '&#x52;',
			'icon-windows8' : '&#x53;',
			'icon-android' : '&#x54;',
			'icon-apple' : '&#x55;',
			'icon-tux' : '&#x56;',
			'icon-yahoo' : '&#x57;',
			'icon-tumblr' : '&#x58;',
			'icon-tumblr-2' : '&#x59;',
			'icon-blogger' : '&#x5a;',
			'icon-blogger-2' : '&#x5b;',
			'icon-skype' : '&#x5c;',
			'icon-mail-5' : '&#x5d;',
			'icon-skype-2' : '&#x5e;',
			'icon-skype-3' : '&#x5f;',
			'icon-location' : '&#x60;',
			'icon-user-3' : '&#x61;',
			'icon-users-2' : '&#x62;',
			'icon-user-add' : '&#x63;',
			'icon-bucket' : '&#x64;',
			'icon-book' : '&#x65;',
			'icon-briefcase' : '&#x66;',
			'icon-clipboard' : '&#x67;',
			'icon-box' : '&#x68;',
			'icon-folder' : '&#x69;',
			'icon-list' : '&#x6a;',
			'icon-grid' : '&#x6b;',
			'icon-download' : '&#x6c;',
			'icon-disk' : '&#x6d;',
			'icon-install' : '&#x6e;',
			'icon-upload' : '&#x6f;',
			'icon-stopwatch' : '&#x70;',
			'icon-calendar' : '&#x71;',
			'icon-cogs' : '&#x72;',
			'icon-cog' : '&#x73;',
			'icon-phone' : '&#x74;',
			'icon-phone-hang-up' : '&#x75;',
			'icon-envelop' : '&#x76;',
			'icon-mobile' : '&#x77;',
			'icon-mobile-2' : '&#x78;',
			'icon-tablet' : '&#x79;',
			'icon-tv' : '&#x7a;',
			'icon-drawer' : '&#x7b;',
			'icon-drawer-2' : '&#x7c;',
			'icon-box-add' : '&#x7d;',
			'icon-box-remove' : '&#x7e;',
			'icon-download-2' : '&#xe000;',
			'icon-upload-2' : '&#xe001;',
			'icon-earth' : '&#xe002;',
			'icon-database' : '&#xe003;',
			'icon-graph' : '&#xe004;',
			'icon-bars' : '&#xe005;',
			'icon-compass' : '&#xe006;',
			'icon-tools' : '&#xe007;',
			'icon-leaf' : '&#xe008;',
			'icon-sharable' : '&#xe009;',
			'icon-cd' : '&#xe00a;',
			'icon-droplet' : '&#xe00b;',
			'icon-network' : '&#xe00c;',
			'icon-pictures' : '&#xe00d;',
			'icon-books' : '&#xe00e;',
			'icon-connection' : '&#xe00f;',
			'icon-podcast' : '&#xe010;',
			'icon-dice' : '&#xe011;',
			'icon-folder-2' : '&#xe012;',
			'icon-paste' : '&#xe013;',
			'icon-paste-2' : '&#xe014;',
			'icon-paste-3' : '&#xe015;',
			'icon-leaf-2' : '&#xe016;',
			'icon-rocket' : '&#xe017;',
			'icon-briefcase-2' : '&#xe018;',
			'icon-sitemap' : '&#xf08e;',
			'icon-cross' : '&#xe019;',
			'icon-checkmark' : '&#xe01a;',
			'icon-cross-2' : '&#xe01b;',
			'icon-docs' : '&#xe01c;',
			'icon-landscape' : '&#xe01d;',
			'icon-book-2' : '&#xe01e;',
			'icon-bookmark' : '&#xe01f;',
			'icon-bookmarks' : '&#xe020;',
			'icon-support' : '&#xe021;',
			'icon-book-3' : '&#xe022;',
			'icon-popout' : '&#xe023;',
			'icon-download-3' : '&#xe024;',
			'icon-upload-3' : '&#xe025;',
			'icon-umbrella' : '&#xf0e9;',
			'icon-paste-4' : '&#xf0ea;',
			'icon-fighter-jet' : '&#xf0fb;',
			'icon-envelope-alt' : '&#xf0e0;',
			'icon-cancel-circle' : '&#xe026;',
			'icon-checkmark-circle' : '&#xe027;',
			'icon-close' : '&#xe028;',
			'icon-checkmark-2' : '&#xe029;',
			'icon-popout-2' : '&#xe02a;',
			'icon-grid-2' : '&#xe02b;',
			'icon-close-2' : '&#xe02c;',
			'icon-cancel' : '&#xe02d;',
			'icon-directions' : '&#xe02e;',
			'icon-airplane' : '&#xe02f;',
			'icon-trophy' : '&#xe030;',
			'icon-tag' : '&#xe031;',
			'icon-bag' : '&#xe032;',
			'icon-camera-2' : '&#xe033;',
			'icon-megaphone' : '&#xe034;',
			'icon-palette' : '&#xe035;',
			'icon-graduation' : '&#xe036;',
			'icon-air' : '&#xe037;',
			'icon-screen' : '&#xe038;',
			'icon-statistics' : '&#xe039;',
			'icon-cross-3' : '&#xe03a;',
			'icon-paperplane' : '&#xe03b;',
			'icon-feather' : '&#xe03c;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
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