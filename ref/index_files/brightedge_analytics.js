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

var _bright=new Object({_initialize:function(id)
{_bright.id=id;return _bright;},_trackBright:function()
{var url="http://web.archive.org/web/20090605171651/http://analytics.brightedge.com/brightedge.php";url=url+"?id="+escape(_bright.id);location_href=escape(location.href);if(window.location&&window.location.href)location_href=escape(window.location.href);ref=escape(document.referrer);if(window.document&&window.document.referrer)ref=escape(window.document.referrer);url=url+"&url="+location_href;url=url+"&ref="+ref;url=url+"&title="+escape(document.title);metaDescription=getmetaContents('description');url=url+"&metadesc="+escape(metaDescription);metaKeywords=getmetaContents('keywords');url=url+"&metakeywords="+escape(metaKeywords);var img=new Image(1,1);img.src=url;img.onload=function() {};}});function getmetaContents(mn){var m=document.getElementsByTagName('meta');for(var i in m){if(m[i].name==null)continue;if((m[i].name).toLowerCase()==mn.toLowerCase()){var returnStr=m[i].content;if(returnStr.length>255)returnStr=returnStr.substring(0, 255);return returnStr;}}}

}
/*
     FILE ARCHIVED ON 17:16:51 Jun 05, 2009 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:10:36 Jan 30, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 657.034
  exclusion.robots: 209.185
  exclusion.robots.policy: 209.177
  xauthn.identify: 87.96
  xauthn.chkprivs: 120.971
  cdx.remote: 0.075
  esindex: 0.011
  LoadShardBlock: 385.362 (3)
  PetaboxLoader3.datanode: 164.148 (4)
  CDXLines.iter: 32.902 (3)
  load_resource: 523.972
  PetaboxLoader3.resolve: 454.76
*/