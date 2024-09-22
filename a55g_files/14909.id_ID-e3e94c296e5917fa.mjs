"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[14909,4394],{220585:(e,t,i)=>{i.d(t,{Z:()=>a});var r=i(401429),s=i(836815),n=i(256683),l=i(325362),o=i(785893);let a=({placementId:e})=>(0,o.jsx)(r.Z,{placementId:e,predicate:e=>e.display_data?.component_type===1,children:({complete:e,dismiss:t,experience:{display_data:i}})=>{let r=(0,n.Z)(l.Z)(i);return(0,o.jsx)(s.Z,{displayData:r,onComplete:()=>e(),onDismiss:t})}})},368885:(e,t,i)=>{i.r(t),i.d(t,{default:()=>_});var r=i(667294),s=i(401429),n=i(883119),l=i(930837),o=i(140017),a=i(862249),d=i(785893);function u(e,t,i){var r;return(t="symbol"==typeof(r=function(e,t){if("object"!=typeof e||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var r=i.call(e,t||"default");if("object"!=typeof r)return r;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(t,"string"))?r:String(r))in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}class c extends r.Component{constructor(...e){super(...e),u(this,"state",{surveyLoaded:!1}),u(this,"loadSurvey",()=>{this.setState({surveyLoaded:!0}),this.props.view?.()}),u(this,"handleDismiss",()=>{this.props.dismiss(),this.setState({surveyLoaded:!1})}),u(this,"handleComplete",()=>{this.props.complete(),this.setState({surveyLoaded:!1})})}componentDidMount(){let{displayData:{delay:e}}=this.props;this.surveyTimer=window.setTimeout(this.loadSurvey,e)}componentWillUnmount(){clearTimeout(this.surveyTimer)}render(){if(!this.state.surveyLoaded)return null;let{displayData:{buttons:e,detailed_text:t,title_text:i}}=this.props;return(0,d.jsx)(l.ZP,{accessibilityModalLabel:this.props.i18n.bt("Bersedia mengikuti survei?", "Would you mind taking a survey?", "User eval survey", undefined, true),footer:(0,d.jsx)(n.kC,{alignItems:"stretch",justifyContent:"end",children:e.map(e=>{if(!e.uri)return(0,d.jsx)(n.xu,{marginStart:1,children:(0,d.jsx)(n.zx,{fullWidth:!0,onClick:this.handleDismiss,text:e.text})},e.text);{let t=e.uri,i=(0,a.Z)({url:t});return(0,d.jsx)(n.xu,{marginStart:1,children:(0,d.jsx)(n.ZP,{color:"red",fullWidth:!0,href:t,onClick:this.handleComplete,rel:i?"nofollow":"none",target:"blank",text:e.text})},e.text)}})}),heading:i,onDismiss:this.handleDismiss,size:"sm",children:(0,d.jsx)(n.xu,{padding:3,children:(0,d.jsx)(n.xv,{children:t})})})}}function h(e){let t=(0,o.ZP)();return(0,d.jsx)(c,{...e,i18n:t})}var x=i(616550),p=i(340523);function m(e,t,i){var r;return(t="symbol"==typeof(r=function(e,t){if("object"!=typeof e||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var r=i.call(e,t||"default");if("object"!=typeof r)return r;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(t,"string"))?r:String(r))in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}class y extends r.Component{constructor(...e){super(...e),m(this,"isOnClose",this.props.onCloseEnabled&&2===this.props.actionTrigger),m(this,"state",{surveyAccepted:!1,surveyLoaded:!1,surveyLoadFailed:!1,showSurveyOnClose:this.isOnClose}),m(this,"loadSurvey",(e=!0)=>{let{onView:t}=this.props;e&&t(),this.setState({surveyLoaded:!0})}),m(this,"processIFrameMessage",e=>{let{presentationDelay:t=5e3,onComplete:i,surveyLink:r,onCloseEnabled:s}=this.props,n=e.origin||e.originalEvent.origin;r.startsWith(n)&&("surveyFinished"===e.data?i():"surveyLoaded"===e.data&&(window.clearTimeout(this.loadSurveyFailureTimeout),this.isOnClose&&this.showSurveyOnLeavingPage(),s?this.actionTriggerHandler():this.loadSurveyTimeout=window.setTimeout(this.loadSurvey,t)))}),m(this,"handleShowSurvey",()=>{this.setState({surveyAccepted:!0})})}componentDidMount(){window.addEventListener("message",this.processIFrameMessage),this.loadSurveyFailureTimeout=window.setTimeout(()=>{this.state.surveyLoaded||(window.clearTimeout(this.loadSurveyTimeout),this.setState({surveyLoadFailed:!0}))},15e3)}componentWillUnmount(){window.removeEventListener("message",this.processIFrameMessage),window.clearTimeout(this.loadSurveyTimeout),window.clearTimeout(this.loadSurveyFailureTimeout),this.isOnClose&&this.props.unblock()}actionTriggerHandler(){let{actionTrigger:e,presentationDelay:t=5e3}=this.props;switch(e){case 1:this.loadSurvey();break;case 2:this.loadSurvey(!1);break;default:this.loadSurveyTimeout=window.setTimeout(this.loadSurvey,t)}}showSurveyOnLeavingPage(){let{onView:e,block:t}=this.props;t(()=>{e(),this.setState({showSurveyOnClose:!1})})}render(){let{surveyAccepted:e,surveyLoadFailed:t,surveyLoaded:i,showSurveyOnClose:r}=this.state;if(t)return null;let{acceptButtonText:s,bodyText:l,declineButtonText:o,onDismiss:a,subtitleText:u,surveyLink:c,titleText:h}=this.props,x=(0,d.jsx)("iframe",{"data-test-id":"anket-iframe",src:c,style:e?{border:0,minHeight:810,paddingBottom:4,width:"100%"}:{display:"none"},title:this.props.i18n.bt("Survei Pinterest", "Pinterest Survey", "Accessible label for survey frame", undefined, true)});return i&&!r?(0,d.jsx)(n.xu,{position:"absolute",zIndex:new n.Ry(1e3),children:(0,d.jsxs)(n.u_,{accessibilityModalLabel:this.props.i18n.bt("Bisa meluangkan waktu sebentar untuk mengikuti survei?", "Have a few minutes to take a survey?", "User evaluation survey", undefined, true),footer:!e&&(0,d.jsxs)(n.xu,{display:"flex",justifyContent:"end",paddingX:1,children:[(0,d.jsx)(n.xu,{dangerouslySetInlineStyle:{__style:{padding:"6px 8px"}},children:(0,d.jsx)(n.zx,{fullWidth:!0,onClick:()=>{this.setState({surveyAccepted:!1}),a()},text:o})}),(0,d.jsx)(n.xu,{dangerouslySetInlineStyle:{__style:{padding:"6px 8px"}},children:(0,d.jsx)(n.zx,{color:"red",fullWidth:!0,onClick:this.handleShowSurvey,text:s})})]}),heading:e?"":h,onDismiss:a,padding:"none",role:"alertdialog",size:e?"lg":"md",children:[(0,d.jsx)(n.xu,{children:x}),!e&&(0,d.jsxs)(n.xu,{padding:3,children:[(0,d.jsx)(n.xv,{children:u}),(0,d.jsx)(n.xv,{children:l})]})]})}):x}}let g=function(e){let t=(0,o.ZP)(),{checkExperiment:i}=(0,p.F)(),s=(0,x.k6)(),[n,l]=(0,r.useState)(null),a=(0,r.useRef)(null);return(0,d.jsx)(y,{...e,block:e=>{a.current=s.block((t,i)=>(l({location:t,action:i}),e(),!1))},i18n:t,onCloseEnabled:i("discovery_measurements_on_close_survey").anyEnabled,unblock:()=>{if(a&&a.current?.(),n){let{location:e,action:t}=n;"PUSH"===t?s.push(`${e.pathname}${e.search}`):"POP"===t&&s.goBack()}}})},v=e=>{let{complete:t,dismiss:i,view:r,displayData:s}=e,{anket:n,buttons:l,delay:o,detailed_text:a,subtitle_text:u,title_text:c,action_trigger:x=3}=s,[p,m]=l;return n?(0,d.jsx)(g,{acceptButtonText:m.text,actionTrigger:x,bodyText:a,declineButtonText:p.text,onComplete:t,onDismiss:i,onView:r,presentationDelay:o,subtitleText:u,surveyLink:m.uri,titleText:c}):(0,d.jsx)(h,{complete:t,dismiss:i,displayData:s,view:r})},f=e=>{let{experienceId:t,displayData:i}=e,{delay:s=0}=i,n={...i,delay:0},l={...e,displayData:{...n}},o=(0,r.useRef)(),[a,u]=(0,r.useState)(!1);return(0,r.useEffect)(()=>{let e=["/pin-builder","/idea-pin-builder"],t=e=>window.location.pathname.includes(e),i=()=>e.some(t),r=()=>{i()?o.current=setTimeout(()=>r(),3e3):u(!0)};return o.current=setTimeout(()=>r(),s),()=>{clearTimeout(o.current)}},[t,s]),a?(0,d.jsx)(v,{...l}):null};function _(e){let{placementId:t,experience:i,targeting:r,eligibleIds:n}=e;return(0,d.jsx)(s.Z,{disableAutoView:!0,eligibleIds:n||[],eligibleTypes:[5],experience:i,placementId:t,targeting:r,children:({complete:e,dismiss:i,view:r,experience:s})=>{let n=s.display_data,l=s.experience_id;return 1000421===t?(0,d.jsx)(f,{complete:e,dismiss:i,displayData:n,experienceId:l,view:r}):(0,d.jsx)(v,{complete:e,dismiss:i,displayData:n,view:r})}})}},810961:(e,t,i)=>{i.d(t,{Z:()=>u});var r=i(667294),s=i(73006),n=i(219651),l=i(368885),o=i(321329),a=i(839391),d=i(785893);let u=({placementId:e})=>{let{experienceForPlacement:t}=(0,o.Z)(e),{unmountPlacement:i,registerAfterActionPlacement:u}=(0,a.Z)();return(0,r.useEffect)(()=>(u(e),()=>{i(e)}),[e,i,u]),(0,d.jsxs)(r.Fragment,{children:[(0,d.jsx)(n.Z,{experience:t}),(0,d.jsx)(l.default,{experience:t}),(0,d.jsx)(s.Z,{experience:t})]})}},82531:(e,t,i)=>{i.d(t,{Z:()=>a});var r=i(667294),s=i(810961),n=i(190971),l=i(28449),o=i(785893);let a=({placementId:e})=>{let t=(0,n.c)(),i=(0,l.Z)();return(0,r.useEffect)(()=>{let e=e=>{let{clickthroughProperties:i,offsiteTimedPair:r}=e;(i?.aux_data?.time_to_offsite??5e8)<5e8&&t("Clickthrough",{is_promoted:i?.aux_data?.is_promoted,pin_id:i?.object_id_str,clickthrough_duration_ns:r?.duration})};return e&&i?.onOffsiteEnd(e),()=>{e&&i?.removeOnOffsiteEnd(e)}},[t,i]),(0,o.jsx)(s.Z,{placementId:e})}},836815:(e,t,i)=>{i.d(t,{Z:()=>h});var r=i(883119),s=i(213377),n=i(140017),l=i(406893),o=i(887582),a=i(862249),d=i(785893);let u=(s.yF+s.lX)*s.yc-s.lX,c=Array.from(Array(s.g5-s.yc).keys()).reduce((e,t)=>{let i=t+s.yc,r=(s.yF+s.lX)*i-s.lX;return e+(0,s.KN)(s.yF,i,i,`.banner-content {
          width: ${r}px;
          min-width: ${r}px;
        }`,s.lX)},`.banner-content {
      width: ${u}px;
      min-width: ${u}px;
  }`);function h(e){let t=(0,n.ZP)(),{displayData:{backgroundColorNarrow:i,backgroundColorWide:s,backgroundImageNarrow:u,backgroundImageWide:h,canClose:x,completeButtonText:p,coverImage:m,dismissButtonText:y,iconImage:g,layoutNarrow:v,layoutWide:f,links:_=[],linkTitles:b=[],message:j,onCompleteRedirectUrl:w,onDismissRedirectUrl:S,textColorNarrow:C,textColorWide:T,titleText:k,external:P},onComplete:Z,onDismiss:L}=e,{windowWidth:z}=(0,o.Z)(),D=z<=480,A=D?v:f,E=!D&&3!==A,I=D?i:s,O=D?C:T,{altText:F,uri:W}=(D?u:h)||{},{altText:H,uri:$}=m||{},{altText:B,uri:U}=g||{},M=D&&2===A||!D&&2===A,N=D?"96px":"48px",X=D&&3===A,R=p&&!w&&(0,d.jsx)(r.zx,{color:"white",onClick:({event:e})=>{Z?.(e)},text:p}),K=(0,a.Z)({url:w}),V=p&&w&&(0,d.jsx)(r.ZP,{color:"white",href:w,onClick:({event:e})=>{Z?.(e)},rel:K?"nofollow":"none",size:"lg",target:P?"blank":void 0,text:p},"naglink"),G=(0,a.Z)({url:S}),q=y&&S&&(0,d.jsx)(r.ZP,{color:"white",href:S,onClick:({event:e})=>{L?.(e)},rel:G?"nofollow":"none",size:"lg",target:P?"blank":void 0,text:y},"naglink"),J=y&&!S&&(0,d.jsx)(r.zx,{color:"white",onClick:({event:e})=>{L?.(e)},size:"lg",text:y}),Q=x&&(0,d.jsx)(r.hU,{accessibilityLabel:t.bt("Tutup", "Close", "accessibility close label", undefined, true),bgColor:"lightGray",icon:"cancel",iconColor:"gray",onClick:({event:e})=>{L?.(e)},size:"md"}),Y=_.reduce((e,t,i)=>{let r=t.startsWith("https://")||t.startsWith("http://")?'rel="noreferrer noopener" target="_blank"':"",s=`<a href="${t}" ${r}>${b[i]}</a>`;return e.replace(`{${i}}`,s)},j),ee={backgroundColor:I,backgroundImage:!W||M||X?void 0:`url(${W})`,backgroundPosition:"center",backgroundRepeat:"no-repeat",backgroundSize:"cover"};return(0,d.jsxs)(r.xu,{direction:E?"row":"column",display:"flex",marginBottom:5,marginEnd:2,marginStart:2,marginTop:2,children:[(0,d.jsx)(l.Z,{unsafeCSS:c}),(0,d.jsx)("div",{className:"banner-content",style:{borderRadius:"16px",boxShadow:"0px 0px 8px rgba(0, 0, 0, 0.1)",margin:"0 auto"},children:(0,d.jsxs)(r.zd,{rounding:4,width:"100%",children:[X&&$&&(0,d.jsx)(r.kC,{alignItems:"start",height:128,justifyContent:"center",width:"100%",children:(0,d.jsx)(r.Ee,{alt:H||"cover image",fit:"cover",naturalHeight:1,naturalWidth:3,src:$})}),(0,d.jsxs)(r.xu,{alignItems:"center","aria-label":F,dangerouslySetInlineStyle:{__style:ee},direction:E?"row":"column",display:"flex",justifyContent:"between",marginTop:X?-2:0,padding:6,children:[(0,d.jsxs)(r.kC,{alignItems:"center",direction:E?"row":"column",justifyContent:"between",maxWidth:E?void 0:"560px",children:[M&&U&&(0,d.jsx)(r.xu,{alignItems:"center",direction:"column",display:"flex",justifyContent:"center",marginBottom:E?0:6,marginEnd:E?4:0,children:(0,d.jsx)(r.xu,{height:N,width:N,children:(0,d.jsx)(r.zd,{rounding:E?4:6,children:(0,d.jsx)(r.Ee,{alt:B||"icon",naturalHeight:1,naturalWidth:1,src:U})})})}),!E&&k&&(0,d.jsx)(r.xv,{align:"center",weight:"bold",children:(0,d.jsx)("div",{className:"banner-title",style:{color:O,fontSize:"28px",marginBottom:"8px"},children:k})}),Y&&(0,d.jsxs)(r.xv,{align:E?"start":"center",overflow:"normal",children:[(0,d.jsx)("style",{dangerouslySetInnerHTML:{__html:`
                        .banner-text a {
                          color: ${O||""};
                          font-weight: bold;
                        }`}}),(0,d.jsx)("div",{className:"banner-text",dangerouslySetInnerHTML:{__html:Y},style:{color:O}})]})]}),(0,d.jsx)(r.xu,{marginBottom:E?0:-1,marginStart:E?4:0,marginTop:E?0:4,children:(0,d.jsxs)(r.kC,{alignItems:"center",gap:{row:2,column:0},justifyContent:"center",wrap:!E,children:[J||q,R||V,Q]})})]})]})})]})}},887582:(e,t,i)=>{i.d(t,{Z:()=>r});function r(){let e=800,t=400;return"undefined"!=typeof window&&(e=window.innerHeight,t=window.innerWidth),{windowHeight:e,windowWidth:t}}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/14909.id_ID-e3e94c296e5917fa.mjs.map