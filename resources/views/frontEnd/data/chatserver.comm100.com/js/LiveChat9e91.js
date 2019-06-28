function comm100_links() {
	var links = document.getElementsByTagName('a');
	for (var i = links.length - 1; i >= 0; i--) {
		var a = links[i];
		if (a.href.indexOf('comm100.com') != -1) {
			if (a.onclick==null || a.onclick.toString().indexOf('comm100_Chat') == -1) {				
				a.onclick = function (e) {
					return false;
				}
			}
		}
	}
}

function comm100_Chat() {
	alert('Chat Unavailable!');
	return false;
}

setTimeout(comm100_links, 100);