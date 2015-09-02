//将vbscript函数转成javascript,方便非ie浏览器下使用 
function str2asc(strstr) {
	return ("0" + strstr.charCodeAt(0).toString(16)).slice(-2);
}

function asc2str(ascasc) {
	return String.fromCharCode(ascasc);
}

/*这里开始时UrlEncode和UrlDecode函数*/
function UrlEncode(str) {
	str = encodeURI(str);
	var ret = "";
	var strSpecial = "!\"#$%&'()*+,/:;<=>?[]^`{|}~%";
	var tt = "";

	for (var i = 0; i < str.length; i++) {
		var chr = str.charAt(i);
		var c = str2asc(chr);
		tt += chr + ":" + c + "n";
		if (parseInt("0x" + c) > 0x7f) {
			ret += "%" + c.slice(0, 2) + "%" + c.slice(-2);
		} else {
			if (chr == " ")
				ret += "+";
			else if (strSpecial.indexOf(chr) != -1)
				ret += "%" + c.toString(16);
			else
				ret += chr;
		}
	}
	return ret;
}

function UrlDecode(str) {
	var ret = "";
	for (var i = 0; i < str.length; i++) {
		var chr = str.charAt(i);
		if (chr == "+") {
			ret += " ";
		} else if (chr == "%") {
			var asc = str.substring(i + 1, i + 3);
			if (parseInt("0x" + asc) > 0x7f) {
				ret += asc2str(parseInt("0x" + asc + str.substring(i + 4, i + 6)));
				i += 5;
			} else {
				ret += asc2str(parseInt("0x" + asc));
				i += 2;
			}
		} else {
			ret += chr;
		}
	}
	ret = decodeURI(ret);
	return ret;
}

//获取url上的参数
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return r[2];
		return null;
	}
})(jQuery);