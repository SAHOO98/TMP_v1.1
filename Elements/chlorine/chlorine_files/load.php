mw.loader.implement("jquery.accessKeyLabel",function($,jQuery){(function($,mw){var cachedAccessKeyPrefix,useTestPrefix=false,labelable='button, input, textarea, keygen, meter, output, progress, select';function getAccessKeyPrefix(ua){if(!ua&&cachedAccessKeyPrefix){return cachedAccessKeyPrefix;}var profile=$.client.profile(ua),accessKeyPrefix='alt-';if(profile.name==='opera'){accessKeyPrefix='shift-esc-';}else if(profile.name==='chrome'){accessKeyPrefix=(profile.platform==='mac'?'ctrl-option-':'alt-shift-');}else if(profile.platform!=='win'&&profile.name==='safari'&&profile.layoutVersion>526){accessKeyPrefix='ctrl-alt-';}else if(!(profile.platform==='win'&&profile.name==='safari')&&(profile.name==='safari'||profile.platform==='mac'||profile.name==='konqueror')){accessKeyPrefix='ctrl-';}else if((profile.name==='firefox'||profile.name==='iceweasel')&&profile.versionBase>'1'){accessKeyPrefix='alt-shift-';}if(!ua){cachedAccessKeyPrefix=accessKeyPrefix;}return accessKeyPrefix;}function
getAccessKeyLabel(element){if(!element.accessKey){return'';}if(!useTestPrefix&&element.accessKeyLabel){return element.accessKeyLabel;}return(useTestPrefix?'test-':getAccessKeyPrefix())+element.accessKey;}function updateTooltipOnElement(element,titleElement){var array=(mw.msg('word-separator')+mw.msg('brackets')).split('$1'),regexp=new RegExp($.map(array,$.escapeRE).join('.*?')+'$'),oldTitle=titleElement.title,rawTitle=oldTitle.replace(regexp,''),newTitle=rawTitle,accessKeyLabel=getAccessKeyLabel(element);if(!oldTitle){return;}if(accessKeyLabel){newTitle+=mw.msg('word-separator')+mw.msg('brackets',accessKeyLabel);}if(oldTitle!==newTitle){titleElement.title=newTitle;}}function updateTooltip(element){var id,$element,$label,$labelParent;updateTooltipOnElement(element,element);$element=$(element);if($element.is(labelable)){id=element.id.replace(/"/g,'\\"');if(id){$label=$('label[for="'+id+'"]');if($label.length===1){updateTooltipOnElement(element,$label[0]);}}$labelParent=$element.parents(
'label');if($labelParent.length===1){updateTooltipOnElement(element,$labelParent[0]);}}}$.fn.updateTooltipAccessKeys=function(){return this.each(function(){updateTooltip(this);});};$.fn.updateTooltipAccessKeys.getAccessKeyPrefix=getAccessKeyPrefix;$.fn.updateTooltipAccessKeys.setTestMode=function(mode){useTestPrefix=mode;};}(jQuery,mediaWiki));},{},{"brackets":"[$1]","word-separator":" "});
/* cache key: enwiki:resourceloader:filter:minify-js:7:b006f47b77c742ec4395de092b4a3f05 */