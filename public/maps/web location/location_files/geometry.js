google.maps.__gjsload__('geometry', function(_){var Vw=function(a,b){return Math.abs(_.gb(b-a,-180,180))},Ww=function(a,b,c,d,e){if(!d){c=Vw(a.lng(),c)/Vw(a.lng(),b.lng());if(!e)return e=Math.sin(_.hc(a.lat())),e=Math.log((1+e)/(1-e))/2,b=Math.sin(_.hc(b.lat())),_.lc(2*Math.atan(Math.exp(e+c*(Math.log((1+b)/(1-b))/2-e)))-Math.PI/2);a=e.fromLatLngToPoint(a);b=e.fromLatLngToPoint(b);return e.fromPointToLatLng(new _.J(a.x+c*(b.x-a.x),a.y+c*(b.y-a.y))).lat()}e=_.hc(a.lat());a=_.hc(a.lng());d=_.hc(b.lat());b=_.hc(b.lng());c=_.hc(c);return _.gb(_.lc(Math.atan2(Math.sin(e)*
Math.cos(d)*Math.sin(c-b)-Math.sin(d)*Math.cos(e)*Math.sin(c-a),Math.cos(e)*Math.cos(d)*Math.sin(a-b))),-90,90)},Yw=_.na(),Zw={containsLocation:function(a,b){for(var c=_.gb(a.lng(),-180,180),d=!!b.get("geodesic"),e=b.get("latLngs"),f=b.get("map"),f=!d&&f?f.getProjection():null,g=!1,h=0,l=e.getLength();h<l;++h)for(var n=e.getAt(h),q=0,r=n.getLength();q<r;++q){var u=n.getAt(q),B=n.getAt((q+1)%r),x=_.gb(u.lng(),-180,180),A=_.gb(B.lng(),-180,180),D=Math.max(x,A),x=Math.min(x,A);(180<D-x?c>=D||c<x:c<D&&
c>=x)&&Ww(u,B,c,d,f)<a.lat()&&(g=!g)}return g||Zw.isLocationOnEdge(a,b)},isLocationOnEdge:function(a,b,c){c=c||1E-9;var d=_.gb(a.lng(),-180,180),e=b instanceof _.Oe,f=!!b.get("geodesic"),g=b.get("latLngs");b=b.get("map");b=!f&&b?b.getProjection():null;for(var h=0,l=g.getLength();h<l;++h)for(var n=g.getAt(h),q=n.getLength(),r=e?q:q-1,u=0;u<r;++u){var B=n.getAt(u),x=n.getAt((u+1)%q),A=_.gb(B.lng(),-180,180),D=_.gb(x.lng(),-180,180),C=Math.max(A,D),H=Math.min(A,D);if(A=1E-9>=Math.abs(_.gb(A-D,-180,180))&&
(Math.abs(_.gb(A-d,-180,180))<=c||Math.abs(_.gb(D-d,-180,180))<=c))var A=a.lat(),D=Math.min(B.lat(),x.lat())-c,K=Math.max(B.lat(),x.lat())+c,A=A>=D&&A<=K;if(A)return!0;if(180<C-H?d+c>=C||d-c<=H:d+c>=H&&d-c<=C)if(B=Ww(B,x,d,f,b),Math.abs(B-a.lat())<c)return!0}return!1}};var bx={computeHeading:function(a,b){var c=_.Fc(a),d=_.Gc(a);a=_.Fc(b);b=_.Gc(b)-d;return _.gb(_.lc(Math.atan2(Math.sin(b)*Math.cos(a),Math.cos(c)*Math.sin(a)-Math.sin(c)*Math.cos(a)*Math.cos(b))),-180,180)},computeOffset:function(a,b,c,d){b/=d||6378137;c=_.hc(c);var e=_.Fc(a);a=_.Gc(a);d=Math.cos(b);b=Math.sin(b);var f=Math.sin(e),e=Math.cos(e),g=d*f+b*e*Math.cos(c);return new _.F(_.lc(Math.asin(g)),_.lc(a+Math.atan2(b*e*Math.sin(c),d-f*g)))},computeOffsetOrigin:function(a,b,c,d){c=_.hc(c);b/=d||
6378137;d=Math.cos(b);var e=Math.sin(b)*Math.cos(c);b=Math.sin(b)*Math.sin(c);c=Math.sin(_.Fc(a));var f=e*e*d*d+d*d*d*d-d*d*c*c;if(0>f)return null;var g=e*c+Math.sqrt(f),g=g/(d*d+e*e),h=(c-e*g)/d,g=Math.atan2(h,g);if(g<-Math.PI/2||g>Math.PI/2)g=e*c-Math.sqrt(f),g=Math.atan2(h,g/(d*d+e*e));if(g<-Math.PI/2||g>Math.PI/2)return null;a=_.Gc(a)-Math.atan2(b,d*Math.cos(g)-e*Math.sin(g));return new _.F(_.lc(g),_.lc(a))},interpolate:function(a,b,c){var d=_.Fc(a),e=_.Gc(a),f=_.Fc(b),g=_.Gc(b),h=Math.cos(d),
l=Math.cos(f);b=bx.Le(a,b);var n=Math.sin(b);if(1E-6>n)return new _.F(a.lat(),a.lng());a=Math.sin((1-c)*b)/n;c=Math.sin(c*b)/n;b=a*h*Math.cos(e)+c*l*Math.cos(g);e=a*h*Math.sin(e)+c*l*Math.sin(g);return new _.F(_.lc(Math.atan2(a*Math.sin(d)+c*Math.sin(f),Math.sqrt(b*b+e*e))),_.lc(Math.atan2(e,b)))},Le:function(a,b){var c=_.Fc(a);a=_.Gc(a);var d=_.Fc(b);b=_.Gc(b);return 2*Math.asin(Math.sqrt(Math.pow(Math.sin((c-d)/2),2)+Math.cos(c)*Math.cos(d)*Math.pow(Math.sin((a-b)/2),2)))},computeDistanceBetween:function(a,
b,c){c=c||6378137;return bx.Le(a,b)*c},computeLength:function(a,b){b=b||6378137;var c=0;a instanceof _.vd&&(a=a.getArray());for(var d=0,e=a.length-1;d<e;++d)c+=bx.computeDistanceBetween(a[d],a[d+1],b);return c},computeArea:function(a,b){return Math.abs(bx.computeSignedArea(a,b))},computeSignedArea:function(a,b){b=b||6378137;a instanceof _.vd&&(a=a.getArray());for(var c=a[0],d=0,e=1,f=a.length-1;e<f;++e)d+=bx.mk(c,a[e],a[e+1]);return d*b*b},mk:function(a,b,c){return bx.nk(a,b,c)*bx.rl(a,b,c)},nk:function(a,
b,c){var d=[a,b,c,a];a=[];for(c=b=0;3>c;++c)a[c]=bx.Le(d[c],d[c+1]),b+=a[c];b/=2;d=Math.tan(b/2);for(c=0;3>c;++c)d*=Math.tan((b-a[c])/2);return 4*Math.atan(Math.sqrt(Math.abs(d)))},rl:function(a,b,c){a=[a,b,c];b=[];for(c=0;3>c;++c){var d=a[c],e=_.Fc(d),d=_.Gc(d),f=b[c]=[];f[0]=Math.cos(e)*Math.cos(d);f[1]=Math.cos(e)*Math.sin(d);f[2]=Math.sin(e)}return 0<b[0][0]*b[1][1]*b[2][2]+b[1][0]*b[2][1]*b[0][2]+b[2][0]*b[0][1]*b[1][2]-b[0][0]*b[2][1]*b[1][2]-b[1][0]*b[0][1]*b[2][2]-b[2][0]*b[1][1]*b[0][2]?
1:-1}};var dx={decodePath:function(a){for(var b=_.w(a),c=Array(Math.floor(a.length/2)),d=0,e=0,f=0,g=0;d<b;++g){var h=1,l=0;do{var n=a.charCodeAt(d++)-63-1;h+=n<<l;l+=5}while(31<=n);e+=h&1?~(h>>1):h>>1;h=1;l=0;do n=a.charCodeAt(d++)-63-1,h+=n<<l,l+=5;while(31<=n);f+=h&1?~(h>>1):h>>1;c[g]=new _.F(1E-5*e,1E-5*f,!0)}c.length=g;return c},encodePath:function(a){a instanceof _.vd&&(a=a.getArray());return dx.Im(a,function(a){return[Math.round(1E5*a.lat()),Math.round(1E5*a.lng())]})},Im:function(a,b){for(var c=
[],d=[0,0],e,f=0,g=_.w(a);f<g;++f)e=b?b(a[f]):a[f],dx.vh(e[0]-d[0],c),dx.vh(e[1]-d[1],c),d=e;return c.join("")},vh:function(a,b){return dx.Jm(0>a?~(a<<1):a<<1,b)},Jm:function(a,b){for(;32<=a;)b.push(String.fromCharCode((32|a&31)+63)),a>>=5;b.push(String.fromCharCode(a+63));return b}};_.Ub.google.maps.geometry={encoding:dx,spherical:bx,poly:Zw};_.k=Yw.prototype;_.k.decodePath=dx.decodePath;_.k.encodePath=dx.encodePath;_.k.computeDistanceBetween=bx.computeDistanceBetween;_.k.interpolate=bx.interpolate;_.k.computeHeading=bx.computeHeading;_.k.computeOffset=bx.computeOffset;_.k.computeOffsetOrigin=bx.computeOffsetOrigin;_.Wc("geometry",new Yw);});