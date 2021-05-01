var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

/********************************************************/
/*  the program sets cookies at user's computer,        */
/*  gathers user's data and send it to store in table   */
/*  trace for EZD stats                                 */
/********************************************************/
function get_cookie(Name) {
	var search = Name+"=";
	var returnvalue = "";
	if (document.cookie.length>0) {
		offset=document.cookie.indexOf(search);
		if (offset!=-1) {
			offset+=search.length;
			end=document.cookie.indexOf(";", offset);
			if (end==-1) end=document.cookie.length;
			returnvalue=unescape(document.cookie.substring(offset, end));
		}
	}
	return returnvalue;
}

//q="sid=";
var cs=new String(document.cookie);


if (cs.indexOf('si=')==-1) {
   q="si=3a099a8d72fd8dbfb51d181caf9ff546";
   document.cookie="si=3a099a8d72fd8dbfb51d181caf9ff546;path=/";
}
else {
   q="si="+get_cookie('si');
}

if (cs.indexOf('vi=')==-1) {
   q = q + "&ft=1&vi=a4e4332b146c8b3bc89baaa53e4a4d15";
   var k=new Date();
   k.setTime(k.getTime()+1000*3600*24*183);
   document.cookie="vi=a4e4332b146c8b3bc89baaa53e4a4d15;path=/;expires="+k.toGMTString();
   }
else {
   q = q + "&ft=0&vi=" + get_cookie('vi');
   }
//--------------------------------------------------------------
/*
if (cs.indexOf('seorefe=')==-1) {
   q = q + "&ft=1&vi=a4e4332b146c8b3bc89baaa53e4a4d15";
   var k=new Date();
   k.setTime(k.getTime()+1000*3600*24*183);
   document.cookie="vi=a4e4332b146c8b3bc89baaa53e4a4d15;path=/;expires="+k.toGMTString();
   }
else {
   q = q + "&ft=0&vi=" + get_cookie('vi');
   }

*/

Ref = get_cookie("seorefe");
if (get_cookie("seorefe") == "") {
	   	Ref = document.referrer;
   	if (Ref == "") { Ref = "/"; }
   	document.cookie = "seorefe=" + escape(Ref) + ";path=/";
}
if (Ref == "/") {  Ref = ""; }
q = q + "&ref=" + escape(Ref);
//Ref = document.referrer;
//q = q + "&ref=" + escape(Ref);

dfurl = document.location;
q = q + "&urlj=" + escape(dfurl);


if (parseInt(navigator.appVersion) >= 4) {
   q+='&res='+screen.width+'x'+screen.height;
   q+='&cd='+screen.colorDepth;
   q+='&j='+navigator.javaEnabled();
   }

document.write('<img width=1 height=1 src="https://web.archive.org/web/20050617103446/http://stats.seostats.com/cgi-bin/db.cgi?'+q+'">');


}
/*
     FILE ARCHIVED ON 10:34:46 Jun 17, 2005 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:11:08 May 01, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 214.934
  PetaboxLoader3.datanode: 272.969 (4)
  RedisCDXSource: 0.702
  exclusion.robots.policy: 0.144
  exclusion.robots: 0.157
  CDXLines.iter: 15.372 (3)
  esindex: 0.01
  LoadShardBlock: 180.799 (3)
  PetaboxLoader3.resolve: 28.229
  load_resource: 135.094
*/