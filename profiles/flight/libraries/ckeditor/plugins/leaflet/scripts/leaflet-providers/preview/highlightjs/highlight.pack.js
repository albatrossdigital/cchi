﻿var hljs=new function(){function j(a){return a.replace(/&/gm,"&amp;").replace(/</gm,"&lt;").replace(/>/gm,"&gt;")}function w(a){for(a=a.firstChild;a;a=a.nextSibling){if("CODE"==a.nodeName)return a;if(!(3==a.nodeType&&a.nodeValue.match(/\s+/)))break}}function o(a,c){return Array.prototype.map.call(a.childNodes,function(a){return 3==a.nodeType?c?a.nodeValue.replace(/\n/g,""):a.nodeValue:"BR"==a.nodeName?"\n":o(a,c)}).join("")}function x(a){for(var a=(a.className+" "+a.parentNode.className).split(/\s+/),
a=a.map(function(a){return a.replace(/^language-/,"")}),c=0;c<a.length;c++)if(n[a[c]]||"no-highlight"==a[c])return a[c]}function p(a){var c=[];(function b(a,d){for(var g=a.firstChild;g;g=g.nextSibling)3==g.nodeType?d+=g.nodeValue.length:"BR"==g.nodeName?d+=1:1==g.nodeType&&(c.push({event:"start",offset:d,node:g}),d=b(g,d),c.push({event:"stop",offset:d,node:g}));return d})(a,0);return c}function y(a,c,i){function b(b){return"<"+b.nodeName+Array.prototype.map.call(b.attributes,function(b){return" "+
b.nodeName+'="'+j(b.value)+'"'}).join("")+">"}for(var f=0,d="",g=[];a.length||c.length;){var e=(a.length&&c.length?a[0].offset!=c[0].offset?a[0].offset<c[0].offset?a:c:"start"==c[0].event?a:c:a.length?a:c).splice(0,1)[0],d=d+j(i.substr(f,e.offset-f)),f=e.offset;if("start"==e.event)d+=b(e.node),g.push(e.node);else if("stop"==e.event){var h,l=g.length;do l--,h=g[l],d+="</"+h.nodeName.toLowerCase()+">";while(h!=e.node);for(g.splice(l,1);l<g.length;)d+=b(g[l]),l++}}return d+j(i.substr(f))}function z(a){function c(b,
c){return RegExp(b,"m"+(a.cI?"i":"")+(c?"g":""))}function i(b,a){if(!b.compiled){b.compiled=!0;var d=[];if(b.k){var g={},e=function(b,a){a.split(" ").forEach(function(a){a=a.split("|");g[a[0]]=[b,a[1]?Number(a[1]):1];d.push(a[0])})};b.lR=c(b.l||hljs.IR,!0);if("string"==typeof b.k)e("keyword",b.k);else for(var h in b.k)b.k.hasOwnProperty(h)&&e(h,b.k[h]);b.k=g}if(a&&(b.bWK&&(b.b="\\b("+d.join("|")+")\\s"),b.bR=c(b.b?b.b:"\\B|\\b"),!b.e&&!b.eW&&(b.e="\\B|\\b"),b.e&&(b.eR=c(b.e)),b.tE=b.e||"",b.eW&&a.tE))b.tE+=
(b.e?"|":"")+a.tE;b.i&&(b.iR=c(b.i));void 0===b.r&&(b.r=1);b.c||(b.c=[]);for(e=0;e<b.c.length;e++)"self"==b.c[e]&&(b.c[e]=b),i(b.c[e],b);b.starts&&i(b.starts,a);h=[];for(e=0;e<b.c.length;e++)h.push(b.c[e].b);b.tE&&h.push(b.tE);b.i&&h.push(b.i);b.t=h.length?c(h.join("|"),!0):{exec:function(){return null}}}}i(a)}function s(a,c){function i(a,b){if(a.e&&a.eR.test(b))return a;if(a.eW)return i(a.parent,b)}function b(){var a;if(void 0!==e.sL)e.sL&&!n[e.sL]?a=j(h):(a=e.sL?s(e.sL,h):t(h),0<e.r&&(m+=a.keyword_count,
l+=a.r),a='<span class="'+a.language+'">'+a.value+"</span>");else if(a=j(h),e.k){var b="",c=0;e.lR.lastIndex=0;for(var d=e.lR.exec(a);d;){var b=b+a.substr(c,d.index-c),c=e,f=d,f=g.cI?f[0].toLowerCase():f[0];(c=c.k.hasOwnProperty(f)&&c.k[f])?(m+=c[1],b+='<span class="'+c[0]+'">'+d[0]+"</span>"):b+=d[0];c=e.lR.lastIndex;d=e.lR.exec(a)}a=b+a.substr(c)}return a}function f(a,b){var c=a.cN?'<span class="'+a.cN+'">':"";a.rB?(k+=c,h=""):a.eB?(k+=j(b)+c,h=""):(k+=c,h=b);e=Object.create(a,{parent:{value:e}});
l+=a.r}function d(a,c){h+=a;if(void 0===c)return k+=b(),0;var d;a:{d=e;for(var g=0;g<d.c.length;g++){var l=d.c[g].bR.exec(c);if(l&&0==l.index){d=d.c[g];break a}}d=void 0}if(d)return k+=b(),f(d,c),d.rB?0:c.length;if(d=i(e,c)){!d.rE&&!d.eE&&(h+=c);k+=b();do e.cN&&(k+="</span>"),e=e.parent;while(e!=d.parent);d.eE&&(k+=j(c));h="";d.starts&&f(d.starts,"");return d.rE?0:c.length}if(e.i&&e.iR.test(c))throw"Illegal";h+=c;return c.length||1}var g=n[a];z(g);var e=g,h="",l=0,m=0,k="";try{for(var q,o,r=0;;){e.t.lastIndex=
r;q=e.t.exec(c);if(!q)break;o=d(c.substr(r,q.index-r),q[0]);r=q.index+o}d(c.substr(r));return{r:l,keyword_count:m,value:k,language:a}}catch(p){if("Illegal"==p)return{r:0,keyword_count:0,value:j(c)};throw p;}}function t(a){var c={keyword_count:0,r:0,value:j(a)},i=c,b;for(b in n)if(n.hasOwnProperty(b)){var f=s(b,a);f.language=b;f.keyword_count+f.r>i.keyword_count+i.r&&(i=f);f.keyword_count+f.r>c.keyword_count+c.r&&(i=c,c=f)}i.language&&(c.second_best=i);return c}function u(a,c,i){c&&(a=a.replace(/^((<[^>]+>|\t)+)/gm,
function(a,f){return f.replace(/\t/g,c)}));i&&(a=a.replace(/\n/g,"<br>"));return a}function v(a,c,i){var b=o(a,i),f=x(a);if("no-highlight"!=f){var d=f?s(f,b):t(b),f=d.language,g=p(a);if(g.length){var e=document.createElement("pre");e.innerHTML=d.value;d.value=y(g,p(e),b)}d.value=u(d.value,c,i);c=a.className;c.match("(\\s|^)(language-)?"+f+"(\\s|$)")||(c=c?c+" "+f:f);a.innerHTML=d.value;a.className=c;a.result={language:f,kw:d.keyword_count,re:d.r};d.second_best&&(a.second_best={language:d.second_best.language,
kw:d.second_best.keyword_count,re:d.second_best.r})}}function m(){m.called||(m.called=!0,Array.prototype.map.call(document.getElementsByTagName("pre"),w).filter(Boolean).forEach(function(a){v(a,hljs.tabReplace)}))}var n={};this.LANGUAGES=n;this.highlight=s;this.highlightAuto=t;this.fixMarkup=u;this.highlightBlock=v;this.initHighlighting=m;this.initHighlightingOnLoad=function(){window.addEventListener("DOMContentLoaded",m,!1);window.addEventListener("load",m,!1)};this.IR="[a-zA-Z][a-zA-Z0-9_]*";this.UIR=
"[a-zA-Z_][a-zA-Z0-9_]*";this.NR="\\b\\d+(\\.\\d+)?";this.CNR="(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)";this.BNR="\\b(0b[01]+)";this.RSR="!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|\\.|-|-=|/|/=|:|;|<|<<|<<=|<=|=|==|===|>|>=|>>|>>=|>>>|>>>=|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~";this.BE={b:"\\\\[\\s\\S]",r:0};this.ASM={cN:"string",b:"'",e:"'",i:"\\n",c:[this.BE],r:0};this.QSM={cN:"string",b:'"',e:'"',i:"\\n",c:[this.BE],r:0};this.CLCM={cN:"comment",b:"//",e:"$"};this.CBLCLM=
{cN:"comment",b:"/\\*",e:"\\*/"};this.HCM={cN:"comment",b:"#",e:"$"};this.NM={cN:"number",b:this.NR,r:0};this.CNM={cN:"number",b:this.CNR,r:0};this.BNM={cN:"number",b:this.BNR,r:0};this.inherit=function(a,c){var i={},b;for(b in a)i[b]=a[b];if(c)for(b in c)i[b]=c[b];return i}};
hljs.LANGUAGES.javascript=function(j){return{k:{keyword:"in if for while finally var new function do return void else break catch instanceof with throw case default try this switch continue typeof delete let yield const",literal:"true false null undefined NaN Infinity"},c:[j.ASM,j.QSM,j.CLCM,j.CBLCLM,j.CNM,{b:"("+j.RSR+"|\\b(case|return|throw)\\b)\\s*",k:"return throw case",c:[j.CLCM,j.CBLCLM,{cN:"regexp",b:"/",e:"/[gim]*",i:"\\n",c:[{b:"\\\\/"}]},{b:"<",e:">;",sL:"xml"}],r:0},{cN:"function",bWK:!0,
e:"{",k:"function",c:[{cN:"title",b:"[A-Za-z$_][0-9A-Za-z$_]*"},{cN:"params",b:"\\(",e:"\\)",c:[j.CLCM,j.CBLCLM],i:"[\"'\\(]"}],i:"\\[|%"}]}}(hljs);