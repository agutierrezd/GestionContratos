
Runner.pages.fieldsEvents["contractor_nombresfull_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'contractor_nombresfull_event',btnName:'contractor_nombresfull_event'}),before=function(){params["value"]=this.getValue();},after=function(result){ctrl.setValue(result["upper"]);},submit=function(){params["table"]="contractor_master_vinc";params["field"]=ctrl.fieldName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"contractor_nombresfull_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),masterTable:pageObj.masterTable,fieldsData:JSON.stringify(fieldsData)};$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};