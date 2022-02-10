export var browserName = (function (agent) {
  switch (true) {
    case agent.indexOf("edge") > -1:
      return "MS Edge";
    case agent.indexOf("edg/") > -1:
      return "Edge ( chromium based)";
    case agent.indexOf("opr") > -1 && !!window.opr:
      return "Opera";
    case agent.indexOf("chrome") > -1 && !!window.chrome:
      return "Chrome";
    case agent.indexOf("trident") > -1:
      return "MS IE";
    case agent.indexOf("firefox") > -1:
      return "Firefox";
    case agent.indexOf("safari") > -1:
      return "Safari";
    default:
      return "other";
  }
})(window.navigator.userAgent.toLowerCase());

// IF FIREFOX ::  id.classList.add('FIX_FIREFOX');


export function FIX(id, browser) {
  switch (browser) {
    case 'firefox':
      return id.classList.add("FIX_FIREFOX");
    case 'chrome':
      return 'none';
    default:
      return console.log("Browser Not Found");
  }
}
