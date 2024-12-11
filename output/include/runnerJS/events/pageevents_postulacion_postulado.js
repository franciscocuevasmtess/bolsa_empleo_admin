
Runner.pages.PageSettings.addPageEvent('bolsa_empleo.postulacion_postulado',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){function showConnectionWarning(){alert("Parece que no hay conexión a internet. Verifique su señal, desconéctese y vuelva a conectarse.");}
function showConnectionRestored(){}
if(navigator.onLine){showConnectionRestored();}else{showConnectionWarning();}
window.addEventListener('online',function(){showConnectionRestored();});window.addEventListener('offline',function(){showConnectionWarning();setTimeout(function(){window.location.reload();},5000);});;});